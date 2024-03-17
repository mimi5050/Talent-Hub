<?php
// Include the connection file
include 'connection.php';

// Check if the record ID is provided in the URL
if (isset($_GET['record_id'])) {
    // Get the record ID from the URL
    $recordId = $_GET['record_id'];

    // SQL query to delete the record from the patientrecord table
    $sql = "DELETE FROM patientrecord WHERE RecordID = $recordId";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Close the database connection
        mysqli_close($conn);
        // Redirect back to the page where the deletion was initiated
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // If the record ID is not provided in the URL, redirect to an error page or handle the error as needed
    echo "Record ID not provided.";
}
?>
