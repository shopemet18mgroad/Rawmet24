<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    session_start();
}
// Check connection

?>
