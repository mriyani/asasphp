<?php

// Panggil fail function
require_once '1_functions.php';

// Ambil data id dari URL
$id = $_GET['id'];

// Ambil maklumat pelajar dari database menggunakan $id
$pelajar = ambildata($condb, "SELECT * FROM pelajar WHERE id = $id")[0];

$fname = $pelajar['fname'];
$lname = $pelajar['lname'];
$nokp = $pelajar['nokp'];
$ndp = $pelajar['ndp'];
$email = $pelajar['email'];
$kursus = $pelajar['kursus'];
$gambar = $pelajar['gambar'];

var_dump($gambar);

// Cek jika butang submit telah ditekan
if (isset($_POST['submit'])) {

    // Cek status edit/ update pelajar
    if (edit($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Data pelajar berjaya dikemas kini!'); 
            document.location.href = 'index.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Tiada perubahan data dilakukan!');    
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Maklumat Pelajar</title>
</head>

<body>
    <h1>Edit Maklumat Pelajar</h1>

    <a href="index.php">Senarai Pelajar</a>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $id; ?>">
        <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $gambar; ?>">
        <ul>
            <li>
                <label for="gambar">Gambar:</label><br>
                <img src="../img/<?= $gambar ?>" width="75px" alt=""><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <label for="fname">First Name:</label><br>
                <input type="text" name="fname" id="fname" required value="<?=
                                                                            $fname ?>">
            </li>
            <br>
            <li>
                <label for="lname">Last Name:</label><br>
                <input type="text" name="lname" id="lname" required value="<?= $lname ?>">
            </li>
            <br>
            <li>
                <label for="nokp">No KP:</label><br>
                <input type="text" name="nokp" id="nokp" required value="<?= $nokp ?>">
            </li>
            <br>
            <li>
                <label for="ndp">NDP:</label><br>
                <input type="text" name="ndp" id="ndp" required value="<?= $ndp ?>">
            </li>
            <br>
            <li>
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" required value="<?= $email ?>">
            </li>
            <br>
            <li>
                <label for="kursus">Kursus:</label><br>
                <input type="text" name="kursus" id="kursus" required value="<?= $kursus ?>">
            </li>
            <br>
            <button type="submit" name="submit">Update</button>
        </ul>
    </form>

</body>

</html>