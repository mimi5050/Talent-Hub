<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog & News</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      overflow: hidden;
      background-color:#dedab6;
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
      color: #0d452f;
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
    }

    .blog-container {
      margin-top: 100px;
      text-align: center;
    }

    .blog-post {
      margin-bottom: 50px;
      margin-left: 60px;
      margin-right: 60px;
    }

    .blog-post h2 {
      color: #0d452f;
    }

    .blog-post p {
      color: #333;
      margin-top: 10px;
      text-align: left;
    }

    .blog-post .author {
      color: #777;
      margin-top: 10px;
      text-align: left;
    }

    .blog-post .date {
      color: #777;
      margin-top: 5px;
      text-align: left;
    }

    .blog-post .category {
      color: #777;
      margin-top: 5px;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="Images/logo.jpg" alt="Logo">
    <div class="navigation">
      <a href="Index.php"> Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="contactUs.php">Contact Us</a>
      <a href="Blog&News.php">Blog & News</a>
    </div>
  </div>

  <div class="blog-container">
    <div class="blog-post">
      <h2>Latest Health News: Study Reveals Benefits of Daily Exercise</h2>
      <p>A recent study published in the Journal of Health Sciences found that individuals who engage in daily exercise experience significant improvements in cardiovascular health...</p>
      <p class="author">By John Doe</p>
      <p class="date">Published on February 12, 2024</p>
      <p class="category">Category: Health & Fitness</p>
    </div>

    <div class="blog-post">
      <h2>New Breakthrough in Biotechnology: CRISPR Gene Editing Shows Promise in Treating Genetic Diseases</h2>
      <p>Scientists have made a groundbreaking discovery in the field of biotechnology with the development of CRISPR gene editing technology...</p>
      <p class="author">By Jane Smith</p>
      <p class="date">Published on February 10, 2024</p>
      <p class="category">Category: Biotechnology</p>
    </div>

  </div>
</body>

</html>
