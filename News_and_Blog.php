<!DOCTYPE html>
<html>
<head>
  <title>News and Blog | Natembea Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f4f6;
    }

    .container {
      margin-left: 180px;
    }

    .topnav {
      background-color: #0d452f;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80px;
      text-align: center;
    }

    .sidenav {
      height: 100%;
      width: 20%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #dedab6;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #0d452f;
      display: block;
      transition: 0.3s;
      margin-bottom: 20px;
    }

    .sidenav a:hover {
      background-color: #0d452f;
      color: white;
    }

    .main {
      margin-left: 250px;
      margin-top: 20px;
      padding: 15px;
      font-size: 15px;
    }

    table {
      border-collapse: collapse;
      width: 95%;
      margin-top: 20px;
      margin-left: -10px;
    }

    th, td {
      text-align: left;
      padding: 10px;
      font-size: 14px;
    }

    th {
      background-color: #0d452f;
      color: white;
      padding: 20px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e6e3cd;
    }

    .action-buttons button {
      background-color: #0d452f;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-bottom: 20px;
    }

    .action-buttons button:hover {
      background-color: #0d452f;
      color: white;
    }

    .add-post-form {
      margin-bottom: 20px;
    }

    .add-post-form input[type="text"],
    .add-post-form textarea,
    .add-post-form select {
      width: calc(100% - 16px);
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .add-post-form button[type="submit"] {
      background-color: #0d452f;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-bottom: 20px;
    }

    .add-post-form button[type="submit"]:hover {
      background-color: #0d452f;
      color: white;
    }

    table td.content {
    text-align: justify;
    }

  </style>
</head>
<body>

<div class="container">
  <div class="topnav">
    <h1 style="margin-left:-500px; font-size:25px;">News and Blog</h1>
  </div>

  <div class="sidenav">
    <div class="topnav-centered">
      <img src="Images/logo.jpg" alt="Logo" style="height: 80px; margin-bottom:20px; margin-top:0;">
    </div>
    <a href="doctor_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a class="active" href="manage_appointments.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a>
    <a href="Patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a>
    <a href="Patient_Records.php"><i class="fas fa-folder-open"></i> Patient Records</a>
    <a href="user_feedback.php"><i class="fas fa-comment-dots"></i> User Feedback</a>
    <a href="profiledoctor.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="News_and_Blog.php"><i class="fas fa-newspaper"></i> News and Blog</a>
    <a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="main">
    <h2>News and Blog</h2>
    <div class="add-post-form">
      <form action="BlogNewsbackend.php" method="POST">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" id="title" name="Title" placeholder="Enter title" required>
        </div>
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea id="content" name="Content" rows="4" placeholder="Enter content" required></textarea>
        </div>
        <div class="form-group">
          <label for="DoctorName">Doctor Name:</label>
          <select id="DoctorName" name="DoctorName" required>
            <?php
            // Include the doctor_list.php file
            include 'doctor_list.php';

            // Check if any doctors were fetched
            if (isset($doctorList) && !empty($doctorList)) {
              foreach ($doctorList as $doctor) {
                echo "<option value='" . $doctor['Username'] . "'>" . $doctor['Username'] . "</option>";
              }
            } else {
              echo "<option value=''>No doctors found</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="publish_date">Publish Date:</label>
          <input type="date" id="publish_date" name="PublishDate" required>
        </div>
        <button type="submit" style="background-color: #0d452f;">Add Post</button>
      </form>
    </div>

    <table>
      <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Doctor Name</th>
        <th>Publish Date</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php"); 

    $sql = "SELECT * FROM newsandblog";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Inside the loop that generates table rows
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Title'] . "</td>";
        echo "<td class='content'>" . $row['Content'] . "</td>";
        echo "<td>" . $row['DoctorName'] . "</td>";
        echo "<td>" . $row['PublishDate'] . "</td>";
        echo "<td class='action-buttons'>";
        // Edit Button
        echo "<form action='editpost.php' method='POST' style='display: inline;'>";
        echo "<input type='hidden' name='post_id' value='" . $row['PostID'] . "'>";
        echo "<button type='submit' name='editpost'>Edit</button>";
        echo "</form>";
        // Delete Button
        echo "<form action='deletepost.php' method='POST' style='display: inline;'>";
        echo "<input type='hidden' name='post_id' value='" . $row['PostID'] . "'>";
        echo "<button type='submit' name='delete_post'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No posts found.</td></tr>";
    }

    $conn->close();
    ?>
  </tbody>
</table>

  </div>
</div>

</body>
</html>
