<?php

include 'koneksi.php';    

$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat = $_POST['tempat'];
$hobi = $_POST['hobi'];

$query = "INSERT INTO anak_paud (nama, tanggal_lahir, tempat, hobi)
            VALUES ('$nama', '$tanggal_lahir', '$tempat', '$hobi')";

if ($conn->query($query) === TRUE) {
    header("Location: index.php");
    exit();
} 

$conn->close();
?>
