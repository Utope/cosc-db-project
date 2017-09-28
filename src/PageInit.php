<?php
session_start();

//If user is not logged in redirect them to login
if($_SESSION['loggedIn'] != true){
 //header("Location: " . "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); 
  echo "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  var_dump($_SERVER);
}