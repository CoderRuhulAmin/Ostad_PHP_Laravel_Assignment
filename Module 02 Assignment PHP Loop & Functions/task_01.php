<?php
// Module 02 Assignment: Mastering PHP loop & Function
/*
Task 1: PHP Looping with Increment using a Function

Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. 
In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 

The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print.

Also do the same using while loop and do-while loop also.
                            
*/
function evenForLoop($start, $end, $step){
    
    echo "Printing all Even numbers from $start to $end using For Loop: <br>";

    ($start % 2 != 0) ? $n = $start + 1 : $n = $start;

    for($n; $n <= $end; $n += $step){

        if($n != 0 && $n < $end){
            $even = $n;
            echo "$even, ";
        } else if($n == $end) {
            $even = $n;
            echo "$even.";
        }
    }
}
evenForLoop(1, 20, 2);
echo PHP_EOL."<br>";

echo PHP_EOL."<br>";
echo PHP_EOL."<br>";
function evenWhileLoop($start, $end, $step){
                                    
    echo "Printing all Even numbers from $start to $end using While Loop: <br>";

    $start % 2 == 0 ? $n = $start : $n = $start+1;

    while( $n <= $end){

        if($n != 0 && $n < $end){
            echo "$n, ";
        } else if($n == $end) {
            echo "$n.";
        }
        $n += $step;
    }
}
evenWhileLoop(1, 20, 2);
echo PHP_EOL."<br>";

echo PHP_EOL."<br>";
echo PHP_EOL."<br>";
function evenDoWhileLoop($start, $end, $step){

    echo "Printing all Even numbers from $start to $end using Do While Loop: <br>";

    $start % 2 == 0 ? $n = $start : $n = $start+1; 

    do{
        if($n != 0 && $n < $end){
            echo $n.", ";
        } else if($n == $end) {
            echo "$n.";
        }
        $n += $step;
    } while ( $n <= $end);
}
evenDoWhileLoop(1, 20, 2);
echo PHP_EOL."<br>";