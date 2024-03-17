<?php
// Include the database connection file
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doctor = $_POST['doctor'];
    $reason = $_POST['reason'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $userID = $_POST['user_id'];

    // Prepare and execute SQL statement to insert data into appointments table
    $stmt = $conn->prepare("INSERT INTO appointments (FullName, EmailAddress, PhoneNumber, SelectedDoctor, ReasonForAppointment, AppointmentDate, AppointmentTime, UserID) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Check if the SQL statement was prepared successfully
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the SQL statement
    $stmt->bind_param("ssssssss", $name, $email, $phone, $doctor, $reason, $date, $time, $userID);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to appointment_created.php
        header("Location: appointment_created.php");
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
