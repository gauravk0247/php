<?php

// PHP data types
/*
1.String
2.Integer
3.Float
4.Boolean
5.Objcet
6.Array
7.Null
*/

// String - sequence of characters

$name = "gaurav";
$friend = "Krushna";
echo "$name frined name is $friend";
echo "<br>";

// Integer - Non decimal number
$income = 455;
$debts = -455;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - Decimal point number
$income = 344.6;
$debts = 34.9;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - Can be either true or false
$x = true;
$y = false;
echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";

// Objcet - Instances of classes
// Employee is a class --> harry can be one object 

// Array - Used to stored multiple values in a single variables
$friends = array("Gaurav", "Krushna", "Darshan", "Ritik");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4];  //will thrown an error as the size of array is 4

//Null
$name = NULL;
echo var_dump($name);
?>