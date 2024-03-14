<?php
session_start();

require_once '1_functions.php';

// Cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan id
    $result = mysqli_query($condb, "SELECT username FROM login WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];

    if ($key === hash('sha512', $username)) {
        $_SESSION['login'] = true;

    }

}

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($condb, "SELECT * FROM login WHERE username = '$username'");

    // Cek exist username
    if (mysqli_num_rows($result) === 1) {

        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Set session
            $_SESSION['login'] = true;

            // Cek remember me
            if (isset($_POST['remember'])) {
                // Buat cookie
                // setcookie('login', 'true', time() + 60);
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha512', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>

    <?php if (isset($error)): ?>
        <p style="color: red; font-style: italic">Username / Password SALAH!</p>
    <?php endif; ?>

    <form action="" method="POST">
        <ul>
            <li><label for="username">Username: </label><br>
                <input type="text" name="username" id="username"><br><br>
            </li>
            <li><label for="password">Password: </label><br>
                <input type="password" name="password" id="password"><br><br>
            </li>
            <li>
                <input type="checkbox" name="remember" id=" remember">
                <label for="remember">Remember me</label><br><br>
            </li>
            <button type="submit" name="login">Login</button>
        </ul>
    </form>
</body>

</html>