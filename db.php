<?php
// Database connection (XAMPP defaults: user root, empty password)
$conn = new mysqli("localhost", "root", "", "Contacts");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
