<?php 

// Connect to database by instantiating a PHP Database Object (PDO)
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Database name
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// To delete all data from the table use TRUNCATE TABLE <tablename> (there are some UNIQUE fields in the example table)

// DEMO 1: Show contents of table
/*
$rows = $db->query("SELECT * FROM newTable");
foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
*/

// DEMO 2: Add data to table - Note the first argument of VALUE must be changed as it must be UNIQUE (CHAR(10) variable)
/*
$query = 'INSERT INTO newTable(col2, col3, col4, text) VALUES ("byetoyouB!", 7, 3.5, "this is awesome")'; // NOTE col1 is a PRIMARY KEY we dont write to
$result = $db->exec($query); 
var_dump($result);  // should be true
echo '<br/>';
$error = $db->errorInfo()[2]; 
var_dump($error);  // Should be null if no error
echo '<br/>';

// Redisplay contents of table
$rows = $db->query("SELECT * FROM newTable");
foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
*/

// DEMO 3 - Inserting data into database via a formatted query
/*
$query = 'INSERT INTO newTable(col2,col3,col4,text)
                  VALUES (:col2In, :col3In, :col4In, :textIn)';  // variable identified by ':'

$statement = $db->prepare($query);  // Statement object that can insert and fetch data
$params = [
    'col2In' => 'HiThereBe!',       // must be unique and 10 characters (change this for every run)
    'col3In' => 6,
    'col4In' => 5.8,
    'textIn' => 'Wow I like this'
];

$result = $statement->execute($params);     // Supply the data to the statement object (puts data into variables)

var_dump($result); // True if successfully added to database
echo '<br/>';

// Redisplay contents of table
$rows = $db->query("SELECT * FROM newTable");
foreach($rows as $row) {
    var_dump($row);
    echo "<br/>";
}
*/
?>