<?php
$submitted = !empty($_POST);
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Login handler page</title>
    </head>
    <body>
        <p>Form submitted? <?php echo (int) $submitted; ?></p>
        <p>Your login info is</p>
        <ul>
            <li><b>username: </b> <?php echo $_POST['username']; ?></li>
            <li><b>password: </b> <?php echo $_POST['password']; ?></li>
        </ul>
    </body>
</html>