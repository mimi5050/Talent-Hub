<?php
session_start();
include 'connection.php';

// Check if the insurance ID is provided and the user is logged in
if (isset($_POST['InsuranceID']) && isset($_SESSION['UserID'])) {
    $insurance_id = $_POST['InsuranceID'];
    $user_id = $_SESSION['UserID'];
    $insurance_provider = $_POST['InsuranceProvider'];
    $policy_number= $_POST['PolicyNumber'];
    $date = $_POST['ExpirationDate'];



    $sql = "UPDATE insurance SET InsuranceProvider = ?, PolicyNumber = ?, ExpirationDate = ? WHERE InsuranceID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $insurance_provider, $policy_number, $date, $insurance_id);


    if ($stmt ->execute())
    {
        header("location: Insurance.php");
    }
    
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
