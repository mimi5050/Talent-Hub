<?php
session_start();
include 'connection.php';

if (isset($_SESSION['UserID']) && isset($_POST['submit'])) {
    $name = $_POST['Name'] ?? ''; 
    $user_id = $_SESSION['UserID'];
    $Email = $_POST['email'] ?? ''; 
    $UserType = $_POST['UserType'] ?? ''; 
    
    $sql = "UPDATE users SET Name = ?, Email = ?, UserType = ? WHERE UserID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $Email, $UserType, $user_id);
    
    if ($stmt->execute()) {
        header("location: Customer-profile.php");
        exit(); // Stop further execution
    } else {
        echo "Update failed: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
