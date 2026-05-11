<?php

include("../model/db_connection.php");

//set variables
if (isset($_POST['email_address'])) {

    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthdate = $_POST['birthdate'];
    $contact_no = $_POST['contact_no'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    

}

?>