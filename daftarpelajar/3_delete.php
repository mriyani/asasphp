<?php

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
