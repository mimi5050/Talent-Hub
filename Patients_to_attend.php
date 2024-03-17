
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients to Attend - Natembea Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 90px; 
            background-color: #f3f4f6;
        }

        h1 {
            color: #0d452f;
            text-align: center;
            background-color: #dedab6;
            z-index: 2; 
            top: 0; 
            left: 0; 
            width: 100%; 
            background-attachment: fixed; 
            margin-top:-50px;
            margin-bottom: 20px;
            padding: 20px 0;
        }

        .container {
            width: 65%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left:400px;
        }

        .nav-links {
            list-style-type: none;
            padding: 0;
            background-color: #dedab6;
            width: 380px;
            margin-left: 0px;
            z-index: 2; 
            position: fixed; 
            top: 130px; 
        }

        .nav-links li {
            margin-bottom: 20px;
            background-color: #dedab6;
        }


        .nav-links a {
            text-decoration: none;
            color: #0d452f; 
            display: flex;
            align-items: center;
            font-size: 16px; 
            font-weight: bold; 
            margin-bottom:10px;
        }
        .nav-links li {
            margin-bottom: 40px;
            background-color: #dedab6;
        }
        .nav-links a i {
        margin-right: 10px; 
        margin-left:10px;
       }


        .nav-links a:hover {
            color:  #dedab6;  
            background-color:#0d452f; 
            border-radius: 10px; 
            padding: 12px 20px; 
        }

        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
            height: 70px; 
            width: auto;
            z-index: 2; 
        }

        .insurance-table {
            margin-top: 20px;
            display: block; 
            overflow-x: auto; 
        }

        .insurance-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px; 
        }

        .insurance-table th, .insurance-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .insurance-table th {
            background-color: #0d452f;
            color: #fff;
        }

        .insurance-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-buttons button {
            padding: 8px 16px;
            background-color: #0d452f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .action-buttons button:hover {
            background-color: #0d452f;
        }
    </style>
</head>
<body>
    <img class="logo" src="Images/logo.jpg" alt="Logo">
    <h1>Patients to Attend</h1>
    <ul class="nav-links">
        <li><a href="doctor_dashboard.php"><i class="fas fa-home"></i> Overview</a></li>
        <li><a href="manage_appointments.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a></li>
        <li><a class="active" href="Patient_Records.php"><i class="fas fa-folder-open"></i> Manage Patient Records</a></li>
        <li><a href="Patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a></li>
        <li><a href="user_feedback.php"><i class="fas fa-comment-dots"></i> User Feedback</a></li>
        <li><a href="profiledoctor.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
        <li><a href="News_and_Blog.php"><i class="fas fa-newspaper"></i> News and Blog</a></li>
        <li><a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>

    <div class="container">
        <div class="insurance-table">
            <h2>Patient To Attend Information</h2>
            <table>
                <thead>
                    <tr>            
                        <th>FullName</th>
                        <th>SelectedDoctor</th>
                        <th>ReasonForAppointment</th>
                        <th>AppointmentDate</th>
                        <th>AppointmentTime</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                   include 'connection.php';
                   
                   // Check if the database connection is established
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                   }
                   
                   // Retrieve UserID and UserType from the session
                   $user_id = $_SESSION['UserID'] ?? null;
                   $user_type = $_SESSION['UserType'] ?? null;
                   
                   // Check if $user_id and $user_type are valid
                   if ($user_id !== null && $user_type === 'doctor') {
                       // Prepare and execute the query to fetch appointments for the logged-in doctor
                       $sql = "SELECT a.* FROM appointments a
                               JOIN users u ON a.SelectedDoctor = u.Username
                               WHERE u.UserID = ?";
                       $stmt = $conn->prepare($sql);
                       $stmt->bind_param("i", $user_id);
                       $stmt->execute();
                       $result = $stmt->get_result();
                   
                       // Check if the query was successful
                       if ($result !== false) {
                           // Check if appointments were found
                           if ($result->num_rows > 0) {
                               // Output appointment information
                               while ($row = $result->fetch_assoc()) {
                                   ?>
                                   <tr>
                                       <td><?php echo $row['FullName']; ?></td>
                                       <td><?php echo $row['SelectedDoctor']; ?></td>
                                       <td><?php echo $row['ReasonForAppointment']; ?></td>
                                       <td><?php echo $row['AppointmentDate']; ?></td>
                                       <td><?php echo $row['AppointmentTime']; ?></td>
                                       <td class="table-actions">
                                            <button style="background-color: #006400; color: white;">
                                                <a href="https://meet.google.com/rpf-twyy-mce" target="_blank" style="text-decoration: none; color: inherit;">Attend</a>
                                            </button>
                                            <button style="background-color: black; color: white;">
                                                <a href="delete_already_attended.php?appointment_id=<?php echo $row['AppointmentID']; ?>" style="text-decoration: none; color: inherit;">Delete</a>
                                            </button>
                                        </td>

                                   </tr>
                                   <?php
                               }
                           } else {
                               echo "<tr><td colspan='6'>No patients to attend</td></tr>";
                           }
                       } else {
                           // Handle query execution error
                           echo "<tr><td colspan='6'>Error executing query: " . $stmt->error . "</td></tr>";
                       }
                   
                       // Close the statement
                       $stmt->close();
                   } else {
                       echo "<tr><td colspan='6'>User ID not found or user is not a doctor.</td></tr>";
                   }
                   
                   // Close the database connection
                   $conn->close();
                   ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
