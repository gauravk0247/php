<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbgaurav";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successfu;
if(!$conn){
    die("Sorry we are failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

// Variables to be inserted into the table
$name = "ritik";
$role = "C";

// SQl query to be executed
$sql = "INSERT INTO `phptrip` ( `name`, `role`) VALUES ('$name', '$role')";
$result = mysqli_query($conn, $sql);

// Add a new programmer to the database
if ($result) {
    echo "The recorded has been inserted successfully! <br>";
}
else{
    echo "The record was not inserted successfully beacause of this error --->". mysqli_error($conn);
}
?>