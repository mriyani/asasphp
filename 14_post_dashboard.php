<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: 13_post_login.php");
} else {
    // Grab data 
    $username = $_SESSION['username'];
    $passhash = $_SESSION['passhash'];
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
    <?= var_dump($_SESSION) ?>
    <h1>Selamat Datang,
        <?= $username; ?>
    </h1>
    <p>Hash: <?= $passhash;?></p>
    <a href="13_post_login.php">Logout</a>
</body>

</html>