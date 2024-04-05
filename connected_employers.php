<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connected Employers - TalentHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        
      

        h1 {
            color: #07bca3;
            text-align: center;
            margin-top: -50px;
        }
        h2 {
            color: #07bca3;
            text-align: center;
            background-color: #dedab6;
        }


        .talent-form {
            margin-top: 30px;
        }

        .talent-form label {
            display: block;
            margin-bottom: 15px;
            color: #07bca3;
            font-size: 16px;
            margin-top:15px;
            
        }

        .talent-form input[type="text"],
        .talent-form textarea,
        .talent-form input[type="date"],
        .talent-form input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .talent-form textarea {
            height: 100px;
        }

        .talent-form input[type="submit"] {
            background-color: #07bca3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .talent-form input[type="submit"]:hover {
            background-color: #09311f;
        }

        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 2;
            width: 15%;
        }

        .nav-links {
            list-style-type: none;
            padding: 0;
            background-color: whitesmoke;
            width: 380px;
            margin-left: 0px;
            z-index: 2;
            position: fixed;
        }

        .nav-links a {
            text-decoration: none;
            color: #07bca3; 
            display: flex;
            align-items: center;
            font-size: 16px; 
            font-weight: bold; 
            margin-bottom: 60px;
            margin-left: 20px; 
        }

        .nav-links a:hover {
            color:  #dedab6;  
            background-color: #07bca3; 
            border-radius: 10px; 
            padding: 12px 20px; 
        }

        .nav-links a .icon {
            margin-right: 10px;
        }

        .action-buttons {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            
        }

       
        .action-buttons button {
            width:200px;
            height:40px;
            background-color: #07bca3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 26px; 
        }

    

        .action-buttons button:hover {
            background-color: #09311f;
        }

        .Talent_showcasing-table {
            margin-top: 20px;
            display: block; 
            overflow-x: auto; 
        }

        .Talent_showcasing-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px; 
        }

        .Talent_showcasing-table th, .Talent_showcasing-table td {
            border: 1px solid #ccc;
            padding: 6px; 
            text-align: left;
        }

        .Talent_showcasing-table th {
            background-color: #07bca3;
            color: #fff;
        }

        .Talent_showcasing-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-buttons button {
            padding: 6px 12px; 
            font-size: 12px; 
            background-color: #07bca3;
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
            color: #07bca3;
            font-weight: bold;
        }

        .popup input[type="text"],
        .popup input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #07bca3;
            border-radius: 5px;
        }

        .popup button {
            width: calc(50% - 5px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #07bca3;
            color: white;
            cursor: pointer;
        }

        #cancel {
            margin-top : 10px;
            background-color: #ff6666;
        }
    
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: whitesmoke;
    }

    .topnav a {
      float: left;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 14px;

    }

    .topnav a:hover {
      background-color: #ebdfd3;
      color: #555;
    }

    .topnav a.active {
      background-color: #07bca3; 
      color: white;
      border-radius: 16px;
    }

    .topnav a.signup {
      float: right;
      background-color: #07bca3;
      color: whitesmoke;
      border-radius: 16px;
    }
    .topnav a.signup:hover {
      color: whitesmoke;
      background-color: #07bca3; 
    }

    .topnav a.split {
      float: right;
      background-color: #ebdfd3;
      color: #333;
    }

    .topnav a.split:hover{
      color: #555;
    }

    .topnav-centered a.title {
      float: left;
      position: absolute;
      font-family: Longhaul;
      font-weight: lighter;
      top: 0%;
      color: black;
    }

    .topnav-centered a.title:hover {
      background-color: white;
    }

    .topnav a.title {
      font-family: Longhaul;
      font-size: x-large;
      font-weight: bold;
    }

    .container {
    display: flex;
    width: 70%;
    flex-direction: column;
    margin-left:25%; 
    margin-top:60px;
}

    .topnav {
      background-color: white;
      color: #07bca3; 
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      margin-left: -85px;
      padding: 20px 10px;
      position: fixed;
      width: 100%;
      overflow: hidden;
      margin-top:-60px;
    }

    .topnav h1 {
      margin: 0;
      font-weight: bolder;
      font-size: large;
      margin-left: 100px;
    }
    .topnav-centered {
        margin-top: -80px; 
    }


    .sidenav.topnav-centered a {
      float: none;
      position: absolute;
      left: 50%;
      transform: translate(-50%);
    }

    .dashboard {
      margin-top: 80px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: 160px;
      padding: 20px 20px;
    }

   
    .
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #07bca3; 
      color: white;
    }
    tr:hover {background-color: #e6e3cd;}

    li{
        list-style-type: none;
    }
    .sidenav {
        height: 100%;
        width: 23%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        padding-top: 80px;
        padding-left: 10px;
        margin-top: 0;
      }



      .sidenav a {
        padding: 20px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
        margin-bottom:15px;

      }

      .sidenav a:hover {
        color:  #dedab6;  
        background-color:#07bca3; 
        border-radius: 10px; 
        padding: 12px 20px; 
      }

   
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="topnav">
            <h1>Dashboard</h1>
        </div>

        <div class="sidenav">
            <div class="topnav-centered">
                <img src="images/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
            </div>
            <a href="employee_dashboard"><i class="fas fa-home"></i> Overview</a>
            <a href="Talent_showcasing.php"><i class="fas fa-address-book"></i> Showcase your talent</a>
            <li><a class="active" href="connected_employers.php"><i class="fas fa-user-tie"></i> Connected Employers</a></li>
            <a href="employee_dashboard.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</header>

<div class="container">
    <h2>Connected Employers</h2>
    <div class="Talent_showcasing-table">
        <table>
            <thead>
                <tr>            
                    <th>Employer Name</th>
                    <th>Contact Email</th>
                    <th>Contact Phone</th>
                   
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
if ($user_id !== null && $user_type === 'patient') {
    // Prepare and execute the query to fetch the connected employers for the logged-in talent (patient)
    $sql = "SELECT t.*, u.Username AS EmployerName, u.Email AS EmployerEmail, u.ContactInfo AS EmployerPhone
            FROM talents t
            JOIN users u ON t.user_id = u.UserID
            WHERE t.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query was successful
    if ($result !== false) {
        // Check if connected employers were found
        if ($result->num_rows > 0) {
            // Output employer information
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['EmployerName']; ?></td>
                    <td><?php echo $row['EmployerEmail']; ?></td>
                    <td><?php echo $row['EmployerPhone']; ?></td>
            
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No connected employers found</td></tr>";
        }
    } else {
        // Handle query execution error
        echo "<tr><td colspan='3'>Error executing query: " . $stmt->error . "</td></tr>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<tr><td colspan='3'>User ID not found.</td></tr>";
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
