<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// define("DB_HOST", "localhost");
// define("USERNAME", "phpuser");
// define("PASSWORD", "1234");
// define("DB_NAME", "crud_operations");

$localhost = "127.0.0.1";
$username = "phpuser";
$password = "1234";
$dbname = "crud_operations";

// $connection = mysqli_connect("localhost", "phpuser", "1234", "crud_operations");
$connection = mysqli_connect($localhost, $username, $password, $dbname);

// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }

if(!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


?>