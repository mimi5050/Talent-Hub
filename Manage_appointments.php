<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Appointments | Natembea Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f4f6;
    }

    .container {
      margin-left: 160px;
    }
    .sidenav a.active {
      background-color: transparent; 
      color: #0d452f; 
    }


    .topnav {
      background-color: #0d452f;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70px;
      text-align:center;
    }

   .sidenav {
      height: 100%;
      width: 20%;
      position: fixed;
      z-index: 1;
      top: 0; 
      left: 0;
      background-color:#dedab6;
      overflow-x: hidden;
      padding-top: 30px;
    }


    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #0d452f;
      display: block;
      transition: 0.3s;
      margin-bottom:18px;
    }

    .sidenav a:hover {
      background-color:#0d452f;
      color:white;
    }

    .main {
      margin-left: 250px;
      margin-top: 120px; 
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 80%; 
      margin-top: 20px;
      margin-left:-150px;
      
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
      margin-bottom:20px;
    }

    .action-buttons button:hover {
      background-color:#4caf50;
    }
    h2{
      text-align:center;
      margin-top:-100px;
    }
    h1{
      text-align:center;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="topnav">
    <h1 style="margin-left:250px; font-size:25px;">Manage Appointments</h1>
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
  <h2>Manage Appointments</h2>
    <table>
      <thead>
        <tr>
  
          <th>Full Name</th>
          <th>Email Address</th>
          <th>Phone Number	</th>
          <th>Selected Doctor</th>
          <th>Reason For Appointment</th>
          <th>Appointment Date</th>
          <th>Appointment Time</th>
          <th>CreatedAt	</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php
      // Include the connection file
          include 'connection.php';
          // Fetch data from the "Products" table
          $sql = "SELECT * FROM appointments";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $row["FullName"]; ?></td>
            <td><?php echo $row["EmailAddress"]; ?></td>
            <td>$<?php echo $row["PhoneNumber"]; ?></td>
            <td><?php echo $row["SelectedDoctor"]; ?></td>
            <td><?php echo $row["ReasonForAppointment"]; ?></td>
            <td><?php echo $row["AppointmentDate"]; ?></td>
            <td><?php echo $row["AppointmentTime"]; ?></td>
            <td>$<?php echo $row["CreatedAt"]; ?></td>
            <td>
              <form action="connection.php" method="get">
                <button style="background-color: #006400; color: white;"><a href="https://meet.google.com/rpf-twyy-mce" target="_blank" style="text-decoration: none; color: inherit;">Attend</a></button>
                <button type="submit" name="attend" style="background-color: #0d452f; color:white;padding:10px; margin-bottom:20px;">Attended</button>
              </form>
            </td>
          </tr>
          <?php
            }
          } else {
            echo "0 results";
          }
          ?>

      </tbody>
    </table>
  </div>
</div>

</body>
</html>
