<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | Natembea Online</title>
  <link rel="stylesheet" type="text/css" href="worker-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <div class="container">
        <div class="topnav">
          <h1>Dashboard</h1>
        </div>

        <div class="sidenav">
            <div class="topnav-centered">
                <img class="logo" src="Images/logo.jpg" alt="Logo">
            </div>
            
          
          <a class="active" href="#"><i class="fas fa-home"></i> Overview</a>
          <li><a href="#appointments"><i class="fas fa-calendar-alt"></i> Manage Appointments</a></li>
          <li><a href="#patients"><i class="fas fa-user"></i> Patients</a></li>
          <li><a href="#records"><i class="fas fa-file-medical"></i> Medical Records</a></li>
          <li><a href="#profile"><i class="fas fa-user-circle"></i> My Profile</a></li>
          <li><a href="#feedback"><i class="fas fa-comments"></i> Feedback & Support</a></li>
            
              <div class="bottom-nav-centered">
                <li><a href="#logout"><i class=" logout fas fa-sign-out-alt"></i> Logout</a></li>
            </div>
            
          </div>
    <div class="dashboard">

        <div class="activity-overview">
            <h2><a href="#">Report</a></h2>
            <div class="card">
            <h3>Upcoming Appointments</h3>
            <p>3</p>
          </div>
          <div class="card">
            <h3>Cancelled Appointments</h3>
            <p>2</p>
          </div>
            <div class="card">
          <h3>Patients</h3>
          <p>7</p>
        </div>
        <div class="card">
          <h3>Insurance</h3>
          <p>$1,500</p>
        </div>
      </div>
      
      <div class="appointment-activity">
        <h2><a href="#">Appointment Activity</a></h2>
        <table>
          <thead>
            <tr>
              <th>Student</th>
              <th>Specification</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>David Davidson</td>
                <td>Fever & Headache</td>
                <td>26-02-24</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Ama Ampofo</td>
                <td>Fever & Headache</td>
                <td>25-02-24</td>
                <td class="cancelled">Cancelled</td>
            </tr>
            <tr>
                <td>Nii Noi</td>
                <td>Fever & Headache</td>
                <td>25-02-24</td>
                <td class="upcoming">Upcoming</td>
            </tr>
            <tr>
                <td>Yanni Asare</td>
                <td>Fever & Headache</td>
                <td>21-02-24</td>
                <td class="completed">Completed</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Add other dashboard elements here -->
    </div>
  </div>
</body>
</html>