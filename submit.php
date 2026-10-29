<?php
require "db.php";

echo '<link rel="stylesheet" href="style.css">';
echo '<div class="card">';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Get the POST data
$name    = trim($_POST["name"] ?? "");
$email   = trim($_POST["email"] ?? "");
$contact = trim($_POST["contact"] ?? "");

if ($name === "" || $email === "" || $contact === "") {
    echo '<p class="message error">All fields are required.</p>';
    echo '<p class="link"><a href="index.php">Go back</a></p></div>';
    exit;
}

// Submit to the database (prepared statement prevents SQL injection)
$stmt = $conn->prepare("INSERT INTO my_contact (name, email, contact) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $contact);

if ($stmt->execute()) {
    echo '<p class="message success">Saved successfully.</p>';
    echo '<p class="link"><a href="index.php">Add another</a> | <a href="dashboard.php">Dashboard</a></p>';
} else {
    echo '<p class="message error">Error: ' . htmlspecialchars($stmt->error) . '</p>';
}

echo '</div>';
$stmt->close();
$conn->close();
