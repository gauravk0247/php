<?php 

// wrting to a file in PHP
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is the bset file on this palnnet.Please dont argue with me on this one.\n");
// fwrite($fptr, "This is another content two.\n");
// fwrite($fptr, "This is another content three.\n");
// fclose($fptr);

// Appending to a file in PHP
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr, "This is being appended to the file.\n");
fclose($fptr);
?>