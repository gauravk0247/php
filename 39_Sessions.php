<?php 

// What is a session?
// Use to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Gaurav";
$_SESSION['favCat'] = "Books";
echo "We have saved your sessions";

?>