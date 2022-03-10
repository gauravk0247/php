<?php 
//Connectimg to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbgaurav";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successfu;
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connectiom was successful <br>";
}
?>