<?php

require_once '../defines.php';

$conn = mysqli_connect(DB_URL,DB_USERNAME,DB_PASSWORD);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

echo mysqli_get_server_info($conn);