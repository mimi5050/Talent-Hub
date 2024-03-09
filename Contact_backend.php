<?php
// Check if the REQUEST_METHOD key exists in $_SERVER array
if (isset($_SERVER["REQUEST_METHOD"])) {
    // Proceed only if it's a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the necessary POST parameters are set
        if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = "miriam.uwingabiye@ashesi.edu.gh"; // Email address to receive messages
            $subject = "New message from $name";
            $body = "Name: $name\nEmail: $email\nMessage: $message";

            // Attempt to send email
            if (mail($to, $subject, $body)) {
                // Email sent successfully
                echo json_encode(array("status" => "success", "message" => "Your message has been sent successfully."));
            } else {
                // Failed to send email
                echo json_encode(array("status" => "error", "message" => "Oops! Something went wrong. Please try again later."));
            }
        } else {
            // Handle case where POST parameters are missing
            echo json_encode(array("status" => "error", "message" => "Missing POST parameters."));
        }
    } else {
        // Handle case where request method is not POST
        echo json_encode(array("status" => "error", "message" => "Invalid request method."));
    }
} else {
    // Handle case where REQUEST_METHOD key is not present
    echo json_encode(array("status" => "error", "message" => "Undefined REQUEST_METHOD."));
}
?>
