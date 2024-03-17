<?php
// Include the database connection file
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $InsuranceProvider = $_POST['name']; 
    $PolicyNumber = $_POST['policy_number']; 
    $ExpirationDate = $_POST['expiration_date']; 
    $UserID = $_POST['user_id'];

    // Prepare and execute SQL statement to insert data into insurance table
    $stmt = $conn->prepare("INSERT INTO insurance (InsuranceProvider, PolicyNumber, ExpirationDate, UserID) VALUES (?, ?, ?, ?)");
    
    // Check if the SQL statement was prepared successfully
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the SQL statement
    $stmt->bind_param("ssss", $InsuranceProvider, $PolicyNumber, $ExpirationDate, $UserID);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to InsuranceInfo_saved.php
        header("Location: InsuranceInfo_saved.php");
        exit();
    } else {
        // Error occurred while saving insurance information
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
}
?>
