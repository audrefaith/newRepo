<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$dbconn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 



?> 