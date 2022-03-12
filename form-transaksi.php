<?php 
   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>

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
    if($_SESSION['role'] =='owner'){
        echo "<script>alert('Role tidak benar');location.href='home.php';</script>";
    }
	?>
    <main class="form-signin">
        <h1 class="h3 fw-normal text-center">Transaksi</h1>
        <form action="form-transaksi.php" method="get">
            <div class="relative mt-5">
            <label for="total_pckg">Jumlah Pemesanan</label>
            <div class="d-flex">
                <input type="number" name="total_pckg" id="total_pckg" class="form-control" value="<?=isset($_GET['total_pckg']) ? $_GET['total_pckg'] : 1  ?>" min="1" />
                <button type="submit" class="w-24 m-1 btn btn-lg btn-primary"><i class="bi bi-arrow-clockwise"></i></button>
            </div>
            </div>
        </form>
        <form action="proses-form-transaksi.php" method="post">
            <div>
                
                <label for="member" class="form-label">Pelanggan</label>
                <select name="member" id="member" class="form-select">
                    <option disabled>Pilih Nama Pelanggan</option>
                    <?php
                        include "koneksi.php";
                        $qry_member=mysqli_query($conn,"select * from member");
                        while($data_member=mysqli_fetch_array($qry_member)){
                            echo '<option value="'.$data_member['id'].'">'.$data_member['nama_member'].'</option>';    
                        }
                        ?>
        </select>
                </select>
            </div>
            <div>
                <label for="tgl" class="form-label">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="tgl" name="tgl">
            </div>
            <div>
                <label for="batas_waktu" class="form-label">Tanggal Selesai</label>
                <input type="date" class="form-control" id="batas_waktu" name="batas_waktu">
            </div>
            <div>
                <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar">
            </div>
            <div>
                <label for="status" class="form-label">Status Pengerjaan</label>
                <select name="status" id="status" class="form-select">
                    <option disabled selected>Pilih Status Pengerjaan</option>
                    <option value="baru">Baru</option>
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                    <option value="diambil">Diambil</option>
                </select>
            </div>
            <div>
                <label for="dibayar" class="form-label">Status Pembayaran</label>
                <select name="dibayar" id="dibayar" class="form-select">
                    <option disabled selected>Pilih Status Pembayaran</option>
                    <option value="dibayar">Dibayar</option>
                    <option value="belum_dibayar">Belum Dibayar</option>
                </select>
            </div>
            <?php for($index = 0; $index < (isset($_GET['total_pckg']) ? $_GET['total_pckg'] : 1); $index++) : ?>
            <div>
                <label for="jenis" class="form-label">Jenis Paket</label>
                <select name="id_paket[]" id="id_paket[]" class="form-select">
                    <option disabled selected>Jenis Kategori Laundry</option>
                    <?php
                        include "koneksi.php";
                        $qry_packg=mysqli_query($conn,"select * from paket");
                        while($data_packg=mysqli_fetch_array($qry_packg)){
                            echo '<option value="'.$data_packg['id'].'">'.$data_packg['jenis'].'</option>';    
                        }
                    ?>
                </select>
            </div>
            <label for="qty" class="form-label">Kuantitas</label>
            <div class="form-floating">
                    <div class="d-flex">
                        <input type="number" class="form-control" id="qty[]" name="qty[]">
                        <span class="align-items-center justify-content-center d-flex my-auto m-1">Kg</span>
                    </div>
            </div>
            <?php endfor; ?>
          
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Tambah</button>
        </form>
                    </div>
                    </main>
    </main>
    
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/mazer.js"></script></body></body>
</html>