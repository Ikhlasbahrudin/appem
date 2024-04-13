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
    $sql_belum_proses = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='0'");
    $cek_belum_proses = mysqli_num_rows($sql_belum_proses);

    $sql_proses = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses'");
    $cek_proses = mysqli_num_rows($sql_proses);

    $sql_selesai = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='selesai'");
    $cek_selesai = mysqli_num_rows($sql_selesai);

    if ($cek_belum_proses || $cek_proses || $cek_selesai) {
?>
    <div class="row">
        <?php if ($cek_belum_proses) : ?>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-exclamation-circle fa-2x text-danger"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Belum Diproses :
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cek_belum_proses; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($cek_proses) : ?>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-warning"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Sedang Diproses :
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cek_proses; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($cek_selesai) : ?>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-success"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Selesai Diproses :
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cek_selesai; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php
    }
}

?>