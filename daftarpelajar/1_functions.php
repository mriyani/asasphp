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

    // Check for query success
    if (!$result) {
        die("Query failed: " . mysqli_error($condb));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // Simpan assoc data ke dlm $row
    }

    // Free result set
    mysqli_free_result($result);

    return $rows;
}

// Fungsi daftar pelajar
function daftar($condb, $daftar)
{

    // Simpan setiap data dari post $data ke dalam variables
    $fname = htmlspecialchars($daftar['fname']);
    $lname = htmlspecialchars($daftar['lname']);
    $nokp = htmlspecialchars($daftar['nokp']);
    $ndp = htmlspecialchars($daftar['ndp']);
    $email = htmlspecialchars($daftar['email']);
    $kursus = htmlspecialchars($daftar['kursus']);
    $gambar = htmlspecialchars($daftar['gambar']);

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

// Fungsi delete pelajar
function padampelajar($condb, $id)
{
    mysqli_query($condb, "DELETE FROM pelajar WHERE id = $id");

    return mysqli_affected_rows($condb);
}

// Fungsi edit pelajar
function edit($condb, $edit)
{

    $id = $edit['id'];
    $fname = htmlspecialchars($edit['fname']);
    $lname = htmlspecialchars($edit['lname']);
    $nokp = htmlspecialchars($edit['nokp']);
    $ndp = htmlspecialchars($edit['ndp']);
    $email = htmlspecialchars($edit['email']);
    $kursus = htmlspecialchars($edit['kursus']);
    $gambar = htmlspecialchars($edit['gambar']);

    // Query UPDATE data ke dalam database
    $query = "UPDATE pelajar SET
     fname = '$fname',
     lname = '$lname',
     nokp = '$nokp',
     ndp = '$ndp',
     email = '$email',
     kursus = '$kursus',
     gambar = '$gambar'

     WHERE id = $id
     ";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function cari($condb, $keyword)
{
    $query = "SELECT * FROM pelajar WHERE fname LIKE '%$keyword%' OR
    ndp LIKE '%$keyword%' OR
    lname LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    kursus LIKE '%$keyword%'
    ";

    // Recall ambildata function to execute the query and retrieve results
    $rows = ambildata($condb, $query);

    // Process the $rows data
    return $rows;
}
