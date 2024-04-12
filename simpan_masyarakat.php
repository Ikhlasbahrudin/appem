<?php
require 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];

$sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik', '$nama', '$user', '$pass', '$telp')";

// Eksekusi query
if ($koneksi->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
        window.location = "home.php";
    </script>
    <?php
} else {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>
