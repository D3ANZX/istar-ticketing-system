<?php
// Include your database file
require_once('db_connection.php');

// REMOVED global $conn from here. It must live inside the function scope to work.

function createOrder($userId, $concertId, $amount) {
    global $conn; // Accesses your active database link from db_connection.php

    // Use placeholders (?) for secure data handling
    $sql = "INSERT INTO orders_tbl (user_id, concert_id, order_amount) VALUES (?, ?, ?)";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // "iii" means integer, integer, integer.
        mysqli_stmt_bind_param($stmt, "iii", $userId, $concertId, $amount);
        
        // Execute the statement
        $result = mysqli_stmt_execute($stmt);
        
        // Close the statement
        mysqli_stmt_close($stmt);
        
        return $result; // Returns true on success, false on failure
    }

    return false;
}

function readOrder() {
    global $conn; // Accesses your active mysqli connection

    // SQL query to pull all records from the orders table
    $sql = "SELECT * FROM orders_tbl";
    $result = mysqli_query($conn, $sql);

    // Create an empty array to store rows
    $orders = [];

    if ($result) {
        // Loop through every single row inside the query result
        while ($row = mysqli_fetch_assoc($result)) {
            $orders[] = $row; // Append each row to our array
        }
        // Free memory associated with the result result
        mysqli_free_result($result);
    }

    return $orders; // Returns the full array of rows (or empty array if none found)
}

// REMOVED the header('Location: ...') redirect from here!
?>
