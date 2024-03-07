<?php
// Panggil fail function
require_once '1_functions.php';

$pelajar = ambildata($condb, 'SELECT * FROM pelajar');

// Check button search
if (isset($_POST['cari'])) {
    $pelajar = cari($condb, $_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
</head>

<body>
    <h1>Senarai Pelajar</h1>

    <a href="2_daftar.php">Daftar Pelajar</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="25" autofocus placeholder="Carian data pelajar" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NDP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kursus</th>
            <th>Tetapan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($pelajar as $row) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td><img src="../img/<?= $row['gambar']; ?>" width="45px"></td>
                <td>
                    <?= $row['ndp'] ?>
                </td>
                <td>
                    <?= $row['fname'] . ' ' . $row['lname'] ?>
                </td>
                <td>
                    <?= $row['email'] ?>
                </td>
                <td>
                    <?= $row['kursus'] ?>
                </td>
                <td>
                    <a href="4_edit.php?id=<?= $row['id'] ?>"><img width="25px" src="../img/edit.png"></a>
                    <a href="3_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['fname'] . ' ' . $row['lname'] ?>?');"><img width="25px" src="../img/delete.png"></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>

</html>