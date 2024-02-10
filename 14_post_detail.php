<?php

session_start();

if (!isset($_SESSION["login"])) {
    // Redirect to a login page
    header("Location: 13_post_login.php");
    exit();
} else {
    // Grab data 
    $username = $_SESSION['username'];
    $nama = $_SESSION['nama'];
    $gambar = $_SESSION['gambar'];
    $ndp = $_SESSION['ndp'];
    $email = $_SESSION['email'];
    $kursus = $_SESSION['kursus'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <?php var_dump($_SESSION); ?>
    <h1>User Profil</h1>
    <img width="80px" height="auto" src=img/<?= $gambar; ?> >
    <h1>Selamat Datang, <?= $nama; ?></h1>
    <ul>
        <li>NDP: <?= $ndp; ?></li>
        <li>Email: <?= $email; ?></li>
        <li>Kursus: <?= $kursus; ?></li>
    </ul>

    <a href="15_post_logout.php">Logout</a>
</body>
</html>