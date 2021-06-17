<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
        // User is authenticated
        echo 'Welcome ' . $_SESSION['username'];

        echo '<p>Members ONLY content </p>';
        echo '<p>Please click <a href=\'logout.php\'>here</a> to log out</p>';



    } else {
        // User not authenticated
        echo 'You are not authenticated - go away!'; 
    }

?>