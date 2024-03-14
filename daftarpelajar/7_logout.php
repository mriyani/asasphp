<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header('Location: 6_login.php');
exit;