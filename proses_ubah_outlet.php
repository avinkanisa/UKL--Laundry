<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama_outlet=$_POST['nama_outlet'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];

$query="UPDATE outlet SET nama_outlet='$nama_outlet',alamat='$alamat',tlp='$tlp' where id='$id'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit outlet');location.href='tampil_outlet.php';</script>";
    } else {
    echo "<script>alert('Gagal edit outlet');location.href='tampil_outlet.php';</script>";
    }
?>