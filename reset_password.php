<?php
session_start();
include_once 'connection.php';

// Check if the reset token is provided in the URL
if (!isset($_POST['token'])) {
    $_SESSION['error_message'] = "Invalid reset token";
    header("Location: forgot_password.php");
    exit();
}

// Retrieve the reset token from the URL
$reset_token = $_POST['token'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the password and confirm password from the form
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate password and confirm password
    if ($password !== $confirm_password) {
        $_SESSION['error_message'] = "Passwords do not match";
        header("Location: reset_password.php?token=$reset_token");
        exit();
    }

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $query = "UPDATE users SET password = ?, reset_token = NULL WHERE reset_token = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $hashed_password, $reset_token);
    $stmt->execute();

    // Check if the password was successfully updated
    if ($stmt->affected_rows === 1) {
        // Password reset successful, redirect to login page
        $_SESSION['success_message'] = "Password reset successfully. You can now log in with your new password.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Failed to reset password. Please try again.";
        header("Location: reset_password.php?token=$reset_token");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .token-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: green;
            color: #fff;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="reset-password-container">
        <h2>Reset Password</h2>
        <form action="update_password.php" method="post">
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <button type="submit">Reset Password</button>
            </div>
            <?php
            // Display error message if present
            if (isset($_SESSION['error_message']) && $_SESSION['error_message'] != "") {
                echo "<p class='error-message'>" . $_SESSION['error_message'] . "</p>";
                // Clear the error message from the session
                $_SESSION['error_message'] = "";
            }
            ?>
        </form>
    </div>
</body>

</html>
