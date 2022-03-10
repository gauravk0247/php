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

$sql = "SELECT * FROM `phptrip` WHERE `role`='PHP'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase <br>";
$no = 1;
if ($num>0) {
    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno'] . "Hello " . $row['name'] . " Welcome to " . $row['role'];
        echo "<br>";
        $no = $no + 1;
    }
}

// Usage of WHERE Clause to Update Data
$sql = "UPDATE `phptrip` SET `name` = 'gaurav' WHERE `role` = 'java'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";
if (($result)) {
    echo "We updated record successfully";
}
else{
    echo "We could not update the record successfully";
}
?>