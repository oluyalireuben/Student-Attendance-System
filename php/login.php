<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../dashboard.html");
} else {
    echo "Invalid login credentials.";
}

$conn->close();
?>
