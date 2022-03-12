<?php
include 'koneksi.php';

$id=$_POST['id'];
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];

$query="UPDATE paket SET jenis='$jenis',harga='$harga' where id='$id'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit paket');location.href='tampil_paket.php';</script>";
    } else {
    echo "<script>alert('Gagal edit paket');location.href='tampil_paket.php';</script>";
    }
?>