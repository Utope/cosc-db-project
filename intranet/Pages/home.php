<?php

require_once 'intranet/loginCheck.php';

$conn = mysqli_connect(DB_URL,DB_USERNAME,DB_PASSWORD);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Hey whats up!<br>";

echo mysqli_get_server_info($conn);