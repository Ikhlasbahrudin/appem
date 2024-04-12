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
    echo "Selamat Datang Di Aplikasi INI<br><br>anda login sebagai : <h2><b>" . $_SESSION['nama'] . "</b></h2>";
}
