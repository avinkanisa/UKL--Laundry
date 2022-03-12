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
        <?php
include "koneksi.php";
$qry_get_paket=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
$data_paket=mysqli_fetch_array($qry_get_paket);
?>
<h3>Tambah Paket Cucian</h3>
<form action="proses_ubah_paket.php" method="post">
<input type="hidden" name="id" value="<?=$data_paket['id']?>">
Paket :
<select name="jenis" class="form-control">
<option></option>
<option value="kiloan">Kiloan</option>
<option value="selimut">Selimut</option>
<option value="bed_cover">Bed Cover</option>
<option value="kaos">Kaos</option>
</select>
Harga :
<input type="text" name="harga" value="<?=$data_paket['harga']?>" class="form-control">

<input type="submit" name="simpan" value="Ubah Paket"class="btn btn-primary">

</form>
        </div>
    </main>

<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script></body>
</html>