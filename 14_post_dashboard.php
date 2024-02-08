<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: 13_post_login.php");
} else {
    // Grab data 
    $username = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
    <h1>Selamat Datang,
        <?= $username; ?>
    </h1>
    <a href="13_post_login.php">Logout</a>
</body>

</html>