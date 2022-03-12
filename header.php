<?php
session_start();
if($_SESSION['status_login']!=true){
header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
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
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="width: 230px;">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <!-- <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div> -->
                        <h2>Lucky Laundry</h2>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="home.php" class='sidebar-link'>
                                <i class="bi bi-house-fill"></i>
                                <span>Home</span>
                            </a>
                        <?php
            if($_SESSION['role']=='admin'){
                ?>
                <li class="sidebar-item  ">
                            <a href="tampil_member.php" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Pelanggan</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="tampil_paket.php" class='sidebar-link'>
                                <i class="bi bi-cart4"></i>
                                <span>Paket</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="tampil-transaksi.php" class='sidebar-link'>
                                <i class="bi bi-wallet2"></i>
                                <span>Transaksi</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="laporan.php" class='sidebar-link'>
                                <i class="bi bi-card-text"></i>
                                <span>Laporan</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="tampil_outlet.php" class='sidebar-link'>
                                <i class="bi bi-shop"></i>
                                <span>Outlet</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="tampil_user.php" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>User</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                </li>
                <?php
                }
                ?>
                <?php
            if($_SESSION['role']=='kasir'){
                ?>
                <li class="sidebar-item ">
                            <a href="tampil_member.php" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Pelanggan</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="tampil-transaksi.php" class='sidebar-link'>
                                <i class="bi bi-wallet2"></i>
                                <span>Transaksi</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="laporan.php" class='sidebar-link'>
                                <i class="bi bi-card-text"></i>
                                <span>Laporan</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                </li>
                <?php
                }
                ?>
                <?php
            if($_SESSION['role']=='owner'){
                ?>
                <li class="sidebar-item ">
                            <a href="laporan.php" class='sidebar-link'>
                                <i class="bi bi-card-text"></i>
                                <span>Laporan</span>
                            </a>
                </li>
                <li class="sidebar-item ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                </li>
                <?php
                }
                ?>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

</body>
</html>
