<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nama Peserta</title>
</head>
<body>
   <a href="tambah.php"><input type="button" value="tambah"></a>
   <table border="1">
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>Gender</td>
        <td>Asal Sekolah</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Jurusan</td>
        <td>Kapasitas</td>
        <td>Terisi</td>
        <td>Aksi</td>
    </tr>
    <?php
    include ("koneksi.php");
    $query=mysqli_query($db, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id = tb_jurusan.jurusan_id");
    $no = 1;
    foreach ($query as $row):
    ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['gender']; ?></td>
    <td><?= $row['asalsekolah']; ?></td>
    <td><?= $row['tempatlahir']; ?></td>
    <td><?= $row['tanggallahir']; ?></td>
    <td><?= $row['jurusan']; ?></td>
    <td><?= $row['kapasitas']; ?></td>
    <td><?= $row['terisi']; ?></td>
<td>
<a href="edit.php?jurusan_id=<?php echo $row['jurusan_id']; ?>">EDIT ||</a>
<a href="hapus.php?jurusan_id=<?php echo $row['jurusan_id']; ?>">HAPUS ||</a>
    </td>
    </tr>
    <?php endforeach ?>
</body>
</html>