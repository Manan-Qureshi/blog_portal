<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login successful, redirect to home2.html
        header('Location: home2.html');
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>
