<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Pastikan untuk memulai sesi jika belum dimulai
}

if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan':
            include 'tulis_pengaduan.php';
            break;

        case 'lihat_pengaduan':
            include 'lihat_pengaduan.php';
            break;

        case 'detail_pengaduan':
            include 'detail_pengaduan.php';
            break;

        case 'lihat_tanggapan':
            include 'lihat_tanggapan.php';
            break;
    }
} else {
    require 'koneksi.php'; // Perbaikan path require di sini

    // Ambil informasi dari session
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];

    // Query untuk mengambil data pengaduan sesuai dengan session nama dan status '0'
    $sql_status_0 = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='0' AND nik='$nik'");
    $cek_status_0 = mysqli_num_rows($sql_status_0);

    // Query untuk mengambil data pengaduan sesuai dengan session nama dan status 'proses'
    $sql_proses = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses' AND nik='$nik'");
    $cek_proses = mysqli_num_rows($sql_proses);

    // Query untuk mengambil data pengaduan sesuai dengan session nama dan status 'selesai'
    $sql_selesai = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='selesai' AND nik='$nik'");
    $cek_selesai = mysqli_num_rows($sql_selesai);
}
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
</div>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-4">
            <!-- Tampilkan pengaduan dengan status '0' -->
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-info-circle fa-2x text-info"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Laporan pengaduan (Status '0'):
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek_status_0; ?>
                                Pengaduan Kamu</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <?php if ($cek_proses) : ?>
            <!-- Tampilkan pengaduan dengan status 'proses' -->
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-warning"></i>
                            <!-- Mengganti ikon ke jam pasir -->
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Laporan pengaduan (Status 'Proses'):
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek_proses; ?> Laporan
                                dengan status 'Proses'</div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php if ($cek_selesai) : ?>
            <!-- Tampilkan pengaduan dengan status 'selesai' -->
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-success"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Laporan pengaduan (setatus: 'selesai')
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek_selesai; ?> Laporan
                                yang kamu adukan telah diselesaikan</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php endif; ?>