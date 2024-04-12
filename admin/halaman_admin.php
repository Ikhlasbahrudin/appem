<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        // Kasus-kasus lainnya...
        case 'preview_tanggapan':
            include 'preview_tanggapan.php';
            break;
        case 'preview_pengaduan':
            include 'preview_pengaduan.php';
            break;
        case 'lihat_laporan':
            include 'lihat_laporan.php';
            break;
        case 'delete_laporan':
            include 'delete_laporan.php';
            break;
        case 'lihat_tanggapan':
            include 'lihat_tanggapan.php';
            break;
        case 'delete_pengaduan':
            include 'delete_pengaduan.php';
            break;
    }
} else {
?>
<table>
    <tr>
        <td>
            <h4>Selamat Datang Di Aplikasi Pengaduan Masyarakat</h4>
            <p>Desa Sukamaju</p>
            <hr>
            <p>Anda login sebagai : <strong><?php echo $_SESSION['nama']; ?></strong></p>
        </td>
    </tr>
</table>
<?php
    require '../koneksi.php';

    // Mengambil jumlah laporan yang statusnya 'proses'
    $sql_pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses'");
    $jumlah_pengaduan = mysqli_num_rows($sql_pengaduan);

    // Mengambil jumlah tanggapan
    $sql_tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan");
    $jumlah_tanggapan = mysqli_num_rows($sql_tanggapan);

    // Mengambil jumlah data masyarakat
    $sql_masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat");
    $jumlah_masyarakat = mysqli_num_rows($sql_masyarakat);

    // Mengambil jumlah data petugas
    $sql_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
    $jumlah_petugas = mysqli_num_rows($sql_petugas);

    if ($jumlah_pengaduan > 0 || $jumlah_tanggapan > 0 || $jumlah_masyarakat > 0 || $jumlah_petugas > 0) {
?>
<br>
<br>
<div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Laporan Pengaduan :
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $jumlah_pengaduan; ?> Laporan
                            yang belum ditanggapi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $jumlah_pengaduan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Tanggapan :
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $jumlah_tanggapan; ?>
                            Tanggapan</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-reply fa-4x text-gray-300"></i>
                        <span class="badge badge-success badge-counter"><?php echo $jumlah_tanggapan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Masyarakat :
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $jumlah_masyarakat; ?> Data
                            Masyarakat</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-4x text-gray-300"></i>
                        <span class="badge badge-info badge-counter"><?php echo $jumlah_masyarakat; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Petugas :
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $jumlah_petugas; ?> Data
                            Petugas</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-4x text-gray-300"></i>
                        <span class="badge badge-warning badge-counter"><?php echo $jumlah_petugas; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    } else {
        echo "Belum ada pengaduan, tanggapan, data masyarakat, atau data petugas.";
    }
}
?>