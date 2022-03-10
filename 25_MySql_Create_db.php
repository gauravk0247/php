<?php 
// Creating to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create the connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if(!$conn){
    die("Sorry we are failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

// Create a database
$sql = "CREATE DATABASE dbGaurav";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully! <br>";
}
else{
    echo "The db was not created successfully beacause of the this error ---> " . mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";
?>