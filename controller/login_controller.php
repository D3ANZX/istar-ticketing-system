<?php
// Initialize variables to avoid "Undefined variable" errors
$username_req = "";
$email_req = "";

// Check if data was actually posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check for a valid email (allow letters, numbers, @, and dots)
    if (preg_match("/^[a-zA-Z0-9@.]+$/", $_POST['email_address'])) {
        $email_req = $_POST['email_address'];
    }

    // Check password: ONLY set it if it DOES NOT contain < or >
    if (!preg_match("/[<>]/", $_POST['password'])) {
        $password_req = $_POST['password'];
    }
}
?>
