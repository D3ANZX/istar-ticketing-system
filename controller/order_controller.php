<?php
// 1. Start the session here so we can grab the user_id
session_start();

// 2. Include the model file
require_once('../model/order.php');

// 3. Check if the form was actually posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concert_id = $_POST['concert_id'] ?? null;
    $order_amount = $_POST['order_amount'] ?? null;
    $user_id = $_SESSION['user_id'] ?? null;

    if ($concert_id && $order_amount && $user_id) {
        // 4. Call the function inside your model and pass the values
        $isSaved = createOrder($user_id, $concert_id, $order_amount);

        if ($isSaved) {
            // Redirect cleanly back to the dashboard after a successful post
            header("Location: ../view/dashboard_page.php");
            exit(); 
        } else {
            echo "Failed to save the order to the database.";
        }
    } else {
        echo "Invalid inputs, not set, or user not logged in.";
    }
}

// REMOVED $all_orders = readOrder(); from here.
// This function should be called inside your view file (e.g., dashboard_page.php), 
// not at the bottom of the form processing controller.
?>
