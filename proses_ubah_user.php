<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama_user=$_POST['nama_user'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$role=$_POST['role'];

$query="UPDATE user SET nama_user='$nama_user',username='$username',role='$role', password='$password' where id='$id'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit user');location.href='tampil_user.php';</script>";
    } else {
    echo "<script>alert('Gagal edit user');location.href='tampil_user.php';</script>";
    }
?>