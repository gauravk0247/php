<?php 
echo "Welcome to the world of dates <Br>";
// $d = date("dS F Y, g:i A");
// echo "Today date is $d <br>";

// Quick Quiz - Post at least 3 example of dates in php

// Prints something like: Monday 8th of August 2005 03:12:46 PM
// echo date('l js \of F Y h:i:s A');

// Prints: July 1, 2000 is on a saturday
// echo "<br> July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// $year = date("Y");
// echo "<br>";
// echo "Copyright $year | All rights reserved <br>";

$da = date(" r");
echo $da;
echo "<br>";

$dat = date("j  n o g:i A");
echo $dat;
echo "<br>";

$date = date("jS M Y c");
echo $date;
?>