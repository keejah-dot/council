<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Digital Local Council Service System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        /* Navbar */
        .navbar {
            background: #004aad;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .navbar h2 {
            margin: 0;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1502920917128-1aa500764ce7');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .hero a {
            background: #00b4db;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .hero a:hover {
            background: #0096c7;
        }

        /* Services Section */
        .services {
            padding: 60px 20px;
            text-align: center;
        }

        .services h2 {
            margin-bottom: 40px;
        }

        .service-box {
            display: inline-block;
            width: 250px;
            margin: 15px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .service-box h3 {
            margin-bottom: 10px;
            color: #004aad;
        }

        /* Footer */
        .footer {
            background: #004aad;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<div class="navbar">
    <h2>Local Council System</h2>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="auth/login.php">Login</a>
        <a href="auth/register.php">Register</a>
    </div>
</div>

<!-- Hero Section -->
<div class="hero">
    <h1>Digital Local Council Service Management System</h1>
    <p>Apply for permits, request certificates, and track your applications online.</p>
    <a href="auth/register.php">Get Started</a>
</div>

<!-- Services Section -->
<div class="services">
    <h2>Our Services</h2>

    <div class="service-box">
        <h3>Business Permit</h3>
        <p>Apply for and renew your business operating license online.</p>
    </div>

    <div class="service-box">
        <h3>Construction Permit</h3>
        <p>Submit construction approval requests and track status.</p>
    </div>

    <div class="service-box">
        <h3>Event Permit</h3>
        <p>Request authorization for public events and gatherings.</p>
    </div>

    <div class="service-box">
        <h3>Certificates</h3>
        <p>Request community and residency certificates digitally.</p>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    &copy; <?php echo date("Y"); ?> Local Council Service System | All Rights Reserved
</div>

</body>
</html>
