<?php
// Include the database connection file
include 'connection.php';

// Initialize the doctorList array
$doctorList = [];

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to fetch names of users registered as doctors
$sql = "SELECT Username FROM users WHERE UserType = 'doctor'";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Fetch and store doctor names in the doctorList array
    while ($row = mysqli_fetch_assoc($result)) {
        $doctorList[] = $row;
    }
}

// Close the database connection
mysqli_close($conn);
?>
