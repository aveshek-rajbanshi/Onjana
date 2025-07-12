<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "Onjana";

    $conn = mysqli_connect($servername, $username, $password, $databasename);

    if($conn){
    }else{
        echo "Database connection failed.";
    }

?>
