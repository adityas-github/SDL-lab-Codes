<?php
$servername = "localhost";
$username = "adi";
$password = "";
$dbname = "complaint_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

