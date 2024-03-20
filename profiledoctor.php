<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile-Natembea Online</title>
    <script src="https://kit.fontawesome.com/a3c696c988.js" crossorigin="anonymous"></script>
    <!-- CSS code-->
    <style>
        /* body styling */
        body {
            margin: 0;
            font-family: 'Times New Roman', sans-serif;
            background-color: #ffffff;
        }

        /* Style for the top menu */
        #navbar {
            background-color: #0d452f;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        /* Style for the side navigation */
        #sidenav {
            height: 100%;
            width: 20%;
            position: fixed;
            z-index: 0;
            top: 0;
            background-color: #dedab6;
            padding-top: 50px;
            text-align: justify;
            overflow-x: hidden;
        }

        #sidenav a {
            padding: 15px 8px;
            text-decoration: none;
            font-size: 18px;
            color: #0d452f;
            display: block;
            margin-bottom:15px;
        }

        #sidenav a:hover {
            background-color: #0d452f;
            color: white;
        }

        #ProfileViewing {
            margin-top: 3%;
        }

        .ViewProfile {
            width: 80%; 
            max-width: 600px;
            margin: 50px auto;
            margin-left: 35%;
            background-color: #d9d9d9; 
            padding: 20px;
            border: 2px solid #999; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            display: flex;
            align-items: center; 
        }

        .profile {
            display: flex;
            align-items: flex-start; /
        }

        .profile img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin-right: 20px;
        }

        .separator {
            border-left: 2px solid #999; 
            margin-right: 20px;
            height: 200px; 
        }

        .info label {
            font-weight: bold;
            margin-bottom: 9px; 
            display: inline-block; 
            width: 90px; 
        }

        #Name, #UserID, #email, #role {
            background-color: #d9d9d9;
            border: 0px;
            font-size: 16px;
            font-family: Times New Roman;
            color: #808080;
        }

        #Editbutton {
            width: 180px;
            height: 30px;
            background-color: #0d452f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
        }

        #SaveProfile,
        #Cancelbutton {
            width: 150px;
            height: 30px;
            background-color: #0d452f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
        }

        @media only screen and (max-width: 768px) {
            .ViewProfile {
                width: 90%; 
            }
        }
    </style>
</head>
<body>
<!-- Top Menu-->
<div id="navbar">
    <h2 style="color:white">Edit Profile Natembea Online</h2>

</div>
<div id="sidenav">
    <a href="doctor_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a href="Manage_appointments.php"><i class="fas fa-calendar-alt"></i> Manage Appointments</a>
    <a class="active" href="Patient_Records.php"><i class="fas fa-folder-open"></i> Manage Patient Records</a>
    <a href="Patients_to_attend.php"><i class="fas fa-user-md"></i> Patients to Attend</a>
    <a href="user_feedback.php"><i class="fas fa-comment-dots"></i>User Feedback</a>
    <a href="profiledoctor.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="News_and_Blog.php"><i class="fas fa-newspaper"></i> News and Blog</a>
    <a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!--Profile-->
<div id="ProfileViewing">
    <div class="ViewProfile">
        <div class="profile">
            <img id="uploadImage" src="Images/profile-image.jpg" alt="Profile Picture">
            <div class="separator"></div>
        </div>
        <?php
        if (isset($_SESSION['UserID'])) {
            $user_id = $_SESSION['UserID'];
            $sql = "SELECT * FROM users WHERE UserID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                        ?>
                <form method="post" action="update_customer.php">
                    <div class="info">
                        <label>User ID:</label> <input type="text" name="UserID" id="UserID" value="<?php echo $row["UserID"]; ?>" readonly><br>
                        <label>Email:</label> <input type="email" name="email" id="email" value="<?php echo $row["Email"]; ?>" readonly><br>
                        <label>UserType:</label> <input type="text" name="UserType" id="UserType" value="<?php echo $row["UserType"]; ?>" readonly><br>
                        <button id="Editbutton" onclick="EditProfile()" type="button">Edit Profile</button>
                        <button id="SaveProfile" name="submit" style="display: none;" type="submit">Save Profile</button>
                        <button id="Cancelbutton" onclick="Cancel('<?php echo $row['Name'] ?? ''; ?>')" style="display:none;" type="button"><i class="fas fa-ban"></i> Cancel</button>
                    </div>
                </form>


                    <?php
                }
            }
        }
        ?>
    </div>
</div>

<!-- java script code-->
<script>
    // Get the current URL
    var currentUrl = window.location.href;

    // Get the Profile_txt link
    var profileLink = document.getElementById('Profile_txt');

    // Check if the current URL contains 'Customer-profile.php'
    if (currentUrl.includes('Customer-profile.php')) {
        profileLink.style.backgroundColor = '#BB666A'; 
    } else {
        // Reset the styling if the current URL is not 'Customer-profile.php'
        profileLink.style.backgroundColor = '#0d452f'; 
    }

    function EditProfile() {
        var inputs = document.querySelectorAll('.editable[readonly]');
        // Loop through each input and remove the readonly attribute
        inputs.forEach(function (input) {
            input.removeAttribute('readonly');
            input.style.border = '1px solid #0d452f'; 
        });

        document.getElementById("Editbutton").style.display = "none";
        document.getElementById("SaveProfile").style.display = "inline-block";
        document.getElementById("Cancelbutton").style.display = "inline-block";
    }

    function Cancel(Name) {
        document.getElementById("Name").value = Name;
        document.getElementById("Editbutton").style.display = "block";
        document.getElementById("SaveProfile").style.display = "none";
        document.getElementById("Cancelbutton").style.display = "none";

        var inputs = document.querySelectorAll('.editable:not([readonly])');
        inputs.forEach(function (input) {
            input.setAttribute('readonly', 'readonly');
            input.style.border = '0';
        });
    }

</script>

</body>
</html>
