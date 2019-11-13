<?php
include 'koneksi.php';
$id = $_GET['id'];
$aktifAkun = mysqli_query($conn, "UPDATE akun set status ='1' where id_akun='$id'");

header("location:persetujuan.php");

