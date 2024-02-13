<?php 

// Sambungan ke database
$condb = mysqli_connect('localhost', 'root', '', 'asasphp');

// Check DB connection
if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query function
function query($query) {
    global $condb;
    $result = mysqli_query($condb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // Free result set
    mysqli_free_result($result);
    
    return $rows;

}

?>