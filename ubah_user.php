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
$qry_get_user=mysqli_query($conn,"select * from user where id = '".$_GET['id']."'");
$data_user=mysqli_fetch_array($qry_get_user);
?>
<h3>Tambah User</h3>
<form action="proses_ubah_user.php" method="post">
<input type="hidden" name="id" value="<?=$data_user['id']?>">
Nama :
<input type="text" name="nama_user" value="<?=$data_user['nama_user']?>" class="form-control">
Username :
<input type="text" name="username" value="<?=$data_user['username']?>" class="form-control">
Password :
<input type="password" name="password" value="<?=$data_user['password']?>" class="form-control">
Role :
<select name="role" class="form-control">
<option></option>
<option value="admin">Admin</option>
<option value="kasir">Kasir</option>
<option value="owner">Owner</option>
</select>

<input type="submit" name="simpan" value="Ubah User"class="btn btn-primary">

</form>

        </div>
    </main>


<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script></body>
</html>