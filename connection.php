<?php
session_start();
$conn = new mysqli("localhost", "root", "", "todoapp");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Fixed missing semicolon
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['password-repeat'];

    // Check if passwords match
    if ($password !== $repeat_password) {
        echo "Passwords do not match. <a href='register.html'>Try again</a>";
        exit();
    }

    // Hash password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into MySQL
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password); 

    if ($stmt->execute()) {
        echo "Registration successful.<a href='index.html'>Login here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }   

    $stmt->close();
}

$conn->close();
?>