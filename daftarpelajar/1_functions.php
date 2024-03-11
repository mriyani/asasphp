<?php

// Sambungan ke database
$condb = mysqli_connect('localhost', 'root', '', 'asasphp');

// Check DB connection
if (!$condb) {
    die("Connection failed: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
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

    // Upload gambar
    $gambar = upload($condb, $nokp); //value is $newFileName;
    if (!$gambar) {
        return false;
    }

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


// Fungsi upload gambar
function upload($condb, $nokp)
{
    $namaFile = $_FILES['gambar']['name'];
    $saizFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek jika tiada gambar diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // Cek jika hanya format gambar diupload
    $extGambarValid = ['jpg', 'jpeg', 'png'];

    // $extGambar = explode('.', $namaFile);
    $extGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $extGambarLower = strtolower($extGambar);

    if (!in_array($extGambarLower, $extGambarValid)) {
        echo "<script>
                alert('Anda upload format gambar yang tidak dibenarkan!\\n (Hanya upload format gambar .jpg, atau .jpeg, atau .png)');
              </script>";
        return false;
    }

    // Cek jika saiz gambar < max (1048576 bytes ~~ 1MB)
    $maxSize = 1048576;
    if ($saizFile > $maxSize) {
        echo "<script>
                alert('Saiz gambar melebihi 1MB!');
              </script>";
        return false;
    }

    // Rename and save gambar to the directory img/ with $nokp
    // Rename the file with $nokp.$extGambar
    $newFileName = $nokp . '.' . $extGambarLower;

    // Set img/ directory variable
    $imgDir = '../img/';

    // Check if the file with the same name already exists
    $destination = $imgDir . $newFileName;
    if (file_exists($destination)) {
        // Delete the existing file
        unlink($destination);

        // Empty gambar value in database
        emptyGambar($condb, $nokp);
    }

    // Simpan gambar $tmpName ke directory img/ with the new file name
    // $destination = $imgDir . $newFileName;

    if (move_uploaded_file($tmpName, $destination)) {
        return $newFileName;
    } else {
        echo "<script>alert('Gagal menyimpan gambar!');</script>";
        return false;
    }
}


// Fungsi delete nama gambar di dalam table pelajar sebelum simpan gambar baharu
function emptyGambar($condb, $nokp)
{
    // Query to update the gambar field to NULL or an empty value
    $query = "UPDATE pelajar SET gambar = NULL WHERE nokp = '$nokp'";

    // Run query
    mysqli_query($condb, $query);
}

// Fungsi delete pelajar
function padampelajar($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT gambar FROM pelajar WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    $imgDir = '../img/';
    $imgFile = $imgDir . $imgName;
    unlink($imgFile);

    // Delete the record from the database
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
    $gambarLama = htmlspecialchars($edit['gambarLama']);

    // Cek jika ada gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        // Run upload function and store the image name in $gambar
        $gambar = upload($condb, $nokp);
    }

    // Query UPDATE data ke dalam database
    $query = "UPDATE pelajar SET
     fname = '$fname',
     lname = '$lname',
     nokp = '$nokp',
     ndp = '$ndp',
     email = '$email',
     kursus = '$kursus',
     gambar = '$gambar'

     WHERE id = $id";

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

function register($condb, $data)
{
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($condb, $data['password']);
    $repeatPassword = mysqli_real_escape_string($condb, $data['password2']);

    // Cek existing user
    $result = mysqli_query($condb, "SELECT username FROM login WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {

        echo "<script>
                alert('Username sudah digunakan!');
              </script>";
        return false;
    }

    // Cek pengesahan password
    if ($password != $repeatPassword) {
        echo "<script>
                alert('Password tidak sama!') 
            </script>";
        return false;
    }

    // Encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user ke dalam database
    $query = mysqli_query($condb, "INSERT INTO login VALUES('', '$username', '$password')");

    return mysqli_affected_rows($condb);
}
