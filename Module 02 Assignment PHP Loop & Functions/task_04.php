<?php
// Module 02 Assignment: Mastering PHP loop & Function
/*
Task 4: PHP Fibonacci Series printing using a Function

Write a PHP function to print the first 15 numbers in the Fibonacci series. 
You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.                      

*/

function fibonacciNumbers($n, $firstNumber = 0, $secondNumer = 1){

    echo "Printing the first $n(Argument) Fibonacci numbers using Function: <br>";

    echo $firstNumber;
    echo ", ".$secondNumer;

    for($i = 0; $i < $n-2; $i++){

        $thirdNumber = $firstNumber + $secondNumer;

        echo ", ".$thirdNumber;

        $firstNumber = $secondNumer;
        $secondNumer = $thirdNumber;
    }
    echo ".";
}
fibonacciNumbers(15);