<?php
// Module 03 Assignment PHP Array and String
/*
Task 1: String Manipulation

Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text.
*/


echo "<strong>Task 1: String Manipulation <br></strong>".PHP_EOL;

$text = "The quick brown fox jumps over the lazy dog.";

function makeLowercase($text){
    $lowerText = strtolower($text);
    return "<strong>Text in lowercase: </strong> {$lowerText}";
}

$newText = makeLowercase($text);
echo "{$newText} <br>";

echo "<br>".PHP_EOL;

$replacedText = str_replace("brown", "red", $text);
echo "<strong>The Replaced Text: </strong>{$replacedText} <br>";


echo "<br>".PHP_EOL;
echo "<br>".PHP_EOL;

function modifiedText($text){
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    return  $text;
}
$newText = modifiedText($text);
echo "Modified Text: {$newText} <br>";

echo "<br>".PHP_EOL;
echo "<br>".PHP_EOL;