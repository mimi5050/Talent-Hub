<?php
// Include the connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $patientName = $_POST['patient_name'];
    $doctorName = $_POST['doctor_name'];
    $diagnosis = $_POST['diagnosis'];
    $prescription = $_POST['prescription'];
    $date = $_POST['date'];

    // SQL query to insert data into the patientrecord table
    $sql = "INSERT INTO patientrecord (PatientName, DoctorName, Diagnosis, Prescription, Date) 
            VALUES ('$patientName', '$doctorName', '$diagnosis', '$prescription', '$date')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Close the database connection
        mysqli_close($conn);
        // Redirect to Recordsavedsuccessfully.php
        header("Location: Recordsavedsuccessfully.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
