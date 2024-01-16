<?php
// In get_user_count.php
session_start();

// Increment the user count when a new user joins
if (!isset($_SESSION['user_count'])) {
    $_SESSION['user_count'] = 1;
} else {
    $_SESSION['user_count']++;
}

// Decrement the user count when a user leaves (you need to handle this based on your logic)
// e.g., $_SESSION['user_count']--;

// Return the current user count
echo $_SESSION['user_count'];
?>
