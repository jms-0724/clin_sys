<?php
session_start();

if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Finally, destroy the session
    session_destroy();
}

// Ensure no output before the header function
header("location: ../index.php");
exit(); // Add exit() to stop further execution
?>