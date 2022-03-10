<?php 
echo "Welcome to associative arrays in php";

// These are called indexed arrays
$arr = array("Gaurav", "Khairnar", "Patil", "students");
echo "<br>";
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
echo $arr[3];
echo "<br>";

// Associative Arrays
$favCol = array('gaurav' => 'red','krushna' => 'purple','prasad' => 'green', 6 => 'pink');


// echo $favCol['gaurav'];
// echo "<br>";
// echo $favCol['prasad'];
// echo "<br>";
// echo $favCol['krushna'];
// echo "<br>";
// echo $favCol[6];

foreach ($favCol as $key => $value) {
    echo "<br> Favourite color of $key is $value";
}
?>