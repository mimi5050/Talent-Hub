<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      overflow: hidden;
      background-color: #dedab6;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: White;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }

    .logo {
      width: 150px;
      height: auto;
      margin-right: 5px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-right: 5px;
    }

    .navigation a {
      color: #07bca3; 
      text-decoration: none;
      margin-right: 60px;
      font-size: 18px;
      font-weight: bold;
    }

    .contact-container {
      margin-top: 100px;
      text-align: center;
    }

    .contact-form {
      margin-bottom: 50px;
      margin-left: 60px;
      margin-right: 60px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .contact-form button {
      padding: 10px 20px;
      background-color: #07bca3; 
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .contact-info {
      margin-top: 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .contact-info-item {
      margin: 0 20px;
    }

    .contact-info-item i {
      font-size: 30px;
      margin-bottom: 10px;
      color: #07bca3; 
    }

    .contact-info-item p {
      margin: 0;
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="Images/logo.png" alt="Logo">
    <div class="navigation">
      <a href="Index.php"> Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="contactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="contact-container">
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form action="Contact_backend.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <div class="contact-info-item">
        <i class="fab fa-google"></i>
        <p>contact@talentHub.com</p>
      </div>
      <div class="contact-info-item">
        <i class="fas fa-envelope"></i>
        <p>contact@talentHub.com</p>
      </div>
      <div class="contact-info-item">
        <i class="fas fa-phone"></i>
        <p>+250788567230</p>
      </div>
      <div class="contact-info-item">
        <i class="fab fa-instagram"></i>
        <p>@talentHub</p>
      </div>
    </div>
  </div>
</body>

</html>
