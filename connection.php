<?php

    $server = "localhost";
    $user = "root";
    $password = ""; 
    $name = "login";

    try {
        $conn = mysqli_connect($server, $user, $password, $name);
        
    } catch (mysqli_sql_exception) {
        echo "Error connecting";
    }


?>