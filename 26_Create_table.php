<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbgaurav";

$conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Sorry we are failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful <br>";
    }

    // Create a table in the db
    $sql = "CREATE TABLE `phptrip` ( `sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `role` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`(4)))";
    $result = mysqli_query($conn, $sql);

    // Check for the table creation success
    if($result){
        echo "The table was created successfully! <br>";
    }
    else{
        echo "The table was not created successfully beacause of this error --->" . mysqli_error($conn);
    }
?>