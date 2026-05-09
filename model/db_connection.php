<?php
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "istardb";


    //DB Connection init
    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

    //Connection check
    if (!$conn){
       die("Connection failed: " . mysqli_connect_error()); 
    }

    echo "Connected successfully";
?>