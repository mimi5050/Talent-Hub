<?php
// Include the database connection file
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $created_at = $_POST['created_at'];

    // Prepare and execute SQL statement to insert data into appointments table
    $stmt = $conn->prepare("INSERT INTO feedback (name,	email, subject,	message	, created_at) VALUES (?, ?, ?, ?, ?)");
    
    // Check if the SQL statement was prepared successfully
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the SQL statement
    $stmt->bind_param("sssss", $name, $email, $subject, $message,$created_at);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to feedback_recieved.php
        header("Location: feedback_recieved.php");
        exit();
    } else {
        // Error occurred while saving appointment
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
}
?>
