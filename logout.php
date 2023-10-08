<?php
session_start();

// Unset the session variable
unset($_SESSION['user']);

// Destroy the session
session_destroy();

// Redirect to the login page or any other appropriate page
header("Location: index.php");
exit();
?>
