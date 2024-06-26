<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>appem</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="logo/logo.png" rel="icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">


<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
<!-- Template Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet">
<style>
/* Gaya tambahan untuk teks */
.text-hover-effect {
    transition: all 0.3s ease;
}



/* Mengubah warna teks saat diinteraksi dengan kursor */
.text-hover-effect:hover {
    color: #dba514;
    /* Warna biru saat diinteraksi dengan kursor */
}
</style>

<!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="home.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>desa sukamaju<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index2.php" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#Blog" onclick="scrollToContact()">blog</a></li>
                    </li>
                    <li><a href="#contact" onclick="scrollToContact()">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center" style="color: white;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img src="logo/logo.png" alt="Logo Desa Sukamaju" data-aos="fade-down" width="150" height="150">
                        <td></td>
                        <h1 data-aos="fade-up">SELAMAT DATANG </h1>
                        <p> "Ada masalah di Desa Sukamaju yang perlu kami tangani? Segera laporkan! Ayok, adukan
                            sekarang untuk solusi cepat."</p>
                        <a data-aos="fade-up" data-aos-delay="100" href="#login" class="btn-get-started">Mulai</a>
                    </div>
                </div>
            </div>
        </div>

        </div>


        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="login">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div class="container">
                <div class="row justify-content-between gy-4">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Silahkan masukan username dan password anda</h3>
                            <p>Berikut adalah kolom login untuk masyarakat dan petugas/admin
                            <p>jika anda petugas/admin silahkan login sesuai petunjuk yang sudah ada terimakasih.</p>
                        </div>
                    </div>


                    <div class="col-lg-6" data-aos="fade">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="card-title text-center mb-4">Login Petugas/admin</h3>
                                <hr>
                                <form class="user" method="post" action="cek_login2.php">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="Masukan Username"
                                            onkeypress="return handleEnter(event, 'password')" />
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password"
                                                onkeypress="return handleEnter(event, 'submit')" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-eye" id="togglePassword"
                                                        onclick="togglePassword()"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-outline-warning btn-lg"
                                            value="Login">
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <h7 class="text-muted mb-2">Belum punya akun?</h7>
                                </div>
                                <div class="row justify-content-center mt-2">
                                    <div class="col-lg-6 text-center">
                                        <a class="btn btn-block btn-outline-warning btn-lg" href="register.php">Buat
                                            Akun</a><br>
                                        <a class="text-muted btn btn-link" href="home.php">
                                            <span class="text-hover-effect">Masuk sebagai masyarakat</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    </div><!-- End Quote Form -->

    </div>

    </div>
    </section><!-- End Get Started Section -->

    <!-- About Section-->
    <section class="page-section bg-white text-black mb-0 shadow" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-black">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row shadow p-3 mb-5 bg-body rounded">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Desa merupakan bentuk pemerintahan terkecil atau instansi terkecil dari seluruh
                        instansi yang ada di Indonesia. Terdapat banyak desa di Indonesia termasuk di provinsi Jawa
                        Barat, Kabupaten Cianjur. Salah satunya adalah desa Sukamaju yang terletak di Kabupaten Cianjur,
                        Kecamatan Cianjur. Salah satu sarana penting di desa adalah pelayanan publik yang mencakup
                        berbagai kegiatan untuk memenuhi kebutuhan Masyarakat. </p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">penerapan teknologi dimanfaatkan sebagai upaya peningkatan pelayanan pengaduan
                        masyarakat berbasis online. Masyarakat yang akan melakukan pengaduan kepada pejabat yang
                        berwenang hanya perlu mengakses sistem pengaduan dimana saja dan kapan saja tanpa terhalang
                        waktu. </p>
                </div>

                <div class="row primary-content-center">
                    <div class="col-lg-4 ms-auto">
                        <div class="social-links d-flex primary-content-center">
                            <a href="#" class="d-flex align-items-center justify-content-center text-primary me-3"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center text-primary me-3"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center text-primary me-3"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center text-primary"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>
                            Anda masih bingung terkait penggunaan aplikasi atau anda ingin berkosultasi langsung
                            ke kantor desa berikut alamat lengkat dan kontak kami terimakasih
                        </p>
                    </div>

                    <div class="row" data-aos="fade-in">
                        <!-- Kolom identitas -->
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>desa sukamaju, kec. cianjur</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 87731375513</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Kolom identitas -->

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <iframe width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen=""
                                aria-hidden="false" tabindex="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.974327504917!2d107.14681209643108!3d-6.8379353427411615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ef6b5a9de1d5%3A0x93f36b4e0b20a924!2sYour%20Location!5e0!3m2!1sen!2sid!4v1649083315378!5m2!1sen!2sid"></iframe>
                        </div>

                    </div>


            </section>

            <tr></tr>

            <section id="Blog" class="recent-blog-posts">
                <div class="container" data-aos="fade-up">
                    <h1>Dokumentasi</h1>

                    <div class="row gy-5">
                        <!-- Video 1 -->
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog1.jpg" class="img-fluid" alt="">
                                    <span class="post-date">December 12</span>
                                </div>

                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title">tugas aplikasi pengaduan Masyarakat</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">Robert</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">flog </span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="#video-frame" class="readmore stretched-link"
                                        onclick="scrollAndPlayVideo('nl19IyYYqX4')">
                                        <span>Watch Video</span>
                                        <i class="bi bi-play-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Video 1 -->

                        <!-- Video 2 -->
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-item position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                                    <span class="post-date">July 17</span>
                                </div>

                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="#video-frame" class="readmore stretched-link"
                                        onclick="scrollAndPlayVideo('jutYm3s4tO4')">
                                        <span>Watch Video</span>
                                        <i class="bi bi-play-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Video 2 -->

                        <!-- Video 3 -->
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="post-item position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                                    <span class="post-date">September 05</span>
                                </div>

                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="#video-frame" class="readmore stretched-link"
                                        onclick="scrollAndPlayVideo('jutYm3s4tO4')">
                                        <span>Watch Video</span>
                                        <i class="bi bi-play-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Video 3 -->
                    </div>
                </div>

                <!-- Tempatkan iframe di bawah -->
                <div class="container mt-5" id="video-container" style="display: none;">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="video-container">
                                <iframe id="video-frame" width="560" height="315" src="" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <button type="button" class="btn-close btn btn-danger mt-3" aria-label="Close"
                                onclick="closeVideo()"></button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Recent Blog Posts Section -->

            </main><!-- End #main -->

            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">

                <div class="footer-content position-relative">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-4 col-md-6">
                                <div class="footer-info">
                                    <h3>Footer</h3>
                                    <p>
                                        A108 Adam Street <br>
                                        NY 535022, USA<br><br>
                                        <strong>Phone:</strong> +1 5589 55488 55<br>
                                        <strong>Email:</strong> info@example.com<br>
                                    </p>
                                    <div class="social-links d-flex mt-3">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><i
                                                class="bi bi-twitter"></i></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div><!-- End footer info column-->

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>contact</h4>
                                <ul>
                                    <li><a href="#contact">contact</a></li>

                                </ul>
                            </div><!-- End footer links column-->

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>About</h4>
                                <ul>
                                    <li><a href="#about">about</a></li>

                                </ul>
                            </div><!-- End footer links column-->

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>login</h4>
                                <ul>
                                    <li><a href="#login">login</a></li>

                                </ul>
                            </div><!-- End footer links column-->

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>home</h4>
                                <ul>
                                    <li><a href="#header">home</a></li>
                                    <li><a href="#Blog">Dokumentasi</a></li>


                                </ul>
                            </div><!-- End footer links column-->

                        </div>
                    </div>
                </div>

                <div class="footer-legal text-center position-relative">
                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>ikhlas bahrudin</span></strong>
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>

            </footer>
            <!-- End Footer -->

            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <script>
            // Function untuk melihat masswprd
            function togglePassword() {
                var passwordInput = document.getElementById("password");
                var toggleIcon = document.getElementById("togglePassword");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    toggleIcon.classList.remove("fa-eye");
                    toggleIcon.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    toggleIcon.classList.remove("fa-eye-slash");
                    toggleIcon.classList.add("fa-eye");
                }
            }

            // Function to handle form submission on Enter key press
            function handleEnter(event, nextInput) {
                if (event.key === "Enter") {
                    if (nextInput === "submit") {
                        document.getElementById("loginForm").submit();
                    } else {
                        document.getElementById(nextInput).focus();
                    }
                    return false; // Prevent form submission
                }
                return true;
            }

            // Event listener for password visibility toggle
            document.getElementById("togglePassword").addEventListener("click", togglePassword);

            // Check if there are values saved in localStorage for username and password
            document.addEventListener('DOMContentLoaded', function() {
                var savedUsername = localStorage.getItem('savedUsername');
                var savedPassword = localStorage.getItem('savedPassword');

                // Insert saved values into input if they exist
                if (savedUsername) {
                    document.getElementById('username').value = savedUsername;
                }
                if (savedPassword) {
                    document.getElementById('password').value = savedPassword;
                }
            });

            // Save username and password values to localStorage when user changes them
            document.getElementById('username').addEventListener('input', function() {
                localStorage.setItem('savedUsername', this.value);
            });
            document.getElementById('password').addEventListener('input', function() {
                localStorage.setItem('savedPassword', this.value);
            });

            // Clear username and password values when user logs out or leaves the page
            window.addEventListener('beforeunload', function() {
                localStorage.removeItem('savedUsername');
                localStorage.removeItem('savedPassword');
            });
            </script>

            <!-- and untuk meluhat password-->

            <script>
            function scrollAndPlayVideo(videoId) {
                // Scroll ke bawah ke container video
                const videoContainer = document.getElementById('video-container');
                videoContainer.style.display = 'block'; // Tampilkan container video jika tersembunyi
                videoContainer.scrollIntoView({
                    behavior: 'smooth'
                }); // Scrol ke bawah dengan efek halus

                // Mulai pemutaran video
                const videoFrame = document.getElementById('video-frame');
                videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            }

            function closeVideo() {
                // Hentikan pemutaran video
                const videoFrame = document.getElementById('video-frame');
                videoFrame.src = '';

                // Sembunyikan container video
                const videoContainer = document.getElementById('video-container');
                videoContainer.style.display = 'none';
            }
            </script>
</body>

</html>