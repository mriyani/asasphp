<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <?php var_dump($_GET); ?>
    <h1>Selamat Datang, <?= $_GET['name']; ?></h1>

    <a href="13_post_login.php">Logout</a>
</body>
</html>