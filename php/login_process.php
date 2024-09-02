<?php
// Include database connection (update as needed)
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Example login logic (you should hash passwords and use prepared statements in production)
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login
    echo "Login successful!";
} else {
    // Failed login
    echo "Invalid username or password.";
}

$conn->close();
?>
