<?php
include 'db.php';

$student_id = $_POST['student_id'];
$date = $_POST['date'];

$sql = "INSERT INTO attendance (student_id, date) VALUES ('$student_id', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Attendance marked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
