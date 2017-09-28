<?php
require_once 'intranet/defines.php';

session_start();

if($_SESSION['loggedIn'] != true){ 
    header("Location: " . PAGE_LOGIN);
}