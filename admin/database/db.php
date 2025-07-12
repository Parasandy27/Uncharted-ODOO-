<?php 
$host = "localhost";
$user = "root";
$password = ""; // Your DB password
$dbname = "tuvara";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "done";
}


?> 