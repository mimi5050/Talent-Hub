<?php
session_start();
include 'connection.php';

// Check if the insurance ID is provided and the user is logged in
if (isset($_GET['insurance_id'], $_SESSION['UserID'])) {
    $insurance_id = $_GET['insurance_id'];
    $user_id = $_SESSION['UserID'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM insurance WHERE InsuranceID = ? AND UserID = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ii", $insurance_id, $user_id);
        $stmt->execute();

        // Check if the insurance was deleted successfully
        if ($stmt->affected_rows > 0) {
            // Redirect to the insurance page
            header("Location: insurance.php");
            exit(); // Terminate script execution after redirection
        } else {
            echo "Failed to delete insurance. Please try again.";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to prepare the delete statement.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
