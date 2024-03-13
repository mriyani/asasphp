<?php
require_once '1_functions.php';

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
            <button type="submit" name="login">Login</button>
        </ul>
    </form>
</body>

</html>