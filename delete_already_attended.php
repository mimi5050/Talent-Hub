<?php
session_start();
// Include the database connection
include 'connection.php';
echo "UserType: " . $_SESSION['UserType'] . "<br>";
echo "Appointment ID: " . $_GET['appointment_id'] . "<br>";
// Check if the user is logged in as a doctor
if ($_SESSION['UserType'] === 'doctor' && isset($_GET['appointment_id'])) {

    // Sanitize the appointment ID
    $appointment_id = mysqli_real_escape_string($conn, $_GET['appointment_id']);

    // Prepare and execute the delete query
    $sql = "DELETE FROM appointments WHERE AppointmentID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $appointment_id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        // Redirect back to the page displaying patients to attend
        header("Location: Patients_to_attend.php");
        exit();
    } else {
        // If deletion failed, display an error message
        $_SESSION['error_message'] = "Failed to delete appointment. Please try again.";
        header("Location: Patients_to_attend.php");
        exit();
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If user is not logged in as a doctor or appointment ID is not set, echo an error message
    echo "You are not authorized to perform this action.";
}
?>
