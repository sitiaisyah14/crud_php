<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$idbuku = $_GET['idbuku'];

// update data ke database

$sql = "delete from tbbuku 
where idbuku = '$idbuku'";
$buku = mysqli_query($koneksi,$sql);
 
// mengalihkan halaman kembali ke index.php
header("location:../../index.php");
 
?>