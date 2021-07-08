<?php

// Connect to database by instantiating a PHP Database Object (PDO)
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=joinExample',     // Database name either 'elevator' or 'joinExample'
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// DEMO 1: Show contents of table
/*
$rows = $db->query("SELECT * FROM elevatorNetwork");
foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
echo '<br/><br/><br/>';
*/

// DEMO 2: Add data to table - Note the first argument of VALUE must be changed as it must be UNIQUE (CHAR(10) variable)
/*
$query = 'INSERT INTO elevatorNetwork(date, time, nodeID, status, currentFloor, requestedFloor, otherInfo) VALUES ("2020-02-22", "12:05:01", 3, 1,1,1, "na")'; 
$result = $db->exec($query); 
var_dump($result);  // should be true
echo '<br/>';
$error = $db->errorInfo()[2]; 
var_dump($error);  // Should be null if no error
echo '<br/><br/><br/>';

// Redisplay contents of table
echo '<br/><br/>';
$rows = $db->query("SELECT * FROM elevatorNetwork");
foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
*/

// Demo #3: Adding data using parameters (Method #1)
/*
$query = 'INSERT INTO elevatorNetwork(date, time, status, currentFloor, requestedFloor, otherInfo)
         VALUES (:date, :time, :status, :currentFloor, :requestedFloor, :otherInfo)';

$statement = $db->prepare($query); 

$params = [
    'date' => '2021-03-10',
    'time' => '10:10:10',
    'status' => 1,
    'currentFloor' => 1,
    'requestedFloor' => 1,
    'otherInfo' => 'na'
];

$result = $statement->execute($params); 
var_dump($result);
echo '<br/><br/>';

$rows = $db->query("SELECT * FROM elevatorNetwork");
foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
echo '<br/><br/><br/>';
*/

// Demo #4 -Adding data using parameters (Method #2 - bindValue())
/*
$query = 'SELECT * FROM elevatorNetwork WHERE nodeID = :nodeID';

$statement = $db->prepare($query); 
$statement->bindValue('nodeID', 4); 
$result = $statement->execute();
echo $result;
echo "<br/><br/>";
$rows = $statement->fetchAll(); 

foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
*/

// Demo 5 - Join Queries

$query = 'SELECT table1.nodeID, table1.status, table1.currentFloor, table2.requestedFloor, table2.otherInfo
          FROM table1, table2
          WHERE table1.nodeID = table2.nodeID'; 

$rows = $db->query($query);

foreach ($rows as $row) {
    var_dump($row);
    echo "<br/><br/>";
}

?>