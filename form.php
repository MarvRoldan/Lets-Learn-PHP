<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>
    <h1>PHP Form Handling</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>Sign In Form</h2>
    <form action="./form.php" method=""><?php // Forms can use GET or POST methods 
                                        ?>
        <label for="username">
            Username:
            <input type="text" name="username" id="username">
        </label>
        <label for="password">
            Password:
            <input type="password" name="password" id="password">
        </label>
        <input type="submit" value="Sign In">
    </form>
</body>
</html>