<?php
// Basic assignment.
$myMessage = 'My First PHP!';
# This is also a comment!
/*
      Multi-line
      comments!
    */

// Data-Types.
$myInteger = 54; // Integer
$myFloat = 38.968; // Float
$myBoolean = TRUE; //Boolean
$mySecondBoolean = false; // Lowercase works too!
$myString = 'Hello, World!'; // String
$myObject = new stdClass(); // Object
$myNull = NULL; // NULL
$myArray = array($myInteger, $myFloat, $myBoolean, $mySecondBoolean, $myString, $myObject, $myNull); // Array
$myOtherArray = ['First Item', 2, 'Third Item']; // Can also do it this way.

/**
 * Strings.
 */
$string1 = 'Hello, my name is ';
$string2 = 'Jeff';
$concattedString = $string1 . $string2; // We concatenate strings using the "." character. ("+" is reserved for addition.)
// Differece betwen single and double quotes.
$mySingleQuoteHelloString = 'Hi There! My name is $string2';
// Double qoutes are PARSED. PHP checks fot variable names to echo out.
$myDoubleQuoteHelloString = "Howdy there! My name is {$string2}"; // This is more specific, and would be good if you have overlapping variable names.
?>