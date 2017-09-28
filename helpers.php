<?php

namespace cosc{
    function getDB_Username(){
        return "bf8fd052104f8d";
    }
    
    function getDB_Password(){
        return "9d0ac3f3";
    }
    
    function getDB_Url(){
        return "us-cdbr-iron-east-05.cleardb.net";
    }
    
    function getPage_Login_Url(){
        return "http://" . $_SERVER["HTTP_HOST"] . "/intranet/pages/login.php";
    }
    
    function getPage_Home_Url(){
        return "http://" . $_SERVER["HTTP_HOST"] . "/intranet/pages/home.php";
    }
    
    function getDatabaseConnection(){
        $conn = mysqli_connect(getDB_Url(),getDB_Username(),getDB_Password());
        
        if(!$conn){
            die("Connection Failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    
    function verifyLoggedIn(){
        if($_SESSION['loggedIn'] != true){
            header("Location: " . PAGE_LOGIN);
        }
    }
}
