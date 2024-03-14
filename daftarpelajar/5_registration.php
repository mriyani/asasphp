<?php
require_once '1_functions.php';

if (isset($_POST['register'])) {

    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])) {
        echo "<script>alert('Please fill up all of the fields');
              document.location.href = '5_registration.php';
              </script>";
        exit;
    }

    if (register($condb, $_POST) > 0) {
        echo "<script>
             alert('Registration Successful! Please login to continue');
             document.location.href = '6_login.php';
             </script>";
    } else {
        echo mysqli_error($condb);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registraion</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username">
            </li><br>
            <li>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password">
            </li><br>
            <li>
                <label for="password2">Confirm Password</label><br>
                <input type="password" name="password2" id="password2"><br>
            </li><br>
            <button type="submit" name="register">Register</button>
        </ul>

    </form>
</body>

</html>