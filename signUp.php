<?php
// Initialize the error message variable
$errorMsg = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'connection.php';

    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data and sanitize it
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $maritalStatus = mysqli_real_escape_string($conn, $_POST['maritalStatus']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    $userType = mysqli_real_escape_string($conn, $_POST['UserType']);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        // Set error message
        $errorMsg = "Passwords do not match!";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to insert data into the users table
        $sql = "INSERT INTO users (Username, Password, DateOfBirth, Gender, ContactInfo, UserType, Email, MaritalStatus) VALUES ('$Username', '$hashedPassword', '$birthdate', '$gender', '$phoneNumber', '$userType', '$email', '$maritalStatus')";

        // Execute the SQL statement
        if (mysqli_query($conn, $sql)) {
            // Redirect user to signUp_successful.php upon successful registration
            header("Location: signUp_successful.php");
            exit();
        } else {
            // Display error message on signUp.php page
            $errorMsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            background-image: url('Images/backgroundRegister.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: black;
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .signup-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5);
            margin-top: 50px;
        }

        .signup-container h2 {
            color: #0d452f;
            margin: 20px;
            text-align: center;
            background-color: rgba(54, 137, 131, 0.5);
        }

        .form-group {
            margin: 30px;
            margin-right: 40px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #0d452f;
        }

        .form-group input,
        .form-group select {
            width: 95%;
            padding: 10px;
            border: 1px solid #0d452f;
            border-radius: 5px;
            background-color: white;
            color: black;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #0d452f;
            color: white;
            cursor: pointer;
        }

        /* Error message style */
        .error-message {
            color: red;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <!-- Display error message if passwords don't match -->
        <?php if (!empty($errorMsg)) : ?>
            <p class="error-message"><?php echo $errorMsg; ?></p>
        <?php endif; ?>
        <!-- Sign Up Form -->
        <form action="signUp.php" method="post" name="signupForm" id="signupForm">
            <!-- Name Input -->
            <div class="form-group">
                <label for="Username">Full Name:</label>
                <input type="text" id="Username" name="Username" pattern="[A-Za-z ]+" title="Only letters allowed"
                    placeholder="Enter your full name" required>
            </div>
            <!-- Gender Selection -->
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <!-- Marital Status Selection -->
            <div class="form-group">
                <label for="maritalStatus">Marital Status:</label>
                <select id="maritalStatus" name="maritalStatus" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
            </div>
            <!-- Birthdate Input -->
            <div class="form-group">
                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            <!-- Phone Number Input -->
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" title="10 digits allowed"
                    placeholder="Enter your phone number" required>
            </div>
            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"
                    pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" title="Minimum 8 characters, at least one letter and one digit"
                    placeholder="Enter your password" required>
            </div>
            <!-- Confirm Password Input -->
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword"
                    pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" title="Minimum 8 characters, at least one letter and one digit"
                    placeholder="Confirm your password" required>
            </div>

            <div class="form-group">
                <label for="UserType"> User Type</label>
                <select id="UserType" name="UserType" required>
                    <option value="doctor">A doctor</option>
                    <option value="patient">A patient</option>
                </select>
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <p style="text-align: center; background-color: rgba(54, 137, 131, 0.5);">Already have an account? <a
                href="login.php">Login here</a></p> <!-- Login Link -->
    </div>
</body>

</html>
