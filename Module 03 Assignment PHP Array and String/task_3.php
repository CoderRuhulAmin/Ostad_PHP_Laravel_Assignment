<?php
/*
Task 3: Array Sorting  

Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
*/

echo "<strong>Task 3: Array Sorting  <br></strong>".PHP_EOL;

$grades = [85, 92, 78, 88, 95];
echo "Array Sortted in Descending Order: <br>";
function arraySortDec($grades){
    rsort($grades);
    return $grades;
}
print_r(arraySortDec($grades));