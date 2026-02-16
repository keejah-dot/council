<?php
include("config/db.php");

$name = "System Admin";
$email = "admin@council.com";
$phone = "0000000000";
$password = password_hash("admin123", PASSWORD_DEFAULT);
$role = "admin";

$stmt = $conn->prepare("INSERT INTO users (full_name, email, phone, password, role) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $password, $role);

if($stmt->execute()){
    echo "Admin Created Successfully!";
} else {
    echo "Error: " . $stmt->error;
}
?>
