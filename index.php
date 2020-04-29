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
    $myArray = array( $myInteger, $myFloat, $myBoolean, $mySecondBoolean, $myString, $myObject, $myNull ); // Array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $myMessage; ?></title>
</head>
<body>
    <h1><?php echo $myMessage; ?></h1>
</body>
</html>