
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require('../controller/login_controller.php');
require('db_connection.php');



// 1. Use double quotes for the string and placeholders (?) for data
$sql = "SELECT * FROM users_tbl WHERE email_address = ? AND password = ?";

// 2. Prepare the statement
$stmt = mysqli_prepare($conn, $sql);

// 3. Bind the actual variables to the placeholders ("ss" means two strings)
mysqli_stmt_bind_param($stmt, "ss", $email_req, $password_req);

// 4. Execute
mysqli_stmt_execute($stmt);

// 5. Get results
$result = mysqli_stmt_get_result($stmt);

//FETCH RECORD AS OBJECT
if ($row = mysqli_fetch_assoc($result)) {

    //SAVE SESSION FOR THE ENTIRE APP TO USE
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['email_req'] = $row['email_address'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['birthdate'] = $row['birthdate'];
    $_SESSION['contact_no'] = $row['contact_no'];
    $_SESSION['city'] = $row['city'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['role'] = $row['role'];
    //REDIRECT TO INDEX
    header('Location: ../index.php');
    exit();
} else {
    echo "Invalid email or password.";
}


?>
