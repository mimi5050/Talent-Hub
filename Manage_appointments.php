<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Appointments - Natembea Online</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #dedab6;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    .edit-button, .delete-button {
      padding: 5px 10px;
      background-color: #0d452f;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .edit-button:hover, .delete-button:hover {
      background-color: #094127;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Manage Appointments</h1>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Time</th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Appointments will be dynamically generated here -->
        <tr>
          <td>2024-02-24</td>
          <td>10:00 AM</td>
          <td>John Doe</td>
          <td>john.doe@example.com</td>
          <td>
            <button class="edit-button">Edit</button>
            <button class="delete-button">Delete</button>
          </td>
        </tr>
        <!-- More appointment rows can be added dynamically -->
      </tbody>
    </table>
  </div>
</body>
</html>
