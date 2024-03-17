<?php
session_start();

// Database connection
include 'connection.php';

// Initialize error message variable
$_SESSION['error_message'] = '';


    // Get form data and sanitize it
 $email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
    

    // Query to check if user exists and credentials match
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result){
       
        // User found, verify password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['Password'])) {
            
            // Password is correct, redirect to respective dashboard
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['UserType'] = $row['UserType'];

            if ($row['UserType'] == 'doctor') {
                header("Location: doctor_dashboard.php");
                exit();
            }
    
            header("Location: User_dashboard.php");
            
            exit();
    


    } else {
            // Password incorrect, display error message
        $_SESSION['error_message']  = "Invalid email or password. Please try again.";
        header("Location:login.php");
        exit();
     }
    }else{

        echo "I am in else";
        $_SESSION['error_message']  = "Invalid email or password. Please try again.";
        header("Location:login.php");
        exit();

    }


// Close database connection
mysqli_close($conn);
?>