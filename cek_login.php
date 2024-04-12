<?php
$user = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

// Periksa apakah username atau password kosong
if (empty($user) || empty($pass)) {
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>error</title>
        
        <!-- Panggil Bootstrap CSS -->
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
        
        <!-- Tambahkan tag link untuk favicon -->
        <link rel='icon' type='image/png' href='logo/logo.png' >

        <style>

            /* Style tambahan jika diperlukan */
            body {
                padding-top: 20px;
            }
            .alert-box {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                animation: pulse 1s infinite;
                background-color: #f8d7da;
                color: #721c24;
                border-color: #f5c6cb;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
            }
            .warning-text {
                font-size: 24px;
                margin-bottom: 20px;
                color: #dc3545;
                font-weight: bold;
            }
            .message-text {
                font-size: 18px;
                color: #721c24;
            }
            @keyframes pulse {
                0% {
                    transform: translate(-50%, -50%) scale(1);
                }
                50% {
                    transform: translate(-50%, -50%) scale(1.05);
                }
                100% {
                    transform: translate(-50%, -50%) scale(1);
                }
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                <div class='warning-text'>Warning </div>
                <div class='message-text'>Silahkan masukkan username dan password</div>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        </div>
        <!-- Panggil Bootstrap JS -->
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
        <!-- JavaScript untuk kembali ke halaman home.php -->
        <script>
            setTimeout(function() {
                window.location.href = 'home.php'; // Redirect ke home.php setelah 3 detik
            }, 3000);
        </script>
    </body>
    </html>
    ";
    exit(); // Hentikan eksekusi skrip
}

$koneksi = new mysqli('localhost', 'root', '', 'appem');

if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
}

$query = "SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'";
$result = $koneksi->query($query);

if (!$result) {
    die('Query error: ' . $koneksi->error);
}

$cek = $result->num_rows;

if ($cek > 0) {
    $data = $result->fetch_array(MYSQLI_ASSOC); // Gunakan MYSQLI_ASSOC untuk mendapatkan asosiatif array
    session_start();
    $_SESSION['nama'] = $user;
    $_SESSION['nik'] = $data['nik']; // Ganti dengan kolom yang sesuai
    header('location:masyarakat.php');
} else {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Style tambahan jika diperlukan */
    .alert-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: pulse 1s infinite;
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .warning-text {
        font-size: 24px;
        margin-bottom: 20px;
        color: #dc3545;
        font-weight: bold;
    }

    .message-text {
        font-size: 18px;
        color: #721c24;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
        }

        50% {
            transform: translate(-50%, -50%) scale(1.05);
        }

        100% {
            transform: translate(-50%, -50%) scale(1);
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="alert alert-danger alert-dismissible fade show alert-box" role="alert">
            <div class="warning-text">Warning:</div>
            <div class="message-text">Usename dan Password Salah</div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <a href="home.php" class=""></a>
    </div>
    <!-- Panggil Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript untuk kembali ke halaman home.php -->
    <script>
    // Tambahkan event handler untuk menutup alert ketika tombol close diklik
    document.querySelector('.close').addEventListener('click', function() {
        this.parentElement.style.display = 'none';
    });
    // Animasi berdenyut
    setInterval(function() {
        var alertBox = document.querySelector('.alert-box');
        alertBox.style.animation = 'pulse 1s infinite';
        setTimeout(function() {
            alertBox.style.animation = '';
        }, 1000);
    }, 2000);
    // Redirect ke halaman login setelah beberapa detik
    setTimeout(function() {
        window.location.href = 'home.php'; // Redirect ke home.php setelah 3 detik
    }, 3000);
    </script>
</body>

</html>
<?php
    exit(); // Hentikan eksekusi skrip
}

// Kode selanjutnya ...
?>