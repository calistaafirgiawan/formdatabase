<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Tamu</title>
</head>
<body>
    <div class="container">
    <h1>Data Buku Tamu</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id_bt']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['isi']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br><br>
    <button type="button"><a href="index.php">Back to From</a></button>
    </div>
</body>
</html>