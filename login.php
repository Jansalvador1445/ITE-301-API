<?php

    include 'config.php'; 

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection ,$_POST['password']);

    
    $sql_query = "SELECT * FROM Users WHERE username='".$username."' AND password='".$password."'";

    if (
        $result -> num_rows == 1 && 
        $username == $row['username'] &&
        $password == $row['password'] 
    ) {
        echo "Successfully Logged In!";
    } else {
        echo "Please try again!";
    }
?>