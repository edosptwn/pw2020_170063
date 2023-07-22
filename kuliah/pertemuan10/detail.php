<?php
require 'functions.php';

// ambil id url
$id = $_GET['id'];
// query mhs berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li><img src="img/<?= $mahasiswa['gambar']; ?>" width="50"></li>
    <li>nobp : <?= $mahasiswa['nobp']; ?></li>
    <li>nama : <?= $mahasiswa['nama']; ?></li>
    <li>email : <?= $mahasiswa['email']; ?>@gmail.com</li>
    <li>jurusan : <?= $mahasiswa['jurusan']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>