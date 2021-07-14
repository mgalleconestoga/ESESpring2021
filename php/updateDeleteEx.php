<?php 
// Example 1
/************************************************************ */
/*
// Connect to database by instantiating a PHP Database Object (PDO)
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Database name
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


// Update fields in elevatorNetwork 

$query =    'UPDATE elevatorNetwork
            SET status = 2, currentFloor = 3
            WHERE nodeID = 3'; 

$db->exec($query); 

// Show change to database
$query2 = 'SELECT * FROM elevatorNetwork'; 
$rows = $db->query($query2); 
foreach ($rows as $row) {
    var_dump($row);
    echo "<br/><br/>"; 
}
*/

// Example 2 - function to update certain fields in the database
/* *************************************************************** */

function update_elevatorNetwork(int $node_ID, int $new_status = 1): void {
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator',     // Database name
        'michaelG',                                 // username
        'myPassword'                                // Password
    );
    
    // Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Use transactions 
    $db->beginTransaction();        // Roll back point
    try {
        // Change elevatorNetwork 
        $query = 'UPDATE elevatorNetwork
        SET status = :stat
        WHERE nodeID = :id'; 

        $statement = $db->prepare($query); 
        //$statement->bindValue('fieldName', $fieldName);
        $statement->bindValue('stat', $new_status); 
        $statement->bindValue('id', $node_ID);
        if(!$statement->execute()) {
            throw new Exception('Error - statement did not successfully execute');
        }
        echo "<br/><br/>Success - database updated<br/><br/>";
        $db->commit(); 
         
    } catch (Exception $e) {
        echo "<br/><br/>Error - statement did not execute successfully<br/><br/>";
        $db->rollBack(); 
    }
}

// Start program

update_elevatorNetwork(1, 6);       // Should succeed
update_elevatorNetwork(1000, 6);    // Should fail



// Show table 

$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Database name
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query2 = 'SELECT * FROM elevatorNetwork'; 
$rows = $db->query($query2); 
foreach ($rows as $row) { 
    var_dump($row);
    echo '<br/><br/>';
}

?>