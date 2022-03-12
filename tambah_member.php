<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>

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
        <h3>Pelanggan</h3>
  <form action="proses_tambah_member.php" method="post">

    Nama :

    <input type="text" name="nama_member" value="" class="form-control">

    Alamat :

    <input type="text" name="alamat" value="" class="form-control">

    Jenis Kelamin :
    <select name="jenis_kelamin" class="form-control">
    <option></option>
    <option value="laki-laki">Laki-laki</option>
    <option value="perempuan">Perempuan</option>
    </select>

    No. Telp :

    <input type="text" name="tlp" value="" class="form-control">

  <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
  </form>

        </div>
    </main>
  
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script></body>
</html>