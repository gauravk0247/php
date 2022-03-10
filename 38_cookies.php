<?php 
echo "Welcome to the world of cookies";
// Cookies | Sessions

// Syntax to set a cookie
// echo time();
setcookie("category", "Books", time() + 86400, "/");
echo "<br>";
echo "The cookies is set <br>";

?>