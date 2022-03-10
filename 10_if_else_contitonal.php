<?php 
// $a = 455;
// $b = 10;

// if($a > 65){
//     echo "a is grater than 65";
// }
// else{
//     echo "a is not grater than 65";
// }

$age = 25;
// If else ladder
// if($age>18){
//     echo "You can drink water with milk and tea";
// }
// elseif($age>13){
//     echo "You can drink tea milk with water. No tea for you";
// }
// else{
//     echo "You can drink water only";
// }

// if($age>18){
//     echo "You can drink water with milk and tea <br>";
// }
// if($age>13){
//     echo "You can drink tea milk with water. No tea for you <br>";
// }
// else{
//     echo "You can drink water only <br>";
// }
// echo "<br>";
// echo "done";
// Quick quiz - Create if else ladder using more than one elseif Write a program to allow a driver to drive only when his age is greater than 25 and less than 65

$age = 23;
if($age == 18){
    echo "You can drive the vehicles";
}
elseif($age < 21){
    echo "You can drive the light motor vehicles";
}
elseif($age > 25){
    echo "You can drive the heavy motor vehicles";
}
else{
    echo "Your age is defined for drive the vehicles";
}

?>