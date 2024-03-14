<?php
session_start();

// Clear and destroy session
$_SESSION = [];
session_unset();
session_destroy();

// Clear cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// Redirect to login page
header('Location: 6_login.php');
exit;