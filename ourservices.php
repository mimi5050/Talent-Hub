<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services - Natembea Online</title>
  <style>
  
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
     
    }

    .container {
      margin: 0 auto;
      padding: 20px;
      margin-top:-10px;
    }

    header {
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
      margin-top: -70px;
    }

    .navigation a {
      color:#0d452f;;
      text-decoration: none;
      margin-right: 30px; /* Adjusted margin */
      font-size: 18px;
      font-weight: bold;
      margin-top: 50px;
    }

    h1{
      text-align:center;
    }

    h1, h2, h3 {
      margin-bottom: 20px;
      margin-top:100px;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .service-category {
      background-color: #fff;
      padding: 50px 0;
    }

    .service-category h2 {
      text-align: center;
    }

    .service-list {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .service-item {
      width: 30%;
      padding: 20px;
      margin-bottom: 30px;
      background-color: #f2f2f2;
      border-radius: 8px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
    }

    .service-item:hover {
      transform: scale(1.05);
    }

    .service-item img {
      width: 300px;
      margin-bottom: 50px;
    }

    /* Testimonial Section Styles */
    .testimonial-section {
      background-color: #fff;
      padding: 50px 0;
    }

    .testimonial-container {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }

    .testimonial {
      padding: 20px;
      background-color: #dedab6;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .testimonial p {
      font-style: italic;
    }

    .cta-section {
      background-color: #0d452f;
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
<header>
  <div class="container">
      <img class="logo" src="Images/Logo.png" alt="Logo">
      <div class="navigation" style="margin-top:-80px;">
        <a href="Index.php"> Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ourservices.php">Our Services</a>
        <a href="Blog&News.php">Blog & News</a>
        <a href="contactUs.php">Contact Us</a>
  </div>
</header>

<body>
  <div class="container">
    <div class="service-category">
      <h1 style="background-color:#0d452f; color:#dedab6;">Our Services</h1>
      <div class="service-list">
        <div class="service-item">
          <img src="Images/bookapp.png" alt="Book Consultation Online">
          <h3>Book Consultation Online</h3>
          <p>Schedule medical consultations online with our healthcare professionals from the comfort of your home.</p>
        </div>
        <div class="service-item">
          <img src="Images/medicalconsult.jpg" alt="Talk to Medical Professional">
          <h3>Talk to Medical Professional</h3>
          <p>Connect with experienced medical professionals for advice, guidance, and answers to your health concerns.</p>
        </div>
        <div class="service-item">
          <img src="Images/virtualconsult.jpg" alt="Have a Virtual Medical Consultation">
          <h3>Have a Virtual Medical Consultation</h3>
          <p>Experience the convenience of virtual medical consultations for diagnosis, treatment, and follow-up care.</p>
        </div>
        <div class="service-item">
          <img src="Images/medical-record.jpg" alt="Get Access to Patients Medical Records">
          <h3>Get Access to Patients Medical Records</h3>
          <p>Securely access and manage medical records for comprehensive healthcare management and coordination.</p>
        </div>
      </div>
    </div>

    <div class="testimonial-section">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-container">
        <div class="testimonial">
          <p>"Natembea Online has been a game-changer for me. I can now easily consult with doctors and manage my health from anywhere."</p>
          <p>- Sarah Johnson</p>
        </div>
        <div class="testimonial">
          <p>"The virtual consultations have saved me so much time and hassle. The doctors are knowledgeable and caring."</p>
          <p>- Michael Smith</p>
        </div>
      </div>
    </div>

    <div class="cta-section">
      <h2>Ready to Experience Our Services?</h2>
      <p>Take the first step towards better health today.</p>
      <a href="contactUs.php" class="cta-btn">Contact Us</a>
    </div>
  </div>
</body>
</html>