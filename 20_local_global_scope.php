<?php 
echo "Welcome to Local Global Scope in php <br>";
$a = 90;  //Global Variable
$b = 7;

function printValue(){
    // $a = 89;  //Local Variable
    global $a, $b; //Give me the access to this global variable
    $a = 100;
    $b = 590;
    echo "<br>";
    echo "The value of your variable is $a and b is $b <br>";
}
echo $a;
printValue();
echo "The value of your variable is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);
?>