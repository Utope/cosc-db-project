<?php
require_once 'defines.php';

session_start();

if($_SESSION['loggedIn'] != true){ 
    header("Location: " . PAGE_LOGIN);
}