<?php
// Superglobals are array associative
// 9 PHP predefined variables that can be always accessible, regardless of scope 
// $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION

// $_GET
// var_dump($_GET);

// var_dump($_SERVER);
// echo $_SERVER['SERVER_NAME'];

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
    ],
    [
        "nama" => "Cahaya Purnama",
        "ndp" => "741852369",
        "email" => "nur@purnama.com",
        "kursus" => "Baking",
        "gambar" => "girl.png"
    ],  
];

?>

<style>
    img {
        width: 50px;
        height: auto;
    }

    a {
        text-decoration: none;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Senarai Pelajar</h1>
    <ul>
        <?php foreach( $pelajar as $pljr ) : ?>
            <li>
                <a href="12_getpost_detail.php?nama=<?= $pljr["nama"]; ?>"><?= $pljr["nama"]; ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>


<?php

//$_POST
//var_dump($_POST);

?>