<?php
include("koneksi.php");

isset($_POST['edit']);
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $asalsekolah = $_POST['asalsekolah'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jurusan = $_POST['jurusan']; 
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "UPDATE tb_jurusan set jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' where jurusan_id='$id'";
    $query = mysqli_query($db, $sql);

    $sql = "UPDATE tb_peserta set nama='$nama', gender='$gender',asalsekolah='$asalsekolah', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir' where id='$id'";
    $query = mysqli_query($db, $sql);

    
if($query){
    header('location:tampil.php?status=sukses');
} else {
    header('location: tampil.php?status=gagal');
}
?>