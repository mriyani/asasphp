<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img {
            width: 50px;
            height: auto;
        }

        a {
            text-decoration: none;
        }

        ul li {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .link {
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <h1>Profil Pelajar</h1>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="Profile"></li>
        <li>Nama:
            <?= $_GET["nama"]; ?>
        </li>
        <li>NDP:
            <?= $_GET["ndp"]; ?>
        </li>
        <li>Email:
            <?= $_GET["email"]; ?>
        </li>
        <li>Kursus:
            <?= $_GET["kursus"]; ?>
        </li>
    </ul>
    <div class="link">
        <a href="11_getpost.php">Senarai Pelajar</a>
    </div>

</body>

</html>