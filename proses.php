<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$sql = "INSERT INTO db_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

if (mysqli_query($conn, $sql)) {
    echo "kehaidranmu berhasil disimpan. see you on saturday! <a href='index.php'>Kembali ke Form</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>