<?php
include_once 'defines.php';

session_start();

//If not logged in redirect to login page
verifyLoggedIn();



//If not logged in redirect to login page
function verifyLoggedIn(){
    if($_SESSION['loggedIn'] != true){
        header("Location: " . PAGE_LOGIN);
    }
    
}