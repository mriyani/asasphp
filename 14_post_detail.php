<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <!-- <?php var_dump($_GET); ?> -->
    <h1>User Profil</h1>
    <img width="80px" height="auto" src=img/<?= $_GET['img']; ?> >
    <h1>Selamat Datang, <?= $_GET['name']; ?></h1>
    <ul>
        <li>NDP: <?= $_GET['ndp']; ?></li>
        <li>Email: <?= $_GET['email']; ?></li>
        <li>Kursus: <?= $_GET['kursus']; ?></li>
    </ul>

    <a href="13_post_login.php">Logout</a>
</body>
</html>