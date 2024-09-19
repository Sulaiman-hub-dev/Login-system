<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: login.php');
    exit();
}

// Connect to database
include('include/db.php');

// Get user information
$userid = $_SESSION['userid'];
$stmt = $connect->prepare('SELECT * FROM users WHERE id = ?');
$stmt->bind_param('i', $userid);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .dashboard-container {
            width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .user-info {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <div class="user-info">
            <h3>Welcome, <?php echo $user['name']; ?>!</h3>
            <p>Email: <?php echo $user['email']; ?></p>
        </div>
        <hr>
        <h3>Account Settings</h3>
        <ul>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
</body>
</html>