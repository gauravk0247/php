<?php 
// Operators in PHP 
/*
1.Arithmetic Operatos
2.Assignment Operators
3.Comaparison Operators
4.Logical Operators
*/
$a = 35;
$b = 5;
// 1.Arithmetic Operatos
echo "For a + b , the result is " . ($a + $b) . "<br>";
echo "For a - b , the result is " . ($a - $b) . "<br>";
echo "For a * b , the result is " . ($a * $b) . "<br>";
echo "For a / b , the result is " . ($a / $b) . "<br>";
echo "For a % b , the result is " . ($a % $b) . "<br>";
echo "For a ** b , the result is " . ($a ** $b) . "<br>";

// 2.Assignment Operators
// $x = $a;
// echo "For x, the value is " . $x . "<br>";

// $a +=5;
// echo "For y the value is " . $a . "<br>";

// $a -=5;
// echo "For y the value is " . $a . "<br>";

// $a *=5;
// echo "For y the value is " . $a . "<br>";

// $a /=5;
// echo "For y the value is " . $a . "<br>";

// $a %=5; //$a = $a % 5
// echo "For y the value is " . $a . "<br>";

// 3.Comaparison Operators
$x = 70;
$y = 90;

// echo "For x==y the result is ". "<br>";
// echo var_dump($x == $y);
// echo "<br>";

// echo "For x > y the result is ". "<br>";
// echo var_dump($x > $y);
// echo "<br>";

// echo "For x < y the result is ". "<br>";
// echo var_dump($x < $y);
// echo "<br>";

// echo "For x <> y the result is ". "<br>";
// echo var_dump($x <> $y);
// echo "<br>";

// echo "For x <= y the result is ". "<br>";
// echo var_dump($x <= $y);
// echo "<br>";

// 4.Logical Operatos
$m = true;
$n = false;

echo "For m and n , the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n , the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n , the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n , the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is ";
echo var_dump(!$m);
echo "<br>";

echo "For !n , the result is ";
echo var_dump(!$n);
echo "<br>";
?>