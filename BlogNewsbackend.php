<?php
include("connection.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['Title'];
    $content = $_POST['Content'];
    $doctor_name = $_POST['DoctorName']; 
    $publish_date = $_POST['PublishDate']; 

    // Check if all required fields are provided
    if (!empty($title) && !empty($content) && !empty($doctor_name)) {
        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO newsandblog (Title, Content, DoctorName, PublishDate) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $content, $doctor_name, $publish_date);


        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to Blog&News.php
            header("Location: Blog&News.php");
            exit(); 
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Required fields are missing.";
    }
}

// Close the connection
$conn->close();
?>
