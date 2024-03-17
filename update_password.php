<?php
session_start();
include_once 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email address from the form
    $email = $_POST['email'];

    // Retrieve the user ID based on the email address
    $query = "SELECT UserID FROM users WHERE Email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // User found, retrieve user ID
        $row = $result->fetch_assoc();
        $user_id = $row['UserID'];

        // Retrieve the new password from the form
        $new_password = $_POST['password'];

        // Hash the new password before storing it in the database
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the user's password in the database
        $update_query = "UPDATE users SET Password = ? WHERE UserID = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("si", $hashed_password, $user_id);
        $update_stmt->execute();

        // Check if the password was successfully updated
        if ($update_stmt->affected_rows === 1) {
            // Password update successful
            $_SESSION['success_message'] = "Password updated successfully.";
            header("Location: password_reset_success.php"); 
            exit();
        } else {
            $_SESSION['error_message'] = "Failed to update password. Please try again.";
            header("Location: reset_password.php");
            exit();
        }
    } else {
        // User not found with the provided email address
        $_SESSION['error_message'] = "User not found with the provided email address.";
        header("Location: reset_password.php");
        exit();
    }
} else {
    // If the form is not submitted, redirect to the reset password page
    header("Location: reset_password.php");
    exit();
}
?>
