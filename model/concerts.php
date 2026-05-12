
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require('../controller/order_controller.php');
require('db_connection.php');




$sql = "SELECT * FROM concerts_tbl";


$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "ss", $email_req, $password_req);

// 4. Execute
mysqli_stmt_execute($stmt);

// 5. Get results
$result = mysqli_stmt_get_result($stmt);

//FETCH RECORD AS OBJECT
if ($row = mysqli_fetch_assoc($result)) {

    //SAVE SESSION FOR THE ENTIRE APP TO USE
    $_SESSION['logged_in'] = true;
    $_SESSION['email_req'] = $row['email_address'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['birthdate'] = $row['birthdate'];
    $_SESSION['contact_no'] = $row['contact_no'];
    $_SESSION['city'] = $row['city'];
    $_SESSION['address'] = $row['address'];
    //REDIRECT TO INDEX
    header('Location: ../index.php');
    exit();
} else {
    echo "Invalid email or password.";
}


?>
