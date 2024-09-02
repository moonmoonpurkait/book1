<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (name, email, date, time) VALUES ('$name', '$email', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
