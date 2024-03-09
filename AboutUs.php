<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Natembea Online</title>
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .header {
      position: fixed;
      top: 10px;
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
      width: 130px;
      height: auto;
      margin-right: 3000px;
      margin-top:-20px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-left: 600px;
      margin-top: -50px;
    }

    .navigation a {
      color:#0d452f;;
      text-decoration: none;
      margin-right: 30px; /* Adjusted margin */
      font-size: 18px;
      font-weight: bold;
    }

    .landing-container {
      position: relative;
      height: 100vh;
      overflow: hidden;
      margin-top: 80px; /* Adjust for header height */
    }

    /* Header Styles */
    header {
      background-color: #dedab6;
      color:  #0d452f;
      padding: 20px 0;
      text-align: center;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    /* About Section Styles */
    .about-section {
      background-color: #fff;
      padding: 50px 0;
    }

    .about-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 30px;
    }

    .about-content {
      display: flex;
      justify-content: space-between;
      text-align: justify;
    }

    .about-img {
      flex: 1;
      text-align: center;
      margin-top: 50px;
    }

    .about-img img {
      width: 100%;
      max-width: 500px;
      border-radius: 2px;
    }

    .about-text {
      flex: 1;
      padding: 0 20px;
    }

    /* Team Section Styles */
    .team-section {
      background-color: #dedab6;
      padding: 50px 0;
    }

    .team-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 30px;
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .team-member {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .team-member h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .team-member p {
      font-size: 16px;
      line-height: 1.6;
    }

    /* Footer Styles */
    footer {
      background-color: #0d452f;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    footer p {
      font-size: 16px;
    }
  </style>
</head>
  <header>
    <div class="container">
        <img class="logo" src="Images/Logo.png" alt="Logo">
        <div class="navigation">
          <a href="Index.php"> Home</a>
          <a href="AboutUs.php">About Us</a>
          <a href="ourservices.php">Our Services</a>
          <a href="Blog&News.php">Blog & News</a>
          <a href="contactUs.php">Contact Us</a>
    </div>
  </header>

  <div class="about-section">
    <div class="container">
      <h2>About Us</h2>
      <div class="about-content">
        <div class="about-img">
          <img src="Images/Ashesi_Health_Centre.jpg" alt="About Us Image">
        </div>
        <div class="about-text">
          <p>Students of Ashesi shared their concerns about the distance of the health centre from student residents and also about how they have to wait in long queues to get medical attention. They contacted us to build a system to help bring the health centre closer to them.  Also, information seem to get lost as a result of an absence in a system to keep track of patient records.</p>
          <p>This project targets students and also the health workers. The system is designed to connect students to the health centre through online booking of appointments, online chat or call services with nurses. Also, the system provides a means for health workers to store and keep track of records of each patient who visits the hospitals.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="team-section">
    <div class="container">
      <h2>Meet Our Team</h2>
      <div class="team-container">
        <div class="team-member">
          <img src="Images/doctor2.jpeg" alt="Team Member 1">
          <h3>Dr. Efya Buckman</h3>
          <p>Founder & CEO</p>
        </div>
        <div class="team-member">
          <img src="Images/doctor1.jpg" alt="Team Member 2">
          <h3>Michael Ofori</h3>
          <p>Head of Operations</p>
        </div>
        <div class="team-member">
          <img src="Images/doctor3.png" alt="Team Member 3">
          <h3>Nadia Buari</h3>
          <p>Lead Developer</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2024 Natembea Online. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
