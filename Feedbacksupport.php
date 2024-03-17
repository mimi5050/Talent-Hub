<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Support - Natembea Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0d452f;
            border-bottom: 2px solid black; 
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
        }

        .feedback-form {
            margin-top: 30px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            color: #0d452f;
        }

        .feedback-form input[type="text"],
        .feedback-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
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
            position: absolute;
            top: 20px;
            left: 20px;
            height: 70px; 
            width: auto;
        }

        .nav-links {
            position: absolute;
            top: 130px; 
            list-style-type: none;
            padding: 0;
            background-color:#dedab6;
            width: 380px;
            margin-left:0px;
        }


        .nav-links li {
            margin-bottom: 50px;
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
        <li><a href="profilepatient .php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

    </ul>

    <div class="container">
        <h1>Feedback and Support</h1>
        <p>We value your feedback and are here to assist you. Please fill out the form below.</p>
        <form class="feedback-form" action="save_feedback.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
