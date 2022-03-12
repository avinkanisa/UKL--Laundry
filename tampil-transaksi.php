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
    if ($_SESSION['role'] == "owner") {
		echo "<script>alert('Bukan Admin');location.href='login.php';</script>";}
    ?>
<div class="card card-body">
  <h3>Transaksi | <a href="form-transaksi.php" class="btn btn-primary">Tambah Transaksi</a></h3> 
  
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
                <th>AKSI</th>

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

                    <td><a href="hapus_transaksi.php?id=<?=$data_transaksi['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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
                    <td><?=$data_detail_transaksi['jenis']?></td>
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
    
    <?php
include("footer.php");
 ?>
 </main>
 <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script><input type="submit" name="simpan" value="Tambah Paket Laundry" class="btn btn-primary">
	</body>
</html>
 