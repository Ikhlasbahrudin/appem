<?php 
// Memeriksa apakah sesi sudah dimulai sebelumnya
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Memeriksa apakah $_SESSION['nama'] sudah di-set, jika belum, pengguna belum login
if(!isset($_SESSION['nama'])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anda belum login</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            Anda belum login. Silahkan login <a href="../logout.php" class="alert-link">disini</a>.
        </div>
    </div>
</body>

</html>
<?php
    // Menghentikan eksekusi skrip
    die();
}

// Memeriksa apakah pengguna bukan admin
if($_SESSION['level'] != "admin") {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>appem</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../logo/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* Animasi cahaya berkilat */
    @keyframes shine {
        0% {
            box-shadow: 0 0 5px 5px #ffffff;
        }

        100% {
            box-shadow: 0 0 20px 20px #ffffff;
        }
    }


    /* Style untuk tombol Live Chat */
    .live-chat-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        animation: shine 1s infinite alternate;
    }

    body {
        background-image: url('../appem/background/background.jpg');
        /* Ubah dengan jalur gambar Anda */
        background-size: cover;
        /* Atur agar gambar latar belakang menutupi seluruh area body */
        background-position: center;
        /* Atur posisi gambar latar belakang ke tengah */
        background-repeat: no-repeat;
        /* Hindari pengulangan gambar latar belakang */
        height: 100%;
        /* Menetapkan tinggi gambar latar belakang menjadi 100% */
        width: auto;
        /* Menetapkan lebar gambar latar belakang menjadi otomatis */
        background-color: rgba(255, 255, 255, 0.5);
        /* Ubah nilai alpha (0.5) sesuai dengan tingkat transparansi yang Anda inginkan */
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            Anda bukan admin. Halaman ini hanya dapat diakses oleh admin.
        </div>
    </div>
</body>

</html>
<?php
    // Menghentikan eksekusi skrip
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APPEM MASYARAKAT</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Tambahkan link CSS Bootstrap di sini jika diperlukan -->
    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    /* Stye untuk responsif */
    @media(max-width: 767px) {
        .live-chat-button {
            position: relative;
            bottom: auto;
            right: auto;
            margin-top: 10px;
        }
    }
    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="" style="margin-top: 70px;">
                    <!-- Ganti 'logo.png' dengan jalur dan nama file logo Anda -->
                    <img src="../logo/logo.png" alt="Logo" style="width: 100px; height: auto; border-radius: 10px;">
                </div>

            </a>



            <hr>
            <hr>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="verifikasi_pengaduan.php">
                    <i class="fas fa-fw fa-check"></i>
                    <span>Verifikasi Pengaduan</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Data:</h6>
                        <a class="collapse-item" href="lihat_petugas.php">Data Petugas</a>
                        <a class="collapse-item" href="lihat_masyarakat.php">Data Masyarakat</a>
                        <a class="collapse-item" href="lihat_laporan.php">Data Laporan</a>
                        <a class="collapse-item" href="lihat_tanggapan.php">Data Tanggapan</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Laporan:</h6>
                        <a class="collapse-item" href="preview_petugas.php">Laporan Petugas</a>
                        <a class="collapse-item" href="preview_masyarakat.php">Laporan Masyarakat</a>
                        <a class="collapse-item" href="preview_pengaduan.php">Laporan Pengaduan</a>
                        <a class="collapse-item" href="preview_tanggapan.php">Laporan Tanggapan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 d-flex align-items-center">
                                <h1 class="page-title">Aplikasi Pengaduan Masyarakat</h1>
                            </div>
                        </div>
                    </div>
                    <a href="/appem/chart/login.php" target="_blank"
                        class="btn btn-primary rounded-circle live-chat-button"
                        style="position: fixed; bottom: 20px; right: 20px;">
                        <i class="fas fa-envelope"></i> <!-- Gunakan ikon pesan Font Awesome yang sesuai -->
                    </a>






                    <!-- Tombol untuk menampilkan modal identitas -->
                    <a href="#" class="btn btn-link text-primary" onclick="showProfileWidget()"
                        style="position: fixed; top: 20px; right: 20px;">
                        <i class="fas fa-user fa-lg"></i>
                    </a>

                    <!-- Modal identitas -->
                    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog"
                        aria-labelledby="profileModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="profileModalLabel">Profil Pengguna</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Tempat menampilkan identitas -->
                                    <p>Nama Pengguna: <span id="username" class="font-weight-bold"></span></p>
                                    <p>Level: <span id="level" class="font-weight-bold"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown untuk menampilkan daftar pesan -->
                    <div id="messageDropdown" class="dropdown-menu dropdown-menu-right" aria-labelledby="openChat"
                        style="position: fixed; top: 80px; right: 20px; max-width: 300px; display: none;">
                        <!-- List notifikasi pesan masuk akan ditampilkan di sini -->
                        <div class="dropdown-item-text">
                            <!-- Contoh pesan -->
                            <!-- Tombol atau ikon untuk membuka kotak obrolan -->
                            <button id="openChat" class="btn btn-primary rounded-circle live-chat-button"
                                style="position: fixed; top: 20px; right: 70px;">
                                <i class="fas fa-envelope"></i> <!-- Gunakan ikon pesan Font Awesome yang sesuai -->
                            </button>

                            <!-- Tombol untuk menampilkan modal identitas -->
                            <a href="#" class="btn btn-link text-primary" onclick="showProfileWidget()"
                                style="position: fixed; top: 20px; right: 20px;">
                                <i class="fas fa-user fa-lg"></i>
                            </a>

                            <!-- Modal identitas -->
                            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog"
                                aria-labelledby="profileModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="profileModalLabel">Profil Pengguna</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Tempat menampilkan identitas -->
                                            <p>Nama Pengguna: <span id="username" class="font-weight-bold"></span></p>
                                            <p>Level: <span id="level" class="font-weight-bold"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Script untuk menampilkan dan menyembunyikan dropdown, serta mengambil konten halaman lihat_pengaduan.php -->
                            <script>
                            // Fungsi untuk menampilkan dropdown dan memuat konten halaman lihat_pengaduan.php di dalamnya
                            function toggleDropdown() {
                                var dropdown = document.getElementById("messageDropdown");
                                if (dropdown.style.display === "block") {
                                    dropdown.style.display = "none";
                                } else {
                                    // Menggunakan AJAX untuk mengambil konten dari halaman lihat_pengaduan.php
                                    var xhr = new XMLHttpRequest();
                                    xhr.onreadystatechange = function() {
                                        if (xhr.readyState === XMLHttpRequest.DONE) {
                                            if (xhr.status === 200) {
                                                // Menampilkan konten yang diambil di dalam dropdown
                                                dropdown.innerHTML = xhr.responseText;
                                                dropdown.style.display = "block";
                                            } else {
                                                console.error('Terjadi kesalahan: ' + xhr.status);
                                            }
                                        }
                                    };
                                    xhr.open('GET', 'lihat_pengaduan.php', true);
                                    xhr.send();
                                }
                            }

                            // Panggil fungsi toggleDropdown saat tombol diklik
                            document.getElementById("openChat").addEventListener("click", function(event) {
                                toggleDropdown();
                                event.stopPropagation(); // Mencegah penutupan dropdown saat tombol diklik
                            });

                            // Tutup dropdown saat diklik di luar area dropdown
                            window.addEventListener("click", function(event) {
                                var dropdown = document.getElementById("messageDropdown");
                                if (event.target !== dropdown && !dropdown.contains(event.target)) {
                                    dropdown.style.display = "none";
                                }
                            });
                            </script>

</body>

</html>

</div>
<script>
function showProfileWidget() {
    // Mendapatkan nama pengguna dan level dari session
    var username = "<?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Pengguna'; ?>";
    var level = "<?php echo isset($_SESSION['level']) ? $_SESSION['level'] : ''; ?>";

    // Menampilkan identitas pengguna dalam modal
    document.getElementById("username").textContent = username;
    document.getElementById("level").textContent = level;

    // Menampilkan modal
    $('#profileModal').modal('show');
}
</script>


</nav>

<div class="container-fluid">
    <?php include 'halaman_admin.php'; ?>
</div>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; ikhlas bahrudin</span>
        </div>
    </div>
</footer>


</script>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->


<script>
// Tambahkan event listener untuk setiap elemen
navLinks.forEach(function(navLink) {
    navLink.addEventListener('click', function(event) {
        // Cari target collapse dari elemen yang diklik
        var targetCollapse = document.querySelector(navLink.getAttribute('data-target'));

        // Cek apakah collapse sedang terbuka
        var isExpanded = targetCollapse.classList.contains('show');

        // Tutup semua collapse yang terbuka
        document.querySelectorAll('.collapse.show').forEach(function(collapse) {
            collapse.classList.remove('show');
        });

        // Jika collapse tidak sedang terbuka, buka yang terkait dengan elemen yang diklik
        if (!isExpanded) {
            targetCollapse.classList.add('show');
        }
    });
});
</script>


</script>
</script>
<!-- Bootstrap JavaScript dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

</body>

</html>