<?php

$name = "Gaurav is a student";
echo $name;
echo "<br>";

echo "The lenght of my string is ". strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo"<br>";
echo strpos($name, "Gaurav");
echo"<br>";
echo str_replace("Gaurav", "Prasad", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("  This is a SVIT student   ");
echo "<br>";
echo ltrim("    This is a svit student   ");
echo "</pre>";
?>