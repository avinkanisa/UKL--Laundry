<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet</title>

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
		<form action="tambah_outlet.php" method="post">
		 <h3>Tampil Outlet</h3><br><br>
		 <a href="tambah_outlet.php?" class="btn btn-primary">Tambah Outlet</a>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA</th><th>ALAMAT</th>
         <th>NO.TELP</th><th>AKSI</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "koneksi.php";
		$qry_outlet=mysqli_query($conn,"select * from outlet");
		 $no=0;
		 while($data_outlet=mysqli_fetch_array($qry_outlet)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td>
        <td><?=$data_outlet['nama_outlet']?></td>
		<td><?=$data_outlet['alamat']?></td>
        <td><?=$data_outlet['tlp']?></td>
		
        <td><a href="ubah_outlet.php?id=<?=$data_outlet['id']?>" class="btn btn-success">Ubah</a> 
        <a href="hapus_outlet.php?id=<?=$data_outlet['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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

    <script src="assets/js/mazer.js"></script><input type="submit" name="simpan" value="Registrasi" class="btn btn-primary">
	</body>
</html>