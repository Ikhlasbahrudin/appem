<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lihat Tanggapan</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            Lihat Tanggapan
        </div>
        <div class="form-group cols-sm-6">
            <a href="lihat_pengaduan.php" class="btn btn-primary btn-icon-split custom-button">
                <span class="icon">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
        <div class="card-body">
            <?php
            require 'koneksi.php';

            // Periksa apakah parameter id tersedia di URL
            if (isset($_GET['id'])) {
                $id_pengaduan = $_GET['id'];

                // Gunakan parameterized query untuk menghindari SQL injection
                $query = "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan=? and tanggapan.id_pengaduan=pengaduan.id_pengaduan";

                $stmt = mysqli_prepare($koneksi, $query);
                mysqli_stmt_bind_param($stmt, "i", $id_pengaduan);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                $cek = mysqli_num_rows($result);

                if ($cek < 1) {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo '<i class="fas fa-clock"></i> Mohon bersabar, pengaduan Anda sedang diproses.';
                    echo '</div>';
                } else {
                    $data = mysqli_fetch_array($result);
                    ?>
                    <div class="form-container">
                        <div class="left-column">
                            <div class="form-group Cols-sm-6">
                                <label>Tanggal Tanggapan</label>
                                <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group Cols-sm-6">
                                <label>Laporan Anda</label>
                                <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
                            </div>
                            <div class="form-group Cols-sm-6">
                                <label>Tanggapan</label>
                                <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['tanggapan']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; ikhlas bahrudin</span>
                </div>
            </div>
        </footer>
    </body>

</html>
