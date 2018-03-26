<?php 
	// create short variable names 
	$SpecialKitfoqty = $_POST[‘SpecialKitfoqty’]; 
	$BozenaShiroqty = $_POST[‘BozenaShiroqty’]; 
	$ZilzilTibsqty = $_POST[‘ZilzilTibsqty’];  
	?>
<html>
  <head>
    <title>ETHIOTASTE RESTAURANT - Order Results</title>
  </head>
  <body>
    <h1>ETHIOTASTE RESTAURANT</h1>
    <h2>Order Results</h2>
        <?php
	date_default_timezone_set ("American/New York");
         echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
         echo '<p>Your order is as follows: </p>';

         echo '<p>Your order is as follows: </p>';
         echo "$specialkitoqty.' special kitfo<br /> " ;
         echo "$bozena shiroqty.' bozena shiro.<br />";
         echo "$zilzil tibsqty.' Zilzil Tibs Plugs.<br />";
	 $totalqty =0;
	 $totalqty = $special kitfoqty + $bozena shiroqty + $zilzil tibsqty;
	 echo "Items ordered: ".$totalqty."<br />";
	 $totalamount = 0.00;
	 define('special kitfoPRICE', 15.00);
	 define('bozena shiroPRICE', 12.50);
	 define('zilzil tibsPRICE', 15.00);
	 $totalamount = $special kitfoqty * special kitfoPRICE
             + $bozena shiroqty * bozena shiroPRICE
             + $zilzil tibsqty * zilzil tibsPRICE;
	 echo "Subtotal: $".number_format($totalamount,2)."<br />";
	 $taxrate = 0.10;  // local sales tax is 10%
	 $totalamount = $totalamount * (1 + $taxrate);
	 echo "Total including tax: $".number_format($totalamount,2)."<br />";
	 switch($find)
	     case 'a':
		  echo 'Regular Customer';
	     break;
	     
	     case 'b':
	          echo TV Advert';
	     break;
	     case 'c':
		 echo 'Phone';
	     break;
	     case 'd':
		 echo 'Word of mouth';
	     break;
      ?>
   </body>
</html>