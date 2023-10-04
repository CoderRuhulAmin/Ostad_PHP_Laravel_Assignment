<?php
// Module 02 Assignment: Mastering PHP loop & Function
/*
Task 3: PHP Break on Condition

Write a PHP program that calculates and prints the first 10 Fibonacci numbers. 
But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.

*/

function fibonacciNumbers($n){
    
    echo "Printing the first ". $n+3 ." Fibonacci numbers but not greater than 100: <br>";

    $firstNumber = 0;
    $secondNumer = 1;

    echo $firstNumber;
    echo ", ".$secondNumer;

    for($i = 0; $i <= $n; $i++){

        $thirdNumber = $firstNumber + $secondNumer;

        if($thirdNumber > 100){
            break;
        } else {
            echo ", ".$thirdNumber;
        }

        $firstNumber = $secondNumer;
        $secondNumer = $thirdNumber;
    }
    echo ".";
}
fibonacciNumbers(7);
echo "<br>";
echo "<br>";
fibonacciNumbers(17);
                            