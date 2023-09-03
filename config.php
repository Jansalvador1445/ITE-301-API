<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "ite301";

    $connection = mysqli_connect($host, $user, $password, $dbname);

    // $hostURL = "192.168.68.105/views";

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    
    
    // MARK: - Just to test it out if works.
    // else {
    //     echo "It works!";
    // }