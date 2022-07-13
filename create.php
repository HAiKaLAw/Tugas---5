<?php
    include 'koneksi.php';
    $nama = $_GET['nama'];
    $kelas = $_GET['kelas'];
    $jurusan = $_GET['jurusan'];

    $sql = "INSERT INTO students (nama,jurusan,kelas) VALUES ('$nama','$kelas','$jurusan')";

    $koneksi->query($sql);
    $koneksi->close();



    header("location:index.php");
?>