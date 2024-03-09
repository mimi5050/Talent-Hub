<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | Natembea Online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
              <img class="logo" src="logo.jpg" alt="Logo">
            </div>
            
          
          <a class="active" href="#"><i class="fas fa-home"></i> Overview</a>
          <li><a href="#"><i class="fas fa-calendar-alt"></i> Appointments</a></li>
          <li><a href="#"><i class="fas fa-envelope"></i> Message</a></li>
          <li><a href="#"><i class="fas fa-chart-bar"></i> Report</a></li>
          <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Insurance</a></li>
          <li><a href="#"><i class="fas fa-book-medical"></i> Health Education and News</a></li>
          <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
          <li><a href="#"><i class="fas fa-phone"></i> Emergency Contact Information</a></li>
          <li><a href="#"><i class="fas fa-comments"></i> Feedback and Support</a></li>

              <div class="bottom-nav-centered">
                <li><a href="#logout"><i class=" logout fas fa-sign-out-alt"></i> Logout</a></li>
            </div>
            
          </div>
    <div class="dashboard">

        <div class = "welcome">
            <h1>Welcome, Yanni!</h1>
            <p>How are you feeling today?</p>
        </div>

        <div class="intro">
            <img src="doctors.png" width = 30%/>
            <h1>Need healthcare?</h1>
            <p>Book an appointment with a health personnel for simplified medical services.</p>
            <button onclick="document.location='#'" >Appointments</button>
            
        </div>

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
          <h3>Diagnoses</h3>
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
              <th>Personnel</th>
              <th>Specification</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Dr. Asamoah</td>
                <td>Therapist</td>
                <td>26-02-24</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Dr. Jabari</td>
                <td>Dentist</td>
                <td>25-02-24</td>
                <td class="cancelled">Cancelled</td>
            </tr>
            <tr>
                <td>Dr. Lartey</td>
                <td>Dentist</td>
                <td>25-02-24</td>
                <td class="upcoming">Upcoming</td>
            </tr>
            <tr>
                <td>Dr. Koku</td>
                <td>Cardiologist</td>
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