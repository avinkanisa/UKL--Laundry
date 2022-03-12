<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama_member=$_POST['nama_member'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp=$_POST['tlp'];

$query="UPDATE member SET nama_member='$nama_member',alamat='$alamat',jenis_kelamin='$jenis_kelamin',tlp='$tlp' where id='$id'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit Pelanggan');location.href='tampil_member.php';</script>";
    } else {
    echo "<script>alert('Gagal edit Pelanggan');location.href='tampil_member.php';</script>";
    }
?>