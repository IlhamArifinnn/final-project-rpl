<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sistem Informasi Pencatat Kesehatan Anak</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/landing-page/img/logo1.png') }}" rel="icon">
    <link href="{{ asset('assets/landing-page/img/logo1.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing-page/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing-page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing-page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/landing-page/css/main.css') }}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/landing-page/img/logo1.png') }}" alt="">
                <h1 class="sitename">SIPEKA</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#blogs">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Sign In</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Solusi Digital untuk Pemantauan Kesehatan Anak</h1>
                        <p data-aos="fade-up" data-aos-delay="100">SIPEKA membantu orang tua mencatat dan memantau
                            perkembangan kesehatan anak, termasuk berat badan, tinggi badan, dan jadwal monitoring.</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#about" class="btn-get-started">Pelajari Lebih Lanjut <i
                                    class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('assets/landing-page/img/hero-img.png') }}" class="img-fluid animated"
                            alt="Gambar SIPEKA">
                    </div>
                </div>
            </div>


        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang SIPEKA</h3>
                            <h2>Aplikasi Digital untuk Membantu Orang Tua Memantau Kesehatan Anak dengan Mudah dan
                                Praktis</h2>
                            <p>
                                SIPEKA adalah solusi inovatif yang dirancang untuk mendukung orang tua dalam mencatat,
                                memantau, dan memahami perkembangan kesehatan anak. Aplikasi ini hadir sebagai jawaban
                                atas kebutuhan orang tua modern yang sering kali menghadapi tantangan dalam mengelola
                                informasi kesehatan buah hati mereka di tengah kesibukan sehari-hari. Dengan fitur
                                seperti pencatatan berat badan, tinggi badan, dan jadwal monitoring, SIPEKA memastikan
                                bahwa setiap data penting terkait kesehatan anak Anda dapat diakses dengan mudah kapan
                                saja dan di mana saja.
                            </p>
                            <div class="text-center text-lg-start">
                                {{-- <a href="#about"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Pelajari Lebih Lanjut</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('assets/landing-page/img/about.png') }}" class="img-fluid"
                            alt="Gambar Tentang SIPEKA">
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Nilai Utama Kami</h2>
                <p>Prinsip yang mendasari pengembangan SIPEKA<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ asset('assets/landing-page/img/values-1.png') }}"
                                class="img-fluid w-4/5 m-auto" alt="Kepercayaan">
                            <h3>Kepercayaan</h3>
                            <p>SIPEKA dirancang untuk memberikan informasi kesehatan anak yang akurat dan dapat
                                dipercaya oleh orang tua.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{ asset('assets/landing-page/img/values-2.png') }}"
                                class="img-fluid w-4/5 m-auto" alt="Kenyamanan">
                            <h3>Kenyamanan</h3>
                            <p>Aplikasi ini memberikan kemudahan bagi orang tua dalam mencatat dan memantau kesehatan
                                anak kapan saja dan di mana saja.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="{{ asset('assets/landing-page/img/values-3.png') }}"
                                class="img-fluid w-4/5 m-auto" alt="Inovasi">
                            <h3>Inovasi</h3>
                            <p>Dengan teknologi digital terkini, SIPEKA menghadirkan solusi modern untuk pemantauan
                                kesehatan anak secara efisien.</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->


        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $usersCount }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pengguna</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $articlesCount }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Artikel Edukasi</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="24"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Jam Pemantauan</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="8"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Tim Dedikasi</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section>
        <!-- /Stats Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Kami</h2>
                <p>Temukan berbagai layanan unggulan yang ditawarkan SIPEKA<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative ">
                            <img src="{{ asset('assets/landing-page/img/services-1.png') }}"
                                class="img-fluid w-2/5 mb-3 m-auto " alt="artikel">
                            <h3>Pencatatan Kesehatan Anak</h3>
                            <p>Catat informasi penting seperti berat badan, tinggi badan, dan riwayat monitoring dengan
                                mudah.</p>
                            <a href="child_data" class="read-more mt-3"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative ">
                            <img src="{{ asset('assets/landing-page/img/services-2.png') }}"
                                class="img-fluid w-2/5 mb-3 m-auto" alt="artikel">
                            <h3> Jadwal Monitoring</h3>
                            <p>Buat jadwal monitoring anak agar tidak ada yang terlewat.
                            </p>
                            <a href="appointments" class="read-more mt-3"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative ">
                            <img src="{{ asset('assets/landing-page/img/services-3.png') }}"
                                class="img-fluid w-2/5 mb-3 m-auto" alt="artikel">
                            <h3>Artikel Edukasi</h3>
                            <p>Akses artikel kesehatan anak yang informatif dan bermanfaat untuk mendukung pola asuh.
                            </p>
                            <a href="health_articles" class="read-more mt-3"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section>
        <!-- /Services Section -->


        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Pertanyaan yang Sering Diajukan</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3>Bagaimana cara mencatat data kesehatan anak di SIPEKA?</h3>
                                <div class="faq-content">
                                    <p>Anda dapat mencatat data kesehatan anak melalui fitur pencatatan yang tersedia di
                                        dashboard. Masukkan informasi seperti berat badan, tinggi badan, dan monitoring
                                        dengan mudah.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah data kesehatan anak saya aman di SIPEKA?</h3>
                                <div class="faq-content">
                                    <p>SIPEKA menggunakan enkripsi data untuk memastikan keamanan informasi pengguna.
                                        Data Anda dijamin tidak akan dibagikan kepada pihak ketiga tanpa izin.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana cara melihat perkembangan anak?</h3>
                                <div class="faq-content">
                                    <p>Anda dapat mengakses perkembangan anak melalui di dashboard yang
                                        menunjukkan perubahan berat badan dan tinggi badan anak secara
                                        berkala.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
                        </div>
                    </div><!-- End Faq Column-->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-container">
                            <div class="faq-item">
                                <h3>Apakah ada jadwal monitoring anak?</h3>
                                <div class="faq-content">
                                    <p>Ya, SIPEKA menyediakan fitur jadwal monitoring anak agar tidak ada yang terlewat
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana cara mengakses artikel edukasi di SIPEKA?</h3>
                                <div class="faq-content">
                                    <p>Artikel edukasi dapat diakses melalui menu "Edukasi" di aplikasi. Artikel ini
                                        mencakup berbagai topik seperti kesehatan anak, nutrisi, dan tips parenting.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah SIPEKA dapat digunakan secara gratis?</h3>
                                <div class="faq-content">
                                    <p>Ya, Anda dapat menggunakan sebagian besar fitur SIPEKA secara gratis. Namun,
                                        beberapa layanan tambahan mungkin memerlukan biaya langganan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
                        </div>
                    </div><!-- End Faq Column-->
                </div>
            </div>
        </section><!-- /Faq Section -->



        <!-- Recent Posts Section -->
        <section id="blogs" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Artikel Terbaru</h2>
                <p>Informasi dan edukasi terbaru untuk Anda</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">


                    @foreach ($articles as $article)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                                {{-- <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/landing-page/img/blog/blog-1.jpg') }}" class="img-fluid"
                                    alt="Tips Nutrisi Anak">
                                <span class="post-date">12 Desember</span>
                            </div> --}}

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ $article->title }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span
                                                class="ps-2">{{ $article->author }}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">Kesehatan</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="{{ route('health_articles.show', $article->id) }}"
                                        class="readmore"><span>Selengkapnya</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section><!-- /Recent Posts Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi Kami untuk Informasi Lebih Lanjut</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Jalan Teknologi No. 10</p>
                                    <p>Depok, Jawa Barat 16425</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telepon</h3>
                                    <p>+62 812-3456-7890</p>
                                    <p>+62 813-9876-5432</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>info@sipeka.com</p>
                                    <p>support@sipeka.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Operasional</h3>
                                    <p>Senin - Jumat</p>
                                    <p>08:00 - 16:00 WIB</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control rounded"
                                        placeholder="Nama Anda" required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control rounded" name="email"
                                        placeholder="Email Anda" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control rounded" name="subject"
                                        placeholder="Subjek" required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control rounded" name="message" rows="6" placeholder="Pesan Anda" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Memuat...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                                    <button type="submit">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->


    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">SIPEKA</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Teknologi No. 10</p>
                        <p>Depok, Jawa Barat 16425</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>+62 812-3456-7890</span></p>
                        <p><strong>Email:</strong> <span>info@sipeka.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Link </h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Layanan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#!">Pencatatan Kesehatan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#!">Artikel Edukasi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#!">Pengelolaan Profil</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#!">Dukungan Pengguna</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Ikuti Kami</h4>
                    <p>Tetap terhubung dengan kami untuk mendapatkan informasi terbaru dan tips kesehatan anak.</p>
                    <div class="social-links d-flex">
                        <a href="#!"><i class="bi bi-twitter"></i></a>
                        <a href="#!"><i class="bi bi-facebook"></i></a>
                        <a href="#!"><i class="bi bi-instagram"></i></a>
                        <a href="#!"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>



    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/landing-page/js/main.js') }}"></script>

</body>

</html>
