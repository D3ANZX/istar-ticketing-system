<?php
// 1. Initialize session environment
session_start();

// 2. Unset all session array keys
$_SESSION = array();

// 3. Completely obliterate the session file on the server
session_destroy();

// 4. Send them clean back to the login script path
header("Location: ../view/login_page.php");
exit();
?>
