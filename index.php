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

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $myMessage; ?></title>
</head>

<body>
    <h1><?php echo $myMessage; ?></h1>
    <pre>
        <?php
        // Var dump is great for seeing what's inside!
        var_dump($myArray);
        ?>
    </pre>
    <h2>Concatenated String</h2>
    <p>
        <?php echo $concattedString; ?>
    </p>
</body>

</html>