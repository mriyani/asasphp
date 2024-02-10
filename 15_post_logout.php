<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header('Location: 13_post_login.php');