<?php
// Module 02 Assignment: Mastering PHP loop & Function
/*
Task 2: PHP Loop Skip Printing Multiples of 5

Create a PHP script that prints numbers from 1 to 50 using a for loop. However, 
when the loop encounters a multiple of 5, 
it should skip that number using the continue statement and continue to the next iteration.
*/

$start = 1;
$end = 54;
$step = 1;
echo "Printing all numbers from $start to $end except multiples of 5: <br>";
                              
for($n = $start; $n<=$end; $n += $step)
{
    if($n % 5 == 0){
        continue;

    } else if($n == $end || $n == $end - 1){

        if($n == $end -1 && $end % 5 != 0){

            echo $n.", ";

        } else {
            echo $n.".";
        }

    } else {
        echo $n.", ";
    }
}
