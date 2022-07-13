<?php
include'koneksi.php';

    $id   = $_GET['id'];
    $sql="DELETE from students where id='$id'";
    $koneksi->query($sql);
    $koneksi->close();
    header("location:index.php");
?>