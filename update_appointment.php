<?php
session_start();
include 'connection.php';

// Check if the appointment ID is provided and the user is logged in
if (isset($_POST['AppointmentID']) && isset($_SESSION['UserID'])) {
    $appointment_id = $_POST['AppointmentID'];
    $user_id = $_SESSION['UserID'];
    $fullname = $_POST['fullName'];
    $reason = $_POST['reasonForAppointment'];
    $date = $_POST['appointmentDate'];
    $time = $_POST['appointmentTime'];

    

    $sql = "UPDATE appointments SET fullname = ?, reasonForAppointment = ?, appointmentDate = ?, appointmentTime = ? WHERE AppointmentID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $fullname, $reason, $date, $time, $appointment_id);

    

    if ($stmt ->execute())
    {
        header("location: bookappointment.php");
    }
    
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
