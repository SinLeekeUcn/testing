<?php
$servername = "192.168.0.1";
$username = "niggolas";
$password = "123";
$dbname = "niggolas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection fail " . $conn ->connect_error);
    }
?>