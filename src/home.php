<?php

require_once '../defines.php';

$conn = mysqli_connect(DB_URL,DB_USERNAME,DB_PASSWORD);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}


echo "Home page <br>";
echo "blahhhh";