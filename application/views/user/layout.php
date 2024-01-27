<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Star Digital Internship adalah website testing pengajuan magang">
    <meta name="author" content="Fiqisulaiman">
    <link rel="icon" href="<?= base_url('assets/img/logos.png') ?>">

    <title>Dinas Tanaman Pangan dan Hortikultura</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- PLUGIN -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/hover/hover-min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animate/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?> ">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?= base_url('assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/user.css') ?>">
    <style type="text/css">
        body::-webkit-scrollbar {
            display: none;
        }

        button.wh-ap-btn {
            outline: none;
            width: 55px;
            height: 55px;
            border: 0;
            background-color: #2ecc71;
            padding: 0;
            border-radius: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            cursor: pointer;
            transition: opacity 0.3s, background 0.3s, box-shadow 0.3s;
        }

        button.wh-ap-btn::after {
            content: '';
            background-image: url('//i.imgur.com/cAS6qqn.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 60%;
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
            z-index: 999;
        }

        button.wh-ap-btn:hover {
            opacity: 1;
            background-color: #20bf6b;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .wh-api {
            position: fixed;
            bottom: 0;
            right: 0;
        }

        .wh-fixed {
            margin-right: 15px;
            margin-bottom: 45px;
        }

        .wh-fixed>a {
            display: block;
            text-decoration: none;
        }

        .wh-fixed>a:hover button.wh-ap-btn::before {
            opacity: 1;
            width: auto;
            padding-top: 7px;
            padding-left: 10px;
            padding-right: 10px;
            width: 80px;
        }
    </style>
</head>

<body>
    <nav id="nav" class="navbar navbar-expand-md fixed-top navbar-dark shadow-sm" style="background-color:#4e792f;">
        <div class="container">
            <a href="<?= base_url('home') ?>" class="navbar-brand d-flex align-items-center hvr-shrink">
                <img src="<?= base_url('assets/img/logos.png') ?>" class="navbar-brand" style="height: 70px; width:50px;">
                <h5 class="text-white mt">SIAMANG | DISTPH<br>Provinsi Kalimantan Barat</br>
                </h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-reorder text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active pl-1 pr-1">
                        <a class="nav-link text-white scroll hvr-shrink" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-1 pr-1">
                        <a class="nav-link text-white scroll hvr-shrink" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item pl-1 pr-1">
                        <a class="nav-link text-white scroll hvr-shrink" href="#kegiatan">Kegiatan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
    ?>
    <main role="main" id="home">
        <section class="tch" id="home" style="padding-top:14rem; padding-bottom:15rem;">
            <div class="container">

                <h1 class="jumbotron-heading text-success">Sistem Informasi Anak Magang</h1>
                <p style="color: #F8F8FF;">Belajar bersama kami, kami membuka penerimaan<br> Mahasiswa atau Siswa Magang.</p>
                <p>
                    <a href="<?= base_url('login') ?>" class="btn btn-warning my-2 scroll">Login</a>
                </p>
            </div>
        </section>
        <div class="bg-light" id="tentang" style="padding-top:100px; padding-bottom:100px; height:100%;">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-AUTO mx-auto">
                        <div class="card-body">
                            <h3><b>STRUKTUR ORGANISASI</b></h3>
                        </div>
                    </div>
                    <div class="col-md-9 mx-auto">
                        <img src="<?= base_url('assets/img/Bidang.PNG') ?>" class="card-img-top hvr-grow" alt="...">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <h3 class="text-center"><b>Tugas dan Fungsi</b></h3>
                    <h5>Dinas Tanaman pangan dan Hortikultura Provinsi Kalimantan Barat mempunyai tugas dan fungsi sesuai Peraturan Gubernur Kalimantan Barat Nomor 95 Tahun 2019 tanggal 12 Desember 2019.</p>
                        <br>Tugas Dinas Tanaman Pangan dan Hortikultura Provinsi Kalimantan Barat yaitu: Membantu Gubernur melaksanakan urusan pemerintahan yang menjadikan kewenangan daerah dan tugas pembantuan di bidang tanaman pangan dan hortikultura sesuai ketentuan perundang-undangan.
                    </h5>
                </div>
                <div class="accordion" id="accordionExample">
                    <!-- Accordion Item 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <b>KEPALA DINAS</b>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Kepala Dinas mempunyai tugas memimpin, merumuskan, mengkoordinasikan, membina, mengarahkan, menyelenggarakan, mengevaluasi dan melaporkan kegiatan dinas di bidang tanaman pangan dan hortikultura sesuai ketentuan peraturan perundang-undangan. Sesuai pergub No 95 Tahun 2019.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <b>SEKRETARIAT</b>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Sekretariat mempunyai tugas menyiapkan bahan perumusan kebijakan di bidang rencana kerja, monitoring dan evaluasi, administrasi kepegawaian, umum, pengelolaan keuangan dan asset, serta bertanggung jawab memimpin pelaksanaan seluruh kegiatan pelayanan dan administrasi di lingkungan Dinas Tanaman Pangan dan Hortikultura.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <b>BIDANG TANAMAN PANGAN</b>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Bidang Tanaman Pangan mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis dibidang tanaman Serelia, tanaman aneka kacang dan umbi, pengolahan dan pemasaran hasil tanaman pangan serta bertanggung jawab memompon seluruh kegiatan pelayanan dan administrasi di bidang tanaman pangan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <b>BIDANG HORTIKULTURA</b>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Bidang Hortikultura mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis di bidang tanaman buah dan florikultura, tanaman sayuran dan tanaman obat, pengolahan dan pemasaran hasil hortikultura serta bertanggungjawab memimpin seluruh kegiatan administrasi di bidang hortikultura</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 5 -->

                    <!-- Accordion Item 6 -->
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <b>BIDANG PENYULUHAN & PENGEMBANGAN PERTANIAN</b>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Bidang Penyuluhan dan Pengembangan mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis dibidang kelembagaan dan pengembangan sumber daya manusia penyuluhan, tata dan metode penyuluhan, pengembangan teknologi dan informasi serta bertanggung jawab memimpin seluruh kegiatan pelayanan dan administrasi di bidang Penyuluhan dan Pengembangan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 7 -->
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <b>BIDANG PRASARANA DAN SARANA</b>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Tugas Bidang Prasarana dan Sarana bertugas menyiapkan bahan dan merumuskan kebijakan teknis dibidang perluasan dan perlindungan lahan, irigasi dan pembiayaan, alat mesin, pupuk dan pestisida serta bertanggung jawab memimpin seluruh kegiatan pelayanan dan administrasi di bidang prasarana dan sarana.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="bg-light" id="tentang" style="padding-top:5px; padding-bottom:100px; height:100%;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-AUTO mx-auto">
                    <div class="card-body text-center">
                        <h3><b>MEKANISME DAN PROSEDUR PELAYANAN</b></h3>
                    </div>
                    <div class="col-md-15 mx-auto">
                        <img src="<?= base_url('assets/img/bagian.png') ?>" class="card-img-top hvr-grow" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container text-center my-3" id="kegiatan" style="padding-top:150px; padding-bottom:150px; height:100%;">
            <h3 class="font-weight-bold" style="padding-bottom:50px;">Kegiatan</h3>
            <div class="col-md-12 col-sm-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?= base_url('assets/') ?>/img/kegiatan1.jpg">
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/') ?>/img/kegiatan2.jpg">
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/') ?>/img/kegiatan3.jpg">
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/') ?>/img/kegiatan4.jpg">
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/') ?>/img/kegiatan5.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid bg-dark" id="kontak">
        <div class="row container d-flex m-auto">
            <div class="col-md-3 mb-4 mt-3 text-white">
                <h3> SIAMANG | DISTPH</h3>
                <p class="small mt-2">Jl. Alianyang No. 17, Pontianak, Kalimantan Barat</p>

            </div>
            <div class="col-md-3 mb-3 mt-3">
                <h5 class="text-white">Menu</h5>
                <ul class="list-unstyled text-small" style="margin-left: 1px;">
                    <li>
                        <p><a class="text-white mt-5" href="#"><i class="fa fa-home text-aqua"></i> Home</a></p>
                    </li>
                    <li>
                        <p><a class="text-white mt-5 scroll" href="#tentang"><i class="fa fa-sign-in text-aqua"></i> About</a></p>
                    </li>
                    <li>
                        <p><a class="text-white mt-5 scroll" href="#kegiatan"><i class="fa fa-pencil text-aqua"></i> Kegiatan</a></p>
                    </li>

                </ul>
            </div>

            <div class="col-md-3 mb-3 mt-3 text-white">
                <h5 class="text-white">Bantuan</h5>
                <ul class="list-unstyled text-small" style="margin-left: 1px;">
                    <li>
                        <p><i class="fa fa-phone text-aqua"></i> (0561) 734017 </p>
                    </li>
                    <li>
                        <p><i class="fa fa-whatsapp text-aqua"></i> +6285376890642</p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope-open text-aqua"></i> distan@kalbarprov.go.id</p>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 mt-3">
                <h5 class="text-white">Bagikan</h5>
                <ul class="list-unstyled text-small" style="margin-left: 1px;">
                    <a href="#" class="hvr-float"><i class="fa fa-facebook-square text-aqua fa-2x"></i></a>
                    <a href="#" class="ml-1 hvr-float"><i class="fa fa-twitter-square fa-2x text-aqua"></i></a>
                    <a href="#" class="ml-1 hvr-float"><i class="fa fa-linkedin-square fa-2x text-aqua"></i></a>
                    <a href="#" class="ml-1 hvr-float"><i class="fa fa-whatsapp fa-2x text-aqua"></i></a>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2023 SIAMANG - Dinas Tanaman Pangan dan Hortikultura
        </div>
    </footer>
    <div class="wh-api">
        <div class="wh-fixed">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+6285376890642&text=Saya butuh bantuan">
                <button class="wh-ap-btn"></button>
            </a>
        </div>
    </div>
    <div class="control-sidebar-bg"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Add scrollspy to <body>
            $('body').scrollspy({
                target: ".navbar",
                offset: 50
            });

            // Add smooth scrolling on all links inside the navbar
            $("#nav a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            // Add smooth scrolling on all links inside the navbar
            $("#pelajari").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

        AOS.init();
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            rewind: true,
            /* use rewind if you don't want loop */
            margin: 20,

            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            items: 3,
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 2
                },

                1024: {
                    items: 3
                },
            }
        });
    </script>
</body>

</html>