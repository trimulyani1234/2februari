<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laman Edit</title>
</head>
<body>
<?php
    include("koneksi.php");

    $id = $_GET['jurusan_id'];
    $query = mysqli_query($db, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan
    ON tb_peserta.jurusan_id=tb_jurusan.jurusan_id WHERE tb_peserta.jurusan_id='$id'");
    
    while ($row = mysqli_fetch_array($query)){ 
    ?>
    <table border="0">
    <form action="proses_edit.php" method="POST">
    <tr><h2>EDIT DATA</h2></tr>
        <input type="hidden" name="id" value="<?php echo $tb_jurusan['id']?>" />
        
        <tr>
                <td><label for="nama" value="<?php $row['nama']; ?>">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td><label for="gender" value="<?php $row['gender']; ?>">Jenis Kelamin</label></td>
                <td><input type="text" name="gender" value="<?php $row['gender']; ?>"></td>
            </tr>

            <tr>
                <td><label for="asalsekolah" value="<?php $row['asalsekolah']; ?>">Asal Sekolah</label></td>
                <td><input type="text" name="asalsekolah" value="<?php $row['asalsekolah']; ?>"></td>
            </tr>

            <tr>
                <td><label for="tempatlahir" value="<?php $row['tempatlahir']; ?>">Tempat Lahir</label></td>
                <td><input type="text" name="tempatlahir" value="<?php $row['tempatlahir']; ?>"></td>
            </tr>

            <tr>
                <td><label for="tanggallahir" value="<?php $row['tanggallahir']; ?>">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggallahir" value="<?php $row['tanggallahir']; ?>"b></td>
            </tr>
            <tr>
                <td><label for="jurusan" value="<?php $row['jurusan']; ?>">Jurusan</label></td>
                <td><input type="text" name="jurusan" value="<?php $row['jurusan']; ?>"b></td>
            </tr>
            <tr>
                <td><label for="kapasitas" value="<?php $row['kapasitas']; ?>">Kapasitas</label></td>
                <td><input type="text" name="kapasitas" value="<?php $row['kapasitas']; ?>"b></td>
            </tr>
            <tr>
                <td><label for="terisi" value="<?php $row['terisi']; ?>">terisi</label></td>
                <td><input type="text" name="terisi" value="<?php $row['terisi']; ?>"b></td>
            </tr>

            <button type="submit" value="edit" name="edit">Simpan</button>
            </table>
    <?php
    }
    ?>
</form>
</body>
</html>