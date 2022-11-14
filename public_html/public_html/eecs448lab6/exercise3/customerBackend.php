<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 1: Multiplication Table</title>
    <link href="style.css"
            rel="stylesheet"
            type="text/css"/>
  </head>
  <body>
	<h1> Joe Rubalcava </h1>
	<p> <b><a href="../../">HOME</a></b></p>


<?php 
    $emailAddy = $_POST["emailAddy"]; 
    $userPassword = $_POST["userPassword"]; 
    $numOfFuji = $_POST["numOfFuji"]; 
    $numOfGoldenDelicious = $_POST["numOfGoldenDelicious"]; 
    $numOfHoneycrisp = $_POST["numOfHoneycrisp"];
    $shippingSpeed = $_POST["shippingSpeed"];

    $costOfFujis = $numOfFuji * 1.5;
    $costOfGoldenDelicious = $numOfGoldenDelicious * .75;
    $costOfHoneycrips = $numOfHoneycrisp * 2.5;
    
    $sumOfCostOfApples = $costOfFujis + $costOfGoldenDelicious + $costOfHoneycrips;

    $costOfShipping = 0;
    if($shippingSpeed == "fiveDollarMakeYouHollerThreeDay"){
        $costOfShipping = 5;
    }else if ($shippingSpeed == "fiftyDollarOvernight"){
        $costOfShipping = 50;
    }

    $total = $sumOfCostOfApples + $costOfShipping;

    echo "<h2>Thank You For Your Order!</h2>";
    echo "<h3>Customer Receipt for Order";
    echo " " . $numOfFuji . $costOfFujis . $numOfGoldenDelicious . $costOfGoldenDelicious . $numOfHoneycrisp . $costOfHoneycrips . $costOfShipping; 
    echo "</h3>";

    echo "<div><p>Customer Data: <br>EMail Address: " . $emailAddy . "<br>Password: " . $userPassword . "</p></div>";
    
    echo "<div><table class=\"customTable\">";
    echo "<thead><tr><td></td><td><b>Quantity Ordered</b></td><td><b>Cost Per Item</b></td><td><b>Subtotal</b></td></tr></thead>";
    echo "<tr><td><b>Fuji Apples</b></td><td>" . $numOfFuji . "</td><td> $1.50 </td><td>$" . $costOfFujis . "</td></tr>";
    echo "<tr><td><b>Golden Delicious Apples</b></td><td>" . $numOfGoldenDelicious . "</td><td> $0.75 </td><td>$" . $costOfGoldenDelicious . "</td></tr>";
    echo "<tr><td><b>Fuji Apples</b></td><td>" . $numOfHoneycrisp . "</td><td> $2.50 </td><td>$" . $costOfHoneycrips . "</td></tr>";
    echo "<tr><td><b>Shipping</b></td><td>";
    if($shippingSpeed == "fiveDollarMakeYouHollerThreeDay"){
        echo "Five Dollar Make You Holler Three Day Shipping</td><td></td><td>$5.00</td>";
    }else if ($shippingSpeed == "fiftyDollarOvernight"){
        echo "Wicked Fast Overnight Delivery</td><td></td><td>$50.00</td>";
    }else{
        echo "Freaky Free 7-Day Delivery</td><td></td><td>$0.00</td>";
    }
    echo "</td></tr>";
    echo "<tr><td><b>TOTAL</b></td><td></td><td></td><td>$" . $total . "</td></tr>";
    
    echo "</table></div>";
    echo "<p><b><a href=\"../exercise3/customerFrontend.html\">Place Another Order</a></b></p>";
    
?> 