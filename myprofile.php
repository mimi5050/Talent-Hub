<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Natembea Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dedab6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center align content */
        }

        .profile-container {
            display: inline-block; /* Allows to center while keeping items left-aligned */
            text-align: left; /* Align items to the left */
            margin-bottom: 20px;
        }

        .profile img {
            width: 150px;
            border-radius: 50%;
            border: 2px solid #0d452f;
            margin-bottom: 10px;
        }

        .upload-button {
            background-color: #0d452f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .upload-button:hover {
            background-color: #09311f;
        }

        .edit-profile-button {
            background-color: #0d452f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-profile-button:hover {
            background-color: #09311f;
        }

        .details {
            padding: 20px;
            text-align: left; /* Align text within details section to the left */
        }

        .details h2 {
            color: #0d452f;
        }

        .details p {
            color: #0d452f;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <div class="profile">
                <img src="Angel_profile.jpg" alt="Profile Picture">
                <br>
                <button class="upload-button">Upload Picture</button>
            </div>
            <div class="details">
                <h2>My Profile Details</h2>
                <p><strong>Name:</strong> Angel Manzi Gaju</p>
                <p><strong>Email:</strong>angelgaju36@gmail.com</p>
                <p><strong>Role:</strong> Patient</p>
                <p><strong>Location:</strong> Accra, Ghana</p>
                <p><strong>Phone:</strong> +233 209 247 369</p>
                <button class="edit-profile-button">Edit Profile</button>
            </div>
        </div>
    </div>
</body>
</html>
