<?php
//The main configuration for MARS


//The name of the database for MARS
define("DATABASE NAME","test");


//The name of the database for MARS
define("SERVER NAME","localhost");



//The name of the database for MARS
define("USER NAME","test");



//The name of the database for MARS
define("PASSWORD","test");




// Create connection
$conn = new mysqli(constant("SERVER NAME"), constant("USER NAME"), constant("PASSWORD"), constant("DATABASE NAME"));

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
echo 'suuuuuuuu';

