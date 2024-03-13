<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: 6_login.php');
    exit;
}

require_once '1_functions.php';

$id = $_GET['id'];

if (padampelajar($condb, $id) > 0) {

    echo "
        <script>
            alert('Data pelajar berjaya dipadam!'); 
            document.location.href = 'index.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data pelajar gagal dipadam!');    
        </script>
        ";
}
