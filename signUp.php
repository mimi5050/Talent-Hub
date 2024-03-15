<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <style>
    body {
      background-image: url('backgroundRegister.jpg');
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
      padding: 50px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 50px rgba(13, 69, 47, 0.5);
      margin-top: 50px;
    }

    .signup-container h2 {
      color: #0d452f;
      margin: 30px;
    }

    .form-group {
      margin-bottom: 30px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #0d452f;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #0d452f;
      border-radius: 5px;
      background-color: white;
      color: black;
    }

    .form-group button {
      width: 100%;
      padding: 15px;
      font-size: 17px;
      border: none;
      border-radius: 5px;
      background-color: #0d452f;
      color: white;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="signup-container">
    <h2 style="text-align:center; background-color: rgba(54, 137, 131, 0.5);">Sign Up</h2>
    <!-- Sign Up Form -->
    <form action="signupbackend.php" method="post" name="signupForm" id="signupForm">
      <!-- First Name Input -->
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]+" title="Only letters allowed" placeholder="Enter your first name" required>
      </div>
      <!-- Last Name Input -->
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]+" title="Only letters allowed" placeholder="Enter your last name" required>
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" pattern="[a-zA-Z0-9]+" title="Only letters and numbers allowed" placeholder="Enter your username" required>
      </div>
      <!-- Gender Selection -->
      <div class="form-group">
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="0" checked>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="1">
        <label for="female">Female</label>
      </div>
      <!-- Marital Status Selection -->
      <div class="form-group">
        <label for="familyRole">Marital Status:</label>
        <select id="familyRole" name="familyRole" required>
          <option value="0" disabled>Select</option>
          <option value="1">Single</option>
          <option value="2">Married</option>
          <option value="3">Other</option>
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
        <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" title="10 digits allowed" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="UserType">Status</label>
        <select id="UserType" name="UserType" required>
          <option value="admin">An administrator</option>
          <option value="regular">A healthworker </option>
          <option value="regular">A patient </option>
        </select>
      </div>
      <!-- Email Input -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <!-- Password Input -->
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" title="Minimum 8 characters, at least one letter and one digit" placeholder="Enter your password" required>
      </div>
      <!-- Confirm Password Input -->
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" title="Minimum 8 characters, at least one letter and one digit" placeholder="Confirm your password" required>
      </div>
      <!-- Submit Button -->
      <div class="form-group">
        <button type="submit">Register</button>
      </div>
    </form>
     <p style="text-align: center; background-color: rgba(54, 137, 131, 0.5);">Already have an account? <a href="login.php">Login here</a></p> <!-- Login Link -->
  </div>
</body>

</html>
