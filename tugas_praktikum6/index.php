<?php

    include 'koneksi.php';

    $qry = "SELECT * FROM tugas_praktikum6";
    $result = $conn->query($qry);

?>


<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Anak PAUD</title>
</head>
<body>
    <h2>Data Anak PAUD</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal lahir</th>
            <th>Tempat</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
     

        <?php while( $row = $result->fetch_assoc() ) :  ?>
        <tr>
            <td> <?= $row['id'] ?>  </td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tanggal_lahir'] ?></td>
            <td><?= $row['tempat'] ?></td>
            <td><?= $row['Hobi'] ?></td>
            <td>
                <a href="edit.php">Edit</a>
                <a href="delete.php">Delete</a>
            </td>
        </tr>
        <?php  endwhile  ?>

    </table>
    <br>
    <h2>Tambah Anak PAUD</h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        Tanggal lahir: <input type="text" name="tanggal_lahir" required><br>
        Tempat: <input type="text" name="tempat" required><br>
        Hobi: <input type="text" name="hobi" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
