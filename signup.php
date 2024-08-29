

<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $ph = $_POST['ph'];

    // Check if username already exists
    $check = $conn->query("SELECT * FROM users WHERE username = '$username'");

    if ($check->num_rows > 0) {
        echo "Username already exists";
        ?>
        <button> <a href="/blog_portal/signup.html">Again sigup</a></button>
        <?php
    } else {
        // Insert new user into database
        $query = "INSERT INTO users (username, name, password, age, gender, email, ph) VALUES ('$username', '$name', '$password', '$age', '$gender', '$email', '$ph')";

        if ($conn->query($query) === TRUE) {
            header('Location: home2.html');
            exit();
    
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>
