<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to a different page after destroying the session
header("Location: ../LandingPage2.php");
exit();
?>
