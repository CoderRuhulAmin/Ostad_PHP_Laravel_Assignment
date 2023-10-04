<?php
/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
*/

echo "<strong>Task 5: Password Generator  <br></strong>".PHP_EOL;

function generatePassword($length)
{

    $password = '';
    // Mapping the Requirements
    $numbers = '1234567890';
    $letterUp = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $letterLow = 'abcdefghjkmnpqrstuvwxyz';
    $specialCase = '!@#$%^&*()_+';

    $passwordSets = [$numbers, $letterUp, $letterLow, $specialCase];

    //Get random character from the array
    foreach ($passwordSets as $passwordSet) {
        $password .= $passwordSet[array_rand(str_split($passwordSet))];
    }

    // 12 is the length of password we want
    while (strlen($password) < $length) {
        $randomSet = $passwordSets[array_rand($passwordSets)];
        $password .= $randomSet[array_rand(str_split($randomSet))];
    }
    echo $password;
}
generatePassword(12);