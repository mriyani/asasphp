<?php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Perform authentication (replace this with your actual authentication logic)
    $authenticated = authenticateUser($username, $password);

    
    if ($authenticated) {
        // Store username in session
        $_SESSION['username'] = $username;
        
        // Redirect to the user dashboard or another authenticated page
        header("Location: 14_post_dashboard.php");
        exit();
    } else {
        // Authentication failed, display an error message
        $_SESSION['error'] = "Invalid username or password";
    }
}

// Function to authenticate user (replace this with your actual authentication logic)
function authenticateUser($username, $password) {
    // Implement your authentication logic, such as checking against a database
    // For demonstration purposes, let's assume a simple check
    $validUsername = 'Admin';
    $validPasswordHash = password_hash('123', PASSWORD_DEFAULT);
    $_SESSION['passhash'] = $validPasswordHash;
    return $username === $validUsername && password_verify($password, $validPasswordHash);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>

<body>
    <?php
    // Display error message if authentication failed
    if (isset($_SESSION['error'])) {
        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>
    <ul>
        <form method="post" action="">

            <label for="username">Username:</label>
            <li><input type="text" name="username" id="username" required></li>
            <br>
            <label for="password">Password:</label>
            <li><input type="password" name="password" id="password" required></li>

            <br>

            <button type="submit">Login</button>
        </form>
    </ul>
</body>

</html>