<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>

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
        <h3>Tambah Pelanggan</h3>
  <form action="proses_tambah_user.php" method="post">

    Nama :

    <input type="text" name="nama_user" value="" class="form-control">

    Username :

    <input type="text" name="username" value="" class="form-control">

    Password :

    <input type="password" name="password" value="" class="form-control">

    Role :
    <select name="role" class="form-control">
  <option></option>
  <option value="admin">Admin</option>
  <option value="kasir">Kasir</option>
  <option value="owner">Owner</option>
  </select>
  <input type="submit" name="simpan" value="Tambah user" class="btn btn-primary">
  </form>
        </div>
    </main>
  

  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script></body>
</html>