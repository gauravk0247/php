<?php 
echo "Welcome to foreach loop in php <br>";

$arr = array("Banana", "Apple", "Mango", "Bread", "Butter");
// for ($i=0; $i < count($arr) ; $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as $value) {
    echo "$value <br>";
}
?>