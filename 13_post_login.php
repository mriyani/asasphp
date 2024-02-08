<?php
// Semak butang Login ditekan
if (isset($_POST['submit'])) {
    // Semak username dan password
    if ($_POST['username'] == 'Admin' && $_POST['password'] == 123) {
        // Jika BETUL, redirect ke User Profil
        header('Location: 14_post_detail.php?name=' . $_POST['username']);
        exit();
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
        <input type="text" name="username" id="username" ><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" ><br><br>
        <button type="submit" name="submit">Login</button>
    </form>

</body>
</html>