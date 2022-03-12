<?php
if($_GET['id']){
include "koneksi.php";

$qry_hapus=mysqli_query($conn,"delete from detail_transaksi  where id_transaksi='".$_GET['id']."'");
if($qry_hapus){
    $qry_hapus=mysqli_query($conn,"delete from transaksi  where id_transaksi='".$_GET['id']."'");
    if($qry_hapus){ 
echo "<script>alert('Sukses hapus transaksi');location.href='tampil-transaksi.php';</script>"; }
} else {
echo "<script>alert('Gagal hapus transaksi');location.href='tampil-transaksi.php';</script>";
}
}
?>