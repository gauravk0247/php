<?php 
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rakesh = [56, 78, 56, 79, 88, 90];
$sumMarks = processMarks($rakesh);
echo "Total marks scored by rakesh out of 600 is $sumMarks <br>";

$gaurav = [65, 88, 56, 99, 88, 95];
$sumMarks = processMarks($gaurav);
echo "Total marks scored by rakesh out of 600 is $sumMarks";

function angMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rakesh = [56, 78, 56, 79, 88, 90];
$sumMarks = angMarks($rakesh);
echo "Total marks scored by rakesh out of 600 is $sumMarks <br>";

$gaurav = [65, 88, 56, 99, 88, 95];
$sumMarks = angMarks($gaurav);
echo "Total marks scored by rakesh out of 600 is $sumMarks";
?>