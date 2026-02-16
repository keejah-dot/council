<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

/* Get statistics */
$totalUsers = $conn->query("SELECT COUNT(*) as total FROM users")->fetch_assoc()['total'];
$totalApplications = $conn->query("SELECT COUNT(*) as total FROM applications")->fetch_assoc()['total'] ?? 0;
$pending = $conn->query("SELECT COUNT(*) as total FROM applications WHERE status='pending'")->fetch_assoc()['total'] ?? 0;
$approved = $conn->query("SELECT COUNT(*) as total FROM applications WHERE status='approved'")->fetch_assoc()['total'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #004aad;
            position: fixed;
            color: white;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #003080;
        }

        .main {
            margin-left: 220px;
            padding: 20px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            flex: 1;
            min-width: 200px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin: 0;
            color: #004aad;
        }

        .card p {
            font-size: 24px;
            font-weight: bold;
        }

        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .logout a {
            background: red;
            padding: 8px 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Manage Users</a>
    <a href="#">View Applications</a>
    <a href="#">Services</a>

    <div class="logout">
        <a href="../auth/logout.php">Logout</a>
    </div>
</div>

<div class="main">
    <h1>Welcome, Admin 👋</h1>

    <div class="cards">
        <div class="card">
            <h3>Total Users</h3>
            <p><?php echo $totalUsers; ?></p>
        </div>

        <div class="card">
            <h3>Total Applications</h3>
            <p><?php echo $totalApplications; ?></p>
        </div>

        <div class="card">
            <h3>Pending Applications</h3>
            <p><?php echo $pending; ?></p>
        </div>

        <div class="card">
            <h3>Approved Applications</h3>
            <p><?php echo $approved; ?></p>
        </div>
    </div>
</div>

</body>
</html>
