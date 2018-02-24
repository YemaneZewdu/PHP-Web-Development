-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 02:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-ordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` varchar(255) NOT NULL,
  `AUTHOR` varchar(255) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `AUTHOR`, `TITLE`, `PRICE`) VALUES
('0-672-316509-', 'PRUITT.ETAL', 'TEACH YOURSELF GIMP IN 24 HOURS', 24.99),
('0-672-31697-8', 'MICHAEL MORGAN', 'JAVA 2 FOR PROFESSIONAL DEVELOPERS', 34.99),
('0-672-31745-1', 'THOMAS DOWN', 'INSTALLING GNU/LINUX', 24.99);

-- --------------------------------------------------------

--
-- Table structure for table `books_reviews`
--

CREATE TABLE `books_reviews` (
  `ISBN` varchar(255) NOT NULL,
  `REVIEW` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CUSTOMERID` int(4) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CUSTOMERID`, `NAME`, `ADDRESS`, `CITY`) VALUES
(1, 'JULIE SMITH', '25 OAK STREET', 'AIRPORT WEST'),
(2, 'ALAN WONG', '1/47 HAINES AVENUE', 'BOX HILL'),
(3, 'MICHELLE ARTHUR', '357 NORTH ROAD', 'YARRAVILLE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDERID` int(4) NOT NULL,
  `CUSTOMERID` int(4) NOT NULL,
  `AMOUNT` float NOT NULL,
  `DATE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDERID`, `CUSTOMERID`, `AMOUNT`, `DATE`) VALUES
(1, 3, 27.5, '02-APR-2007'),
(2, 1, 12.99, '15-APR-2007'),
(3, 2, 74, '19-APR-2007'),
(4, 3, 6.99, '01-MAY-2007');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `ORDERID` int(4) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `QUANTITY` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`ORDERID`, `ISBN`, `QUANTITY`) VALUES
(1, '0-672-31697-8', 1),
(2, '0-672-31745-1', 2),
(1, '0-672-31697-8', 1),
(2, '0-672-31745-1', 2),
(2, '0-672-316509-', 1),
(3, '0-672-31697-8', 1),
(4, '0-672-31745-1', 1),
(4, '0-672-316509-', 2),
(4, '0-672-31697-8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `books_reviews`
--
ALTER TABLE `books_reviews`
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDERID`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `ORDERID` (`ORDERID`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books_reviews`
--
ALTER TABLE `books_reviews`
  ADD CONSTRAINT `books_reviews_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CUSTOMERID`) REFERENCES `customers` (`CUSTOMERID`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`ORDERID`) REFERENCES `orders` (`ORDERID`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
