<?php

// Sambungan ke database
$condb = mysqli_connect('localhost', 'root', '', 'asasphp');

// Check DB connection
if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query function
function ambildata($condb, $query)
{
    $result = mysqli_query($condb, $query); //Query
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // Simpan assoc data ke dlm $row
    }
    // Free result set
    mysqli_free_result($result);

    return $rows;
}

function daftar($condb, $data)
{

    // Simpan setiap data dari post $data ke dalam variables
    $fname = htmlspecialchars($data['fname']);
    $lname = htmlspecialchars($data['lname']);
    $nokp = htmlspecialchars($data['nokp']);
    $ndp = htmlspecialchars($data['ndp']);
    $email = htmlspecialchars($data['email']);
    $kursus = htmlspecialchars($data['kursus']);
    $gambar = htmlspecialchars($data['gambar']);

    // Query INSERT data ke dalam database
    $query = "INSERT INTO pelajar
     VALUES
     ('',
     '$fname',
     '$lname',
     '$nokp',
     '$ndp',
     '$email',
     '$kursus',
     '$gambar'
     )";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}
