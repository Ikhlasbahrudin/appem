<?php

if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'verifikasi_pengaduan':
            include 'verifikasi_pengaduan.php';
            break;
        case 'detail_pengaduan':
            include 'detail_pengaduan.php';
            break;
    }
} else {
?>

<!-- Kode HTML tetap berada di luar blok PHP -->
<?php if (isset($_GET['url'])) : ?>
<!-- Include file berdasarkan URL -->
<?php include $_GET['url'] . '.php'; ?>
<?php else : ?>
<!-- Tampilkan data pengaduan jika tidak ada parameter URL -->
<div class="container">
    <h4>Selamat Datang Di Aplikasi Pengaduan Masyarakat</h4>
    <p>Desa Sukamaju</p>
    <hr>
    <p>Anda login sebagai : <strong><?php echo $_SESSION['nama']; ?></strong></p>
    <?php endif; ?>

    <?php
    require '../koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='0'");
    $cek = mysqli_num_rows($sql);

    if ($cek) {
?>
    <br>
    <br>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Laporan pengaduan :
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari
                            masyarakat</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
}

?>