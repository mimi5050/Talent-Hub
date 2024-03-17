<?php
session_start();
include 'connection.php';

// Check if the appointment ID is provided and the user is logged in
if (isset($_GET['appointment_id']) && isset($_SESSION['UserID'])) {
    $appointment_id = $_GET['appointment_id'];
    $user_id = $_SESSION['UserID'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM appointments WHERE AppointmentID = ? AND UserID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $appointment_id, $user_id);
    $stmt->execute();

    // Check if the appointment was deleted successfully
    if ($stmt->affected_rows > 0) {
        // Redirect to the appointments page
        header("Location: bookappointment.php");
    } else {
        echo "Failed to delete appointment. Please try again.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>




   