<?php
require "db.php";

$result = $conn->query("SELECT id, name, email, contact FROM my_contact ORDER BY id");

echo '<link rel="stylesheet" href="style.css">';
echo '<div class="card wide">';
echo '<h2>Dashboard</h2>';
echo '<table>';
echo '<tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th></tr>';

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row["id"] . '</td>';
    echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
    echo '<td>' . htmlspecialchars($row["email"]) . '</td>';
    echo '<td>' . htmlspecialchars($row["contact"]) . '</td>';
    echo '</tr>';
}

echo '</table>';
echo '<p class="link"><a href="index.php">Back to form</a></p>';
echo '</div>';
$conn->close();
