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

$sql = "DELETE FROM `phptrip` WHERE `role`='C' LIMIT 5";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";

if ($result) {
    echo "Delete Successfully";
}
else{
    echo "Not Delete successfully due to this error --. $err";
}
?>