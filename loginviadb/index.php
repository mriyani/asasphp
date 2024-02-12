<?php

// Sambungan ke database
$condb = mysqli_connect('localhost', 'root', '', 'asasphp');

// Query / Ambil data dari table palajar
$result = mysqli_query($condb, 'SELECT * FROM pelajar');

// Ambil (fetch) data dari table pelajar dari $result ada 4 cara:

// 1. mysqli_fetch_row() => return indexes @ numeric array
// $pljr = mysqli_fetch_row($result);
// var_dump($pljr[5]);

// 2. mysqli_fetch_assoc() => return associative array [PREFERED]
// $pljr = mysqli_fetch_assoc($result);
// var_dump($pljr['email']); 

// 3. mysqli_fetch_array() => return both numeric and associative arrays
// $pljr = mysqli_fetch_array($result);
// var_dump($pljr[5]);
// var_dump($pljr['email']);

// 4. mysqli_fetch_object() => return data in an object
// $pljr = mysqli_fetch_object($result);
// var_dump($pljr->email); // access fnama key fetch result in $pljr 

?>

<?php


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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="../img/<?= $row['gambar']; ?>" width="45px"></td>
                <td><?= $row['ndp'] ?></td>
                <td><?= $row['fname'] . ' ' . $row['lname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['kursus'] ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Padam</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table>


</body>

</html>