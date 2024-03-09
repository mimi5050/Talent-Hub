<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Health Worker Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #dedab6; /* Nude background */
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
    }
    header {
      background-color: #0d452f; /* Green header */
      color: #fff;
      padding: 10px;
      text-align: center;
      display: flex;
      align-items: center;
    }
    .logo {
      margin-left: 10px; /* Adjust margin-left for the logo */
    }
    .content-wrapper {
      display: flex;
      flex: 1;
    }
    nav {
      background-color: #0d452f; /* Green navigation */
      color: #fff;
      padding: 10px 0;
      width: 250px; /* Increase the width of the navigation */
      margin-left: 0px; /* Increase the left margin */
      margin-right: 30px;
    }
    nav ul {
      list-style-type: none; /* Remove bullet points */
      margin: 0;
      padding: 0;
    }
    nav ul li {
      margin-bottom: 10px; /* Add margin bottom to create space */
    }
    nav ul li a {
      display: block;
      color: #fff;
      text-decoration: none;
      padding: 30px 25px;
      padding-left: 40px; /* Add padding left to create space between icon and text */
    }
    nav ul li a:hover {
      background-color: #5da368; /* Darker green on hover */
    }
    .sections {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    section {
      background-color: #fff;
      margin: 20px;
      padding: 20px;
      border-radius: 10px;
    }
    footer {
      background-color: #0d452f; /* Green footer */
      color: #fff;
      text-align: center;
      padding: 10px;
    }
  </style>
</head>
<body>
  <header>
    <img class="logo" src="Images/logo.jpg" alt="Logo" style="width: 100px; height: 80px;">
    <h1 style="margin: 0 auto;">Health Worker Dashboard</h1>
  </header>
  <div class="content-wrapper">
    <nav>
      <ul>
        <li><a href="#profile"><i class="fas fa-user-circle"></i> My Profile</a></li>
        <li><a href="#appointments"><i class="fas fa-calendar-alt"></i> Manage Appointments</a></li>
        <li><a href="#patients"><i class="fas fa-user"></i> Patients</a></li>
        <li><a href="#records"><i class="fas fa-file-medical"></i> Medical Records</a></li>
        <li><a href="#feedback"><i class="fas fa-comments"></i> Feedback & Support</a></li>
        <li><a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </nav>

    <div class="sections">
      <section id="appointments">
        <h2>Appointments</h2>
        <!-- Add appointment management content here -->
      </section>
      <section id="patients">
        <h2>Patients</h2>
        <!-- Add patient management content here -->
      </section>
      <section id="records">
        <h2>Medical Records</h2>
        <!-- Add medical records content here -->
      </section>
      <section id="insurance">
        <h2>Insurance</h2>
        <!-- Add insurance information content here -->
      </section>
      <section id="education">
        <h2>Health Education</h2>
        <!-- Add health education content here -->
      </section>
      <section id="profile">
        <h2>Profile</h2>
        <!-- Add profile management content here -->
      </section>
      <section id="emergency">
        <h2>Emergency Contact</h2>
        <!-- Add emergency contact information content here -->
      </section>
      <section id="feedback">
        <h2>Feedback & Support</h2>
        <!-- Add feedback and support content here -->
      </section>
    </div>
  </div>
  <footer>
    <p>&copy; 2024 HealthWorker Dashboard</p>
  </footer>
</body>
</html>
