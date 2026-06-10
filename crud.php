<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$localhost = "Localhost";
$username = "DB username";
$password = "DB password";
$dbname = "DB NAME";

$connection = mysqli_connect($localhost, $username, $password, $dbname);

// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }

if(!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
