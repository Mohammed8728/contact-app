<?php
echo '<link rel="stylesheet" href="style.css">';
echo '<div class="card">';
echo '<h2>Web Programming II</h2>';
echo '<form action="submit.php" method="POST">';
echo '  <label>Name</label>';
echo '  <input type="text" name="name" required>';
echo '  <label>Email</label>';
echo '  <input type="email" name="email" required>';
echo '  <label>Contact</label>';
echo '  <textarea name="contact" rows="5" required></textarea>';
echo '  <button type="submit">Submit</button>';
echo '</form>';
echo '<p class="link"><a href="dashboard.php">View Dashboard</a></p>';
echo '</div>';
