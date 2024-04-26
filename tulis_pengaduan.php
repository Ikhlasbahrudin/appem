<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tulis Pengaduan</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="logo/logo.png" rel="icon">
</head>

<body id="page-top">
    <div class="card shadow">
        <div class="card-header">
            Tulis Pengaduan
        </div>
        <div class="card-body">
            <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data"
                id="pengaduanForm">
                <div class="form-group Cols-sm-6">
                    <label>Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y');?>" class="form-control"
                        readonly>
                </div>
                <?php
                // Pastikan sesi sudah dimulai
                session_start();

                // Periksa apakah session 'nik' sudah diatur
                $nik = isset($_SESSION['nik']) ? $_SESSION['nik'] : '';
                ?>
                <div class="form-group Cols-sm-6">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?php echo $nik; ?>" class="form-control" readonly>
                </div>
                <div class="form-group Cols-sm-6">
                    <label>Tulis Laporan</label>
                    <textarea class="form-control" rows="7" name="isi_laporan"></textarea>
                </div>
                <div class="form-group Cols-sm-6">
                    <label>Unggah Foto</label>
                    <input type="file" name="foto" class="form-control">
                    <p style="color: blue">*Anda dapat mengunggah file gambar dengan tipe apa saja.</p>
                </div>
                <div class="form-group Cols-sm-6">
                    <label>Long</label>
                    <input type="text" name="long" id="long" class="form-control" readonly>
                </div>
                <div class="form-group Cols-sm-6">
                    <label>Lat</label>
                    <input type="text" name="lat" id="lat" class="form-control" readonly>
                </div>
                <div class="form-group col-sm-6">
                    <button type="button" class="btn btn-primary" onclick="getLocation()">Tambah Lokasi</button>
                </div>
                <div class="form-group col-sm-6">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="reset" value="Kosongkan" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>

    <script>
    // Fungsi untuk mendapatkan lokasi pengguna
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                document.getElementById("long").value = longitude;
                document.getElementById("lat").value = latitude;
            });
        } else {
            alert("Geolocation tidak didukung oleh browser Anda.");
        }
    }
    </script>
</body>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
</body>

</html>