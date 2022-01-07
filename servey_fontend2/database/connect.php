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

    // check status connect 
    if(isset($conn))
    {
        // echo "Statsu Database Connect : connection successfully";
    }else{
        die("Connnect Error: ".mysqli_connect_error());
    }
?>