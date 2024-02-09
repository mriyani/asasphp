<?php

$pelajar = [
    [
        "username" => "riyani",
        "nama" => "Muhammad Riyani",
        "ndp" => "0123654",
        "email" => "email@yehaa.com",
        "kursus" => "Rangkaian Komputer",
        "gambar" => "man.png",
        "password" => "123"
    ],  
    [
        "username" => "amni",
        "nama" => "Nur Amni",
        "ndp" => "654123",
        "email" => "email@yuhoo.com",
        "kursus" => "Sistem Komputer",
        "gambar" => "girl.png",
        "password" => "123"
    ],
    [
        "username" => "aboy",
        "nama" => "Aboy Hensome",
        "ndp" => "456987123",
        "email" => "email@boboy.com",
        "kursus" => "Pomen",
        "gambar" => "boy.png",
        "password" => "123"
    ],
    [
        "username" => "cahaya",
        "nama" => "Cahaya Purnama",
        "ndp" => "741852369",
        "email" => "nur@purnama.com",
        "kursus" => "Baking",
        "gambar" => "woman.png",
        "password" => "123"
    ],  
];

?>

<?php
// Semak butang Login ditekan
if (isset($_POST['submit'])) {

    // Semak username dan password diberikan oleh user
    if (isset($_POST['username']) && isset($_POST['password'])) {
        global $pelajar;

        // Simpan data ndp dan password ke dalam variable
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Loop ke dalam array $pelajar untuk cek username dan password
        foreach ($pelajar as $pelajar1) {
            if ($pelajar1['username'] == $username && $pelajar1['password'] == $password) {

                // Jika BETUL, redirect ke User Profil
                $nama = $pelajar1['nama'];
                $gambar = $pelajar1['gambar'];
                $ndp = $pelajar1['ndp'];
                $email = $pelajar1['email'];
                $kursus = $pelajar1['kursus'];
                header('Location: 14_post_detail.php?name=' . $nama . '&img='. $gambar . '&ndp=' . $ndp . '&email=' . $email . '&kursus=' . $kursus);
                exit();
            }
        }
        // Jika SALAH, paparkan error message
        $error = true;

    } else {
        // Jika SALAH, paparkan error message
        $error = true;
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>User Login</h1>
<?php if (isset($error)) { ?>
    <p style="color: salmon; font-style: italic;">Username @ Password SALAH!</p>
<?php } ?>

    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit" name="submit">Login</button>
    </form>

</body>
</html>