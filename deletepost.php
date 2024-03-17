<?php
// Include your database connection file
include("connection.php");

// Check if the post_id is set and not empty
if(isset($_POST['post_id']) && !empty($_POST['post_id'])) {
    // Sanitize the input to prevent SQL injection
    $post_id = $_POST['post_id'];

    // Prepare the DELETE statement
    $sql = "DELETE FROM newsandblog WHERE PostID = ?";

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Deleted successfully
        echo "Post deleted successfully";
        
        // Redirect back to "News_and_Blog.php"
        header("Location: News_and_Blog.php");
        exit(); 
    } else {
        echo "Error deleting post: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // If post_id is not set or empty, show an error message
    echo "Error: Post ID is missing.";
}

// Close the connection
$conn->close();
?>
