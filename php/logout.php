<?php
    session_start();
    session_destroy();

    echo "<p>Congrats, you are now logged out. Click <a href=../login.html>here</a> to log in again</p>";
?>