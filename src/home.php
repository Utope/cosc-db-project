<?php

require_once 'defines.php';

$conn = new mysqli(DB_URL,DB_USERNAME,DB_PASSWORD);

if($conn->connect_error){
    echo $conn->connect_error;
    die("Database connection failed: " . $conn->connect_error);
}


echo "Home page <br>";
echo "blahhhh";