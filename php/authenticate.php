<?php 
    // athenticate.php - using sessions to login
    session_start();   
    // Get data submitted in the form
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $authenticated = false; 

    // Checking input credentiasl against a flat file (used to store authenticated user credentials)
    if(file_exists('../JSON/users.json')){
        $contents = file_get_contents('../JSON/users.json');
        $usersArray = json_decode($contents, true);                 // true means php array

        foreach ($usersArray as $entry => $data)  {
            echo $data['username'];
            echo ' --> ';
            echo $data['password']; 
            echo '<br/>';


            if (($username == $data['username'])) {
                if($password == $data['password']) {
                    $authenticated = true;
                }
            }
        }

    } else {
        echo "<p>File does not exist</p>";
    }
    
    // Checking input credentials against a database (if using this, comment out the above flat file code)





    // Once a user has been authenticated

    if($authenticated) {
        $_SESSION['username'] = $username;   // set some session variables - could set $_SESSION['authenticated'] = true;
        $_SESSION['password'] = $password; 

        echo '<h2>Congrats ' . $username . ' you are authenticated</h2>';
        echo '<p>Please click <a href=\'member.php\'>here</a> to go to the members only page</p>';
    } else {
        echo '<p>You are not authenticated</p>'; 
    }


?>