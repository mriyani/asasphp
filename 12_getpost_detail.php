<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img {
            width: 50px;
            height: auto,
        }
    
        a {
            text-decoration: none;
        };
    
    </style>
</head>
<body>
<h1>Daftar Pelajar</h1>
    <ul>
        <li><img src= "img/man.png" alt="Profile"></li>
        <li><?= $_GET["nama"]; ?></li>
    </ul>
    <a href="11_getpost.php">Senarai Pelajar</a>

</body>
</html>





<?php
//$_POST
//var_dump($_POST);