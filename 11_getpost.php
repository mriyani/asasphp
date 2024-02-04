<?php
// Superglobals are array associative
// 9 PHP predefined variables that can be always accessible, regardless of scope 
// $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION

// var_dump($_SERVER);

// $_GET
// var_dump($_GET);

$pelajar = [
    [
        "nama" => "Muhammad Riyani",
        "ndp" => "0123654",
        "email" => "email@yehaa.com",
        "kursus" => "Rangkaian Komputer",
        "gambar" => "man.png"
    ],  
    [
        "nama" => "Nur Amni",
        "ndp" => "654123",
        "email" => "email@yuhoo.com",
        "kursus" => "Sistem Komputer",
        "gambar" => "woman.png"
    ]
];

?>

<style>
    img {
        width: 50px;
        height: auto,
    };
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Pelajar</h1>
<?php foreach( $pelajar as $pljr ) : ?>
    <ul>
        <li><img src="img/<?= $pljr["gambar"]; ?>" alt="Profile"></li>
        <li><?= $pljr["nama"]; ?></li>
        <li><?= $pljr["ndp"]; ?></li>
        <li><?= $pljr["email"]; ?></li>
        <li><?= $pljr["kursus"]; ?></li>
    </ul>
<?php endforeach ?>
</body>
</html>





<?php
//$_POST
//var_dump($_POST);