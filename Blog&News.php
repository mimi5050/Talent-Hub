<?php
include "connection.php"
?>
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
      margin-top: 20px;
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
      margin-top: 150px;
    }

    .blog-post {
      margin-bottom: 50px;
      margin-left: 60px;
      margin-right: 60px;
    }

    .blog-post h2 {
      color: #0d452f;
      margin-top: 20px;
    }

    .blog-post p {
      color: #333;
      margin-top: 20px;
      text-align: justify;

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
      <a href="Blog&News.php">Blog & News</a>
      <a href="contactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="blog-container">
    <?php
    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
    ?>
      <div class="blog-post">
        <h2><?php echo $row['Title']; ?></h2>
        <p><?php echo $row['Content']; ?></p>
        <p class="author">By <?php echo $row['DoctorName']; ?></p>
        <p class="date">Published on <?php echo $row['PublishDate']; ?></p>
      </div>
    <?php
    }
    ?>
  </div>
</body>

</html>

<?php
// Close result set and connection
$result->close();
$conn->close();
?>
