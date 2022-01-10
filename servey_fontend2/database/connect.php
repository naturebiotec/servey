<?php
    // connect database 
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "servey";

    // set Connect 
    $conn = mysqli_connect($host,$username,$password,$db);

    // set charset
    mysqli_set_charset($conn, "utf-8");

    // close report Notice
    error_reporting(E_ALL);
    ini_set('display_errors', false);
    ini_set('display_strartup_errors', false);

    // check status connect 
    if(isset($conn))
    {
        // echo "Statsu Database Connect : connection successfully";
    }else{
        die("Connnect Error: ".mysqli_connect_error());
    }
?>