<?php

// Start session
session_start();

 ?>

<?php

$pelajar = [
    [
        "username" => "riyani",
        "nama" => "Muhammad Riyani",
        "ndp" => "0123654",
        "email" => "riyani@yehaa.com",
        "kursus" => "Rangkaian Komputer",
        "gambar" => "man.png",
        "password" => password_hash("123", PASSWORD_DEFAULT)  // Hashing the password
    ],  
    [
        "username" => "amni",
        "nama" => "Nur Amni",
        "ndp" => "654123",
        "email" => "amni@yuhoo.com",
        "kursus" => "Sistem Komputer",
        "gambar" => "girl.png",
        "password" => password_hash("123", PASSWORD_DEFAULT)  // Hashing the password
    ],
    [
        "username" => "aboy",
        "nama" => "Aboy Hensome",
        "ndp" => "456987123",
        "email" => "aboy@boboy.com",
        "kursus" => "Pomen",
        "gambar" => "boy.png",
        "password" => password_hash("123", PASSWORD_DEFAULT)  // Hashing the password
    ],
    [
        "username" => "cahaya",
        "nama" => "Cahaya Purnama",
        "ndp" => "741852369",
        "email" => "cahaya@purnama.com",
        "kursus" => "Baking",
        "gambar" => "woman.png",
        "password" => password_hash("123", PASSWORD_DEFAULT)  // Hashing the password
    ],  
];

?>

<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Perform authentication (replace this with your actual authentication logic)
    $authenticated = authenticateUser($username, $password,$pelajar);

    if ($authenticated) {
        $_SESSION['login'] = true;

        // Redirect to the user profile
        header("Location: 14_post_detail.php");
        exit();
        } else {
        // Authentication failed, display an error message
        $_SESSION['error'] = "Invalid username or password";
        }
}

// Function to authenticate user
function authenticateUser($username, $password,$pelajar) {
    // Implement your authentication logic, such as checking against a database
    // For demonstration purposes, let's assume a simple check
    
    foreach ($pelajar as $pelajar1) {
        $validUsername = $pelajar1['username'];
        $validPasswordHash = $pelajar1['password'];

        if ($username === $validUsername && password_verify($password, $validPasswordHash)) {

            // Save user data in session
            $_SESSION['username'] = $pelajar1['username'];
            $_SESSION['nama'] = $pelajar1['nama'];
            $_SESSION['gambar'] = $pelajar1['gambar'];
            $_SESSION['ndp'] = $pelajar1['ndp'];
            $_SESSION['email'] = $pelajar1['email'];
            $_SESSION['kursus'] = $pelajar1['kursus'];

            return true;
        }
    }

    return false;
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
    <?php var_dump($_SESSION) ?>
    <h1>User Login</h1>
    <?php
    // Display error message if authentication failed
    if (isset($_SESSION['error'])) {
        echo '<p style="color: salmon;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>

    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit" name="submit">Login</button>
    </form>

</body>
</html>