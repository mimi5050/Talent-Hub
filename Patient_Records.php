<!DOCTYPE html>
<html>
<head>
  <title>Manage Patient Records | Natembea Online</title>
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

    .topnav {
      background-color: #0d452f;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80px;
      text-align:center;
      margin-bottom:-100px;
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
      padding-top: 20px;
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #0d452f;
      display: block;
      transition: 0.3s;
      margin-bottom:15px;
    }

    .sidenav a:hover {
      background-color:#0d452f;
      color:white;
      border-radius:100px;
    }

    .main {
      margin-left: 250px;
      margin-top: 120px;
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
      margin-left:-10px;
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
      margin-right: 5px;
    }



    .action-buttons button:hover {
      background-color:#4caf50;
    }

    h2 {
      text-align:center;
    }

    h1 {
      text-align:center;
    }

    form {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      margin-right: 10px;
    }

    input[type="text"], input[type="date"] {
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
      width: 100%;
      box-sizing: border-box;
    }

    button[type="submit"] {
      background-color: #0d452f;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #4caf50;
    }


    .overlay {
        display: none;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        }


        .popup {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        color: black;
        max-width: 400px;
        width: 80%;
        }

        .popup label {
        display: block;
        margin-bottom: 10px;
        color: #368983;
        font-weight: bold;
        }

        .popup input[type="text"],
        .popup input[type="number"] {
        width: calc(100% - 20px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #368983;
        border-radius: 5px;
        }

        .popup button {
        width: calc(50% - 5px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #368983;
        color: white;
        cursor: pointer;
        }

        #cancel {
        margin-top :10px;
        background-color: #ff6666;
        }
  </style>
</head>
<body>

<div class="container">
  <div class="topnav">
    <h1 style="margin-left:250px; font-size:25px;">Manage Patient Records</h1>
  </div>

  <div class="sidenav">
    <div class="topnav-centered">
      <img src="Images/logo.jpg" alt="Logo" style="height: 80px; margin-bottom:20px; margin-top:0;">
    </div>
    <a href="doctor_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a href="Manage_appointments.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a>
    <a class="active" href="Patient_Records.php"><i class="fas fa-folder-open"></i> Manage Patient Records</a>
    <a href="Patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a>
    <a href="user_feedback.php"><i class="fas fa-comment-dots"></i>User Feedback</a>
    <a href="News_and_Blog.php"><i class="fas fa-newspaper"></i> News and Blog</a>
    <a href="profiledoctor.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="main">
    <h2>Manage Patient Records</h2>
    <form action="save_record.php" method="POST">
  <label for="patient_name">Patient Name:</label>
  <input type="text" id="patient_name" name="patient_name" required><br>

  <label for="doctor_name">Doctor Name:</label>
  <input type="text" id="doctor_name" name="doctor_name" required><br>

  <label for="diagnosis">Diagnosis:</label>
  <input type="text" id="diagnosis" name="diagnosis" required><br>

  <label for="prescription">Prescription:</label>
  <input type="text" id="prescription" name="prescription" required><br>

  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required><br>

  <button type="submit">Save Record</button>
</form>


    <hr>

    <table>
      <thead>
        <tr>
          <th>Patient Name</th>
          <th>Doctor Name</th>
          <th>Diagnosis</th>
          <th>Prescription</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // Include the connection file
        include 'connection.php';

        // Fetch patient records from the database
        $sql = "SELECT * FROM patientrecord";
        $result = mysqli_query($conn, $sql);

        // Check if records exist
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["PatientName"] . "</td>";
                echo "<td>" . $row["DoctorName"] . "</td>";
                echo "<td>" . $row["Diagnosis"] . "</td>";
                echo "<td>" . $row["Prescription"] . "</td>";
                echo "<td>" . $row["Date"] . "</td>";
                echo "<td class='action-buttons'>";
                echo "<button style='background-color: #0d452f; color:white;margin-bottom:10px; ' onclick='popUp(\"{$row['RecordID']}\", \"{$row['PatientName']}\", \"{$row['DoctorName']}\", \"{$row['Diagnosis']}\", \"{$row['Prescription']}\", \"{$row['Date']}\")'>Update</button>";
                echo "<a href='delete_patient_record.php?record_id=" . $row["RecordID"] . "'><button>Delete</button></a>";
                echo "</td>";


                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>
</div>

</body>
<script>
    function popUp(RecordID, PatientName, DoctorName, Diagnosis,Prescription, Date) {
    var container = document.querySelector("body"); // Selecting the body element to append the popup
    var popup = document.createElement("div");
    popup.classList.add("overlay");
    popup.style.display = "flex";
    popup.innerHTML =
    `<div class='popup'>
        <form id='feedback-form' action='update_patient_record.php' method='post'>
            <input type="hidden" id="RecordID" name="RecordID" value="${RecordID}">
            <label for='PatientName'>Patient Name</label>
            <input type='text' id='PatientName' name='PatientName' value='${PatientName}' required>

            <label for='DoctorName'>Doctor Name</label>
            <input type='text' id='DoctorName' name='DoctorName' value='${DoctorName}' required>

            <label for='Diagnosis'>Diagnosis </label>
            <textarea id='Diagnosis' name='Diagnosis' required>${Diagnosis}</textarea>

            <label for='Prescription'>Prescription</label>
            <textarea id='Prescription' name='Prescription' required>${Prescription}</textarea>

            <label for='Date'> Date:</label>
            <input type='date' id='Date' name='Date' value='${Date}' required>

            <button type='submit'>Update</button>
        </form>

        <button id='cancel' onclick='closePopup()'>Cancel</button>
    </div>`;

    container.appendChild(popup);
}



    function closePopup() {
        var popup = document.querySelector('.overlay');
        popup.parentNode.removeChild(popup); 
    }
</script>
</html>
