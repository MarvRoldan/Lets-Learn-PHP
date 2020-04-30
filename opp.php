<?php 
    /**
     * A basic object.
     */
    $myObject = new stdClass(); // "new" keyword is REQUIRED when maming an object from a CLASS (or BLUEPRINT).
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <h1>PHP OOP</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>$myObject dump:</h2>
    <pre><?php var_dump( $myObject ); ?></pre>
</body>
</html>