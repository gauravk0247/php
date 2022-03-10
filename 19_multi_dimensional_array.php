<?php 
echo "Welcome to multi dimensional arrays in php";

//Creating a 2 dimensional arrays 

// $multiDim = array (
//     array(1,2,3,4,5),
//     array(6,7,8,9,0),
//     array(1,3,5,7,9));
//     echo "<br>";

    // echo var_dump($multiDim);
    // echo $multiDim[1][2];

    // Printing the contents of a 2 dimensional array
    // for ($i=0; $i < count($multiDim); $i++) { 
    //     echo var_dump($multiDim);
    //     echo "<br>";
    // }

    // for ($i=0; $i < count($multiDim); $i++) {
    //     for ($j=0; $j < count($multiDim[$i]); $j++) { 
    //         echo $multiDim[$i][$j];
    //         echo " ";
    //     } 
    //     echo "<br>";
    // }

    // Try to solve 3 dimensinal arrays in php
    $multiDim = array(array(array(1,2,3,4), array(5,6,7,8), array(9,0,1,2)));
    echo "<br>";

    for ($i=0; $i < count($multiDim); $i++) {
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            for ($k=0; $k < count($multiDim[$i]); $k++) { 
                echo $multiDim[$i][$j][$k];
                echo " ";
            }
            echo "<br>";
        } 
        echo "<br>";
    }
?>