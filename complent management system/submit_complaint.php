<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$description = $_POST['description'];

$sql = "INSERT INTO complaints (name, email, phone, category, description) 
        VALUES ('$name', '$email', '$phone', '$category', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Complaint submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
