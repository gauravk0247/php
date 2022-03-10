<?php 
echo "Welcome to the stage where we are ready to get connects to a database <br>";

// Ways to connect to a MySql Database
// 1.MySqli extension (POP and OOP are two methods)
// 2.PDO (PHP Data Object)

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
?>