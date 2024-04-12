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
    $sql_proses = mysqli_prepare($koneksi, "SELECT * FROM pengaduan WHERE status='proses' AND nik = ?");
    // Periksa apakah query berhasil dibuat
    if ($sql_proses) {
        // Binding parameter ke prepared statement
        mysqli_stmt_bind_param($sql_proses, 's', $nik);
        // Eksekusi prepared statement
        mysqli_stmt_execute($sql_proses);
        // Ambil hasil query
        $result_proses = mysqli_stmt_get_result($sql_proses);
        // Hitung jumlah baris hasil query
        $cek_proses = mysqli_num_rows($result_proses);
        // Bebaskan hasil query dan tutup prepared statement
        mysqli_stmt_close($sql_proses);
    }

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

    <!-- Tampilkan informasi pengaduan berdasarkan status -->
    <div class="row">
        <div class="col-md-4">
            <?php if ($cek_status_0) : ?>
            <!-- Tampilkan pengaduan dengan status '0' -->
            <br>
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-exclamation-circle fa-2x text-danger"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Laporan pengaduan (Belum diproses):
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek_status_0; ?> Laporan
                                yang kamu adukan</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php if ($cek_proses) : ?>
            <!-- Tampilkan pengaduan dengan status 'proses' -->
            <br>
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-warning"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Laporan pengaduan (Sedang diproses):
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek_proses; ?> Laporan
                                yang kamu adukan sedang diproses</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <!-- Tampilkan pemberitahuan jika tidak ada data yang sedang diproses -->
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pemberitahuan:
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Tidak ada data yang sedang diproses
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php if ($cek_selesai) : ?>
            <!-- Tampilkan pengaduan dengan status 'selesai' -->
            <br>
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-success"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Laporan pengaduan (Telah diselesaikan):
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