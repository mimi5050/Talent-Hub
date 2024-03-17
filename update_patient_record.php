<?php
// Include the connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $recordID = $_POST['RecordID'];
    $patientName = $_POST['PatientName'];
    $doctorName = $_POST['DoctorName'];
    $diagnosis = $_POST['Diagnosis'];
    $prescription = $_POST['Prescription'];
    $date = $_POST['Date'];

    // SQL query to update the patient record
    $sql = "UPDATE patientrecord 
            SET PatientName='$patientName', DoctorName='$doctorName', Diagnosis='$diagnosis', Prescription='$prescription', Date='$date' 
            WHERE RecordID='$recordID'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Close the database connection
        mysqli_close($conn);
        // Redirect to Patient_Records.php after successful update
        header("Location: Patient_Records.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
