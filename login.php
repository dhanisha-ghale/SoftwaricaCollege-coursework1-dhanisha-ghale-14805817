<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gender_selection db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Input validation and sanitization
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password']; // password_hash() will sanitize this

// SQL query to check user data in the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['name'] = $user['name'];
        $_SESSION['gender'] = $user['gender'];
        if ($user['gender'] == 'male') {
            header("Location: male_products.php");
        } else {
            header("Location: female_products.php");
        }
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with this email.";
}

$conn->close();
?>
