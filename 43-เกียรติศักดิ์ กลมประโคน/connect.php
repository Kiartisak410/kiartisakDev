<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "restaurant";

    $con = mysqli_connect($host, $username, $password, $db_name);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }
?>