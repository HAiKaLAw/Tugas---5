<?php
    include 'koneksi.php';
    $nama = $_GET['nama'];
    $kelas = $_GET['kelas'];
    $jurusan = $_GET['jurusan'];
    $id = $_GET['id'];

    $sql = "UPDATE students nama='$nama',jurusan='$jurusan',kelas='$kelas' where id='$id'";

    $koneksi->query($sql);
    $koneksi->close();



    header("location:index.php");
?>