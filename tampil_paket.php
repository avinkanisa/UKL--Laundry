<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>
	<body>
	<main>
        <div id="main">
		<?php
    include "header.php";
	if ($_SESSION['role'] != "admin") {
		echo "<script>alert('Bukan Admin');location.href='login.php';</script>";}
    ?>
		<form action="tambah_paket.php" method="post">
		 <h3>Tampil Paket Cucian</h3><br><br>
		 <a href="tambah_paket.php?" class="btn btn-primary">Tambah Paket</a> 
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>JENIS</th><th>HARGA</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "koneksi.php";
		$qry_paket=mysqli_query($conn,"select * from paket");
		 $no=0;
		 while($data_paket=mysqli_fetch_array($qry_paket)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td>
        <td><?=$data_paket['jenis']?></td>
		<td><?=$data_paket['harga']?></td>
		
        <td><a href="ubah_paket.php?id=<?=$data_paket['id']?>" class="btn btn-success">Ubah</a> 
        <a href="hapus_paket.php?id=<?=$data_paket['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
  </tr>
  <?php
		 }
		 ?>
		 </tbody>
		 </table>
		</form>

        </div>
    </main>
		
		 <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script><input type="submit" name="simpan" value="Tambah Paket Laundry" class="btn btn-primary">
	</body>
</html>