<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      background-color: #dedab6;
      color: black;
      font-family: Arial, sans-serif;
      background-image: url('Images/backgroundlogin.jpg');
      background-attachment: fixed;
      background-size:cover;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(13, 69, 47, 0.5);
      margin-top: 150px;
    }

    .login-container h2 {
      color: #0d452f;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #0d452f;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #006400;
      border-radius: 5px;
      background-color: white;
      color: black;
    }

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
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #0d452f;
      color: white;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2 style="background-color: rgba(54, 137, 131, 0.5);text-align:center;">Login</h2>
    <form action="User_dashboard.php" method="post" name="loginForm" id="loginForm" onsubmit="return redirectUser()">
      <div class="form-group">
        <label for="username"> Username </label>
        <input type="text" id="username" name="username" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" required>
          <option value="admin">An administrator</option>
          <option value="regular">A patient </option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
    <p style="text-align: center; background-color: rgba(54, 137, 131, 0.5);">Don't have an account? <a href="signUp.html">Register here</a></p>
  </div>
</body>

</html>
