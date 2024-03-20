<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Information - Natembea Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 90px; 
        }
        header {
            background-color: #0d452f;
            border-bottom: 2px solid black; 
            z-index: 2; 
            position: fixed; 
            width: 100%; 
        }

        .container {
            width: 65%;
            margin: 70px auto;
            background-color: #fff;
            margin-right:20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        }

        h2 {
            color: #0d452f;
            text-align: center;
            background-color: #dedab6;
        }

        .feedback-form {
            margin-top: 30px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            color: #0d452f;
            font-size:16px;
        }

        .feedback-form input[type="text"],
        .feedback-form textarea,
        .feedback-form input[type="date"],
        .feedback-form input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
        }

        .feedback-form input[type="submit"] {
            background-color: #0d452f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #09311f;
        }

        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
            height: 70px; 
            width: auto;
            z-index: 2; 
        }

        
        .nav-links {
            list-style-type: none;
            padding: 0;
            background-color: #dedab6;
            width: 380px;
            margin-left: 10px;
            z-index: 2; 
            position: fixed; 
            top: 130px; 
            margin-left:0px;
        }

        .nav-links li {
            margin-bottom: 30px;
            background-color: #dedab6;
        }

        .nav-links a {
            text-decoration: none;
            color: #0d452f; 
            display: flex;
            align-items: center;
            font-size: 16px; 
            font-weight: bold; 
        }

        .nav-links a:hover {
            color:  #dedab6;  
            background-color:#0d452f; 
            border-radius: 10px; 
            padding: 12px 20px; 
        }

        .nav-links .icon {
            margin-right: 10px;
            margin-left:10px;
        }

        .action-buttons {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
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
            background-color: #09311f;
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
            padding: 6px; 
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
            padding: 6px 12px; 
            font-size: 12px; 
            background-color:#0d452f;
            color:white;
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
        max-width: 450px;
        width: 90%;
        height:50%;
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
    <img class="logo" src="Images/logo.jpg" alt="Logo">
    <h1>Dashboard</h1>
    <ul class="nav-links">
        <li><a href="User_dashboard.php"><i class="fas fa-home icon"></i> Home</a></li>
        <li><a href="bookappointment.php"><i class="fas fa-calendar-alt icon"></i> Appointments</a></li>
        <li><a href="Insurance.php"><i class="fas fa-file-invoice-dollar icon"></i> Insurance</a></li>
        <li><a href="Emergency_Contact_Information.php"><i class="fas fa-phone icon"></i> Emergency Contact Information</a></li>
        <li><a href="Feedbacksupport.php"><i class="fas fa-comments icon"></i> Feedback and Support</a></li>
        <li><a href="profilepatient.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>

    <div class="container">
        <h1>My Insurance Information</h1>
        <p>Enter your Insurance Information Here.</p>
        <form class="feedback-form" action="save_insuranceInfo.php" method="post">
            <label for="name">Insurance Provider:</label>
            <input type="text" id="name" name="name" required>
            <input type='hidden' value="<?php echo isset($_SESSION['UserID']) ? $_SESSION['UserID'] : ''; ?>" id="user_id" name="user_id">

            <label for="policy_number">Policy Number:</label>
            <input type="text" id="policy_number" name="policy_number" required>
            
            <label for="expiration_date">Expiration Date:</label>
            <input type="date" id="expiration_date" name="expiration_date" required>
            <div class="action-buttons">
                <button type="submit"><i class="fas fa-save"></i> Save Your Insurance Information</button>
            </div>
        </form>

        <div class="insurance-table">
            <h2>Insurance Information</h2>
            <table>
                <thead>
                    <tr>
                        <th>Insurance Provider</th>
                        <th>Policy Number</th>
                        <th>Expiration Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                  include 'connection.php';

                  // Check if the database connection is established
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }

                  // Initialize $user_id
                  $user_id = $_SESSION['UserID'] ?? null;

                  // Check if $user_id is valid
                  if ($user_id !== null) {
                      // Prepare and execute the query
                      $sql = "SELECT * FROM insurance WHERE UserID = ?";
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
                                  <td><?php echo $row['InsuranceProvider']; ?></td>
                                  <td><?php echo $row['PolicyNumber']; ?></td>
                                  <td><?php echo $row['ExpirationDate']; ?></td>
                                  <td class="table-actions">
                                      <button style="background-color: #0d452f; color:white;margin-bottom:10px;" onclick="popUp('<?php echo $row['InsuranceID']; ?>', '<?php echo $row['InsuranceProvider']; ?>','<?php echo $row['PolicyNumber']; ?>', '<?php echo $row['ExpirationDate']; ?>')">Update</button>
                                      <button style="background-color: grey; color:white;"><a href="delete_insurance.php?insurance_id=<?php echo $row['InsuranceID']; ?>">Delete</a></button>
                                  </td>
                              </tr>
                              <?php
                          }
                          

                          } else {
                              echo " ";
                          }
                      } else {
                          // Handle query execution error
                          echo "Error executing query: " . $stmt->error;
                      }

                      // Close the statement
                      $stmt->close();
                  } else {
                      echo "User ID not found.";
                  }

                  // Close the database connection
                  $conn->close();
                  ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    function popUp(InsuranceID, InsuranceProvider, PolicyNumber, ExpirationDate) {
    var container = document.querySelector("body"); // Selecting the body element to append the popup
    var popup = document.createElement("div");
    popup.classList.add("overlay");
    popup.style.display = "flex";
    popup.innerHTML =
    `<div class='popup'>
        <form id='feedback-form' action='update_insurance.php' method='post'>
            <input type="hidden" id="insurance_id" name="InsuranceID" value="${InsuranceID}">

            <label for='InsuranceProvider'>Insurance Provider</label>
            <textarea id='InsuranceProvider' name='InsuranceProvider' required>${InsuranceProvider}</textarea>

            <label for='PolicyNumber'>Policy Number</label>
            <textarea id='PolicyNumber' name='PolicyNumber' required>${PolicyNumber}</textarea>

            <label for='ExpirationDate'>Expiration Date:</label>
            <input type='date' id='ExpirationDate' name='ExpirationDate' value='${ExpirationDate}' required>

            <button type='submit' ">Update</button>
        </form>

        <button id='cancel' onclick='closePopup()'>Cancel</button>
    </div>`;

    container.appendChild(popup);
}



    function closePopup() {
        var popup = document.querySelector('.overlay');
        popup.parentNode.removeChild(popup); // Remove the popup element from the DOM
    }
</script>
</html>
