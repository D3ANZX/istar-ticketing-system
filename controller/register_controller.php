<?php

include("../model/db_connection.php");

if (isset($_POST['email_address'])) {

    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthdate = $_POST['birthdate'];
    $contact_no = $_POST['contact_no'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users_tbl
    (
        email_address,
        password,
        lastname,
        firstname,
        birthdate,
        contact_no,
        city,
        address
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
        '$address'
    )";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo "Registration Successful!";

    } else {

        echo "Registration Failed: " . mysqli_error($conn);

    }

}

?>