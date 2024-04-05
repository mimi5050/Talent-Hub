<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - TalentHub</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      overflow-x: hidden; 
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
      margin-right:30px;
    
    }
    
    .logo {
      width: 130px;
      height: auto;
      margin-right: 3000px;
      margin-top: 10px;
      margin-bottom:-30px;
    }

    .navigation {
      display: flex;
      align-items: left;
      margin-left: 600px;
      margin-top: 20px; 
      
    }

    .navigation a {
      color: #07bca3; 
      text-decoration: none;
      margin-right: 40px; 
      font-size: 18px;
      font-weight: bold;
    }

    .about-section {
      background-color: #fff;
      padding: 50px 0;
    }

    .about-section h2 {
      font-size: 30px;
      text-align: center;
      margin-bottom: 10px;
      margin-top: -60px;
      background-color: #07bca3; 
      color: #dedab6; 
    }

    .about-content {
      display: flex;
      justify-content: space-between;
      text-align: justify;
      font-size:18px;
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
      line-height: 1.5; 
    }
    .cta-section {
      background-color: #07bca3;
      color: #fff;
      padding: 50px 0;
      text-align: center;
    }

    .cta-section p {
      font-size: 18px;
    }

    .cta-btn {
      background-color: #dedab6;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .cta-btn:hover {
      background-color: #c2be9f;
    }
   
  </style>
</head>
<body>
  <header>
    <div class="container">
      <img class="logo" src="Images/Logo.png" alt="Logo">
      <div class="navigation">
        <a href="Index.php"> Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ourservices.php">Our Services</a>
        <a href="contactUs.php">Contact Us</a>
      </div>
    </div>
  </header>

  <div class="about-section">
    <div class="container">
      <h2>About Us</h2>
      <div class="about-content">
        <div class="about-img">
          <img src="Images\TalentHub.png" alt="About Us Image">
        </div>
        <div class="about-text">
          <p>TalentHub Connect is a transformative platform designed to revolutionize the job market for African youth.
            At its core, TalentHub Connect serves as a beacon of hope for talented individuals seeking employment opportunities and for companies eager to harness Africa's vibrant talent pool.
            Unlike traditional job search platforms, TalentHub Connect offers a seamless and user-friendly experience, empowering job seekers to showcase their skills and accomplishments through personalized profiles.
            Through our centralized hub, employers gain access to a diverse range of talents, enabling them to connect with the next generation of innovators, leaders, and changemakers across the continent.
            With a mission to tackle youth unemployment head-on, TalentHub Connect fosters collaboration, community-building, and economic growth, ushering in a brighter future for Africa's youth.
            Join us on this journey to unlock the full potential of Africa's talent landscape and shape a tomorrow filled with boundless opportunities and possibilities.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="cta-section">
      <h2>Ready to Experience Our Services?</h2>
      <p>Take the first step towards better talents worlds today.</p>
      <a href="Index.php" class="cta-btn">Join Us Today</a>
    </div>
</body>
</html>
