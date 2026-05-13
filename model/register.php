<?php

    require('../controller/register_controller.php');
    require('db_connection.php');

    $default_role = "user";

    
    $sql = "INSERT INTO users_tbl
    (
        email_address,
        password,
        lastname,
        firstname,
        birthdate,
        contact_no,
        city,
        address,
        role
    )

    VALUES
    (
        '$email_address',
        '$password',
        '$lastname',
        '$firstname',
        '$birthdate',
        '$contact_no',
        '$city',
        '$address',
        '$default_role',
    )";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo "Registration Successful!";
        header('Location: ../view/login_page.php');

    } else {

        echo "Registration Failed: " . mysqli_error($conn);

    }
?>