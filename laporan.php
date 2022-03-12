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
    ?>

<html>
	<head>
		 <link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
		crossorigin="anonymous">
		 <title></title>
	</head>
	<body>
	<div class="card card-body">
	<h4>LAPORAN </h4>
    <form action="tambah_member.php" method="post">
		 <h3>Tampil Pelanggan</h3>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA</th><th>ALAMAT</th>
		 <th>JENIS KELAMIN</th><th>NO.TELP</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "koneksi.php";
		$qry_member=mysqli_query($conn,"select * from member");
		 $no=0;
		 while($data_member=mysqli_fetch_array($qry_member)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td>
        <td><?=$data_member['nama_member']?></td>
		<td><?=$data_member['alamat']?></td>
        <td><?=$data_member['jenis_kelamin']?></td>
        <td><?=$data_member['tlp']?></td>
		 </tr>
  <?php
		 }
		 ?>
		 </tbody>
		 </table>



        <br>
		<form action="tambah_paket.php" method="post">
		 <h3>Tampil Paket Cucian</h3><br><br>
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

        
		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>




        <br>
		<h5> Data Transaksi </h5> 
		<table class="table table-hover table-striped bg-white">
    <thead>
    <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                
                <th>TGL</th>
                <th>BATAS WAKTU</th>
                <th>TGL BAYAR</th>
                
                <th>STATUS</th>
                <th>DIBAYAR</th>
                <th>JENIS</th>
                <th>QTY</th>

                <th>JUMLAH</th>

            </tr>

        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            
            $qry_transaksi=mysqli_query($conn,"select t.id_transaksi as id, m.nama_member as nama_member, t.tgl as tgl, batas_waktu, tgl_bayar, status, dibayar from transaksi t, member m where t.id_member = m.id");
            echo mysqli_error($conn);
            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi=mysqli_query($conn,"select *, detail_transaksi.qty * paket.harga as total from detail_transaksi, paket where id_transaksi = ".$data_transaksi['id']." AND paket.id = detail_transaksi.id_paket");
                echo mysqli_error($conn);

                $jumlah_paket = mysqli_num_rows($qry_detail_transaksi);

                $no++;

                $i = 0;
                while($data_detail_transaksi = mysqli_fetch_array($qry_detail_transaksi)) {
                    $i++;
                    if ($i == 1) {
                ?>
                <tr>
                    
                    <td><?=$no?></td>
            
                    <td><?=$data_transaksi['nama_member']?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_detail_transaksi['jenis']?></td>
                    <td><?=$data_detail_transaksi['qty']?></td>
                    <td><?=$data_detail_transaksi['total']?></td>

                </tr>
   <?php
                    } else {
?>
                                    <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?=$data_detail_transaksi['jenis_paket']?></td>
                    <td><?=$data_detail_transaksi['qty']?></td>
                    <td><?=$data_detail_transaksi['total']?></td>

                    <td>
                    </td>
                </tr>

<?php
    }
    }}
?>

        </tbody>
    </table>







        <br>
        <form action="tambah_outlet.php" method="post">
		 <h3>Tampil Outlet</h3><br><br>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA</th><th>ALAMAT</th>
         <th>NO.TELP</th>
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

		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>





         <br>
		 <form action="tambah_user.php" method="post">
		 <h3>Tampil User</h3><br><br>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA</th><th>USERNAME</th>
		 <th>ROLE</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "koneksi.php";
		$qry_user=mysqli_query($conn,"select * from user");
		 $no=0;
		 while($data_user=mysqli_fetch_array($qry_user)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td>
        <td><?=$data_user['nama_user']?></td>
		<td><?=$data_user['username']?></td>
        <td><?=$data_user['role']?></td>
  </tr>
  <?php
		 }
		 ?>
		 </tbody>
		 </table>
		 <button class="btn btn-primary" onclick="const printBtn = document.getElementById('print-btn'); printBtn.hidden = true; window.print();" id="print-btn">Print</button>



		 <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun	dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	</body>
</html>
<?php
include "footer.php";
?>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

	</body>
</html>