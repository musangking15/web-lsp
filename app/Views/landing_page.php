<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Jewepe Wedding Organizer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_landingpage/css/bootstrap.min.css'); ?>">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_landingpage/css/style.css'); ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url('assets_landingpage/css/responsive.css'); ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?= base_url('assets_landingpage/images/logo_wo.png'); ?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_landingpage/css/jquery.mCustomScrollbar.min.css'); ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img src="<?= base_url('assets_landingpage/images/logo_wo.png'); ?>" width="196" height="23"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang-kami">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#paket">Paket</a>
                        </li>
                        <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                    </ul>
                    <div class="my-2 my-lg-0">
                        <div class="login_text">
                            <ul>
                                <li>
                                    <button type="button" class="btn-custom1" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-user nav-link-custom" aria-hidden="true"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding" id="beranda">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner_taital_main">
                            <h1 class="banner_taital">Wujudkan Pernikahan Mewah Anda</h1>
                            <p class="banner_text">Rasakan kemewahan dan elegansi di hari spesial Anda. Kami menghadirkan pernikahan impian dengan konsep eksklusif dan layanan prima</p>
                            <div class="btn_main">
                                <div class="started_text"><a href="#pesan">Booking</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="services_section layout_padding" id="layanan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="services_taital">Layanan Kami</h1>
                    <p class="services_text_1">Kami berkomitmen untuk memberikan layanan penuh dedikasi bagi pernikahan Anda</p>
                </div>
            </div>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="<?= base_url('assets_landingpage'); ?>/images/consultation.png"></div>
                            <h4 class="development_text">Konsultasi Perencanaan</h4>
                            <p class="services_text">Tim ahli kami siap membantu Anda merancang pernikahan impian sesuai dengan keinginan dan anggaran Anda. Dari konsep hingga eksekusi, kami pastikan setiap detail terencana dengan sempurna</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="<?= base_url('assets_landingpage'); ?>/images/wedding-arch.png"></div>
                            <h4 class="development_text">Dekorasi dan Desain</h4>
                            <p class="services_text">Jewepe Wedding Organizer menghadirkan sentuhan artistik yang memukau, menyesuaikan tema dan palet warna yang Anda pilih untuk menciptakan suasana yang indah dan berkesan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="<?= base_url('assets_landingpage'); ?>/images/project.png"></div>
                            <h4 class="development_text">Manajemen Acara</h4>
                            <p class="services_text">Kami akan mengkoordinasikan seluruh acara dari awal hingga akhir, memastikan setiap momen berjalan lancar dan sesuai dengan rencana. Fokuslah pada kebahagiaan Anda, dan biarkan kami mengurus sisanya</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="<?= base_url('assets_landingpage'); ?>/images/action-camera.png"></div>
                            <h4 class="development_text">Paket Fotografi dan Videografi</h4>
                            <p class="services_text">Abadikan setiap momen berharga dengan layanan fotografi dan videografi profesional kami. Tim kami yang berpengalaman akan menangkap keindahan dan emosi hari pernikahan Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- about sectuion start -->
    <div class="about_section layout_padding" id="tentang-kami">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_taital">Tentang Kami</h1>
                    <p class="about_text">Selamat datang di Jewepe Wedding Organizer, tempat di mana kami mewujudkan pernikahan impian dengan kreativitas, keahlian, dan perhatian terhadap detail. Dengan pengalaman lebih dari 4 tahun, kami berdedikasi untuk menciptakan momen-momen spesial yang tak terlupakan bagi setiap pasangan. Di Jewepe, setiap pernikahan dirancang untuk mencerminkan kepribadian dan cerita cinta Anda, dengan komitmen untuk melebihi harapan Anda di setiap langkah. Hubungi kami hari ini dan biarkan kami membantu Anda merayakan cinta dengan cara yang paling indah. </p>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="about_img rounded">
                        <div class="video_bt">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about sectuion end -->
    <!-- projects section start -->
    <div class="projects_section layout_padding">
        <div class="container" id="paket">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="projects_taital">Paket Pernikahan</h1>
                </div>
            </div>
        </div>
        <div class="projects_section_2 layout_padding">
            <div class="container">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($katalog as $item) : ?>
                        <div class="item">
                            <div class="col-md-12">
                                <div class="shadow">
                                    <div class="container_main" style="width: 100%;">
                                        <img src="<?= base_url('gambar/') . $item['gambar']; ?>" class="image">
                                        <div class="overlay">
                                            <div class="text text-center">
                                                <a class="some_text" href="<?= base_url('katalog') ?>/<?= $item['katalog_id']; ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project_main text-center" style="width: 100%;">
                                        <h2 class="work_text "><?= $item['nama_katalog']; ?></h2>
                                        <p class="dummy_text ">RP <?= number_format($item['harga'], 0, '.', ','); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- projects section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding" id="testimonial">
        <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="testimonial_taital">Testimonial</h1>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text">Fitri <span style="float: right;"><img src="<?= base_url('assets_landingpage'); ?>/images/quick-icon.png"></span></h2>
                                    <p class="textimonial_text">Tim Jewepe sangat profesional dan ramah. Mereka mendengarkan semua keinginan kami dan memberikan saran yang sangat berharga. Acara pernikahan kami berjalan lancar dan semua tamu kami sangat menikmati. Terima kasih banyak!</p>
                                </div>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text"><img src="<?= base_url('assets_landingpage'); ?>/images/quick-icon.png"> <span style="float: right;">Fikri</span></h2>
                                    <p class="textimonial_text">Kami sangat senang memilih Jewepe Wedding Organizer. Mereka memastikan semua aspek pernikahan kami berjalan sesuai rencana. Dari awal hingga akhir, semuanya sempurna. Sangat puas dengan hasil akhirnya!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="testimonial_taital">Testimonial</h1>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text">Andini <span style="float: right;"><img src="<?= base_url('assets_landingpage'); ?>/images/quick-icon.png"></span></h2>
                                    <p class="textimonial_text">Kami sangat terkesan dengan pelayanan Jewepe Wedding Organizer. Semua detail acara kami ditangani dengan sangat profesional dan penuh perhatian. Hari pernikahan kami menjadi momen yang tak terlupakan. Terima kasih Jewepe!</p>
                                </div>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text"><img src="<?= base_url('assets_landingpage'); ?>/images/quick-icon.png"> <span style="float: right;">Fatur</span></h2>
                                    <p class="textimonial_text">Jewepe Wedding Organizer benar-benar mewujudkan pernikahan impian kami. Dari dekorasi hingga koordinasi acara, semuanya sempurna. Kami merasa sangat terbantu dan tidak stres sama sekali. Highly recommended!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="testimonial_taital">Testimonial</h1>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text">Ahmad <span style="float: right;"><img src="<?= base_url('assets_landingpage'); ?>/images/quick-icon.png"></span></h2>
                                    <p class="textimonial_text">Jewepe Wedding Organizer benar-benar membuat hari pernikahan kami menjadi spesial. Setiap detail diurus dengan sempurna, dan kami bisa menikmati momen kami tanpa khawatir. Terima kasih telah membuat pernikahan kami begitu indah!</p>
                                </div>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text"><img src="<?= base_url('assets_landingpage'); ?>/images/quick-icon.png"> <span style="float: right;">Fauzi</span></h2>
                                    <p class="textimonial_text">Dari awal hingga akhir, Jewepe Wedding Organizer memberikan layanan yang luar biasa. Mereka mendengarkan semua keinginan kami dan membantu mewujudkannya. Hasilnya melebihi harapan kami dan kami sangat bersyukur atas dedikasi mereka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row" id="pesan">
                <div class="col-md-12 text-center mt-5">
                    <h1 class="contact_taital">Form Booking</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <form action="<?= base_url('pesan') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mail_section_1">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama_pemesan">Nama</label>
                                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Nomor Hp</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="paket">Paket</label>
                                        <select id="paket" name="id_katalog" class="form-control">
                                            <option value="" disabled selected>Pilih Paket</option>
                                            <?php foreach ($katalog as $item) : ?>
                                                <option value="<?= $item['katalog_id']; ?>"><?= $item['nama_katalog']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tanggal_pemesanan">Tanggal Pernikahan</label>
                                        <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="jam_pemesanan">Jam Pernikahan</label>
                                        <input type="time" class="form-control" id="jam_pemesanan" name="jam_pemesanan">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_main">
            <div class="map-responsive">
                <?= $setting['alamat']; ?>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#"><span class="padding_15"><i class="fa fa-mobile" aria-hidden="true"></i></span> <br>+62-<?= $setting['phone']; ?></a>
                            </li>
                            <li>
                                <a href="#"><span class="padding_15"><i class="fa fa-envelope" aria-hidden="true"></i></span> <br><?= $setting['email']; ?></a>
                            </li>
                            <li>
                                <a href="#map"><span class="padding_15"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <br>Location</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <h2 class="useful_text">QUICK LINKS</h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#beranda">Beranda</a></li>
                                <li><a href="#tentang-kami">Tentang</a></li>
                                <li><a href="#layanan">Layanan</a></li>
                                <li><a href="#paket">Paket</a></li>
                                <li><a href="#testimonial">Testimonial</a></li>
                                <li><a href="#pesan">Booking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="useful_text">Jewepe</h2>
                        <p class="lorem_text">Biarkan Jewepe Wedding Organizer membantu Anda menciptakan pernikahan yang sempurna dan tak terlupakan. Dengan pengalaman dan dedikasi kami, setiap detail akan ditangani dengan profesionalisme dan sentuhan pribadi.</p>
                    </div>
                </div>
            </div>
            <div class="social_icon">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">2024 All Rights Reserved Jewepe</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="<?= base_url('assets_landingpage'); ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('assets_landingpage'); ?>/js/popper.min.js"></script>
    <script src="<?= base_url('assets_landingpage'); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets_landingpage'); ?>/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url('assets_landingpage'); ?>/js/plugin.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (session()->getFlashdata('pesan1')) : ?>
                Swal.fire({
                    icon: '<?= session()->getFlashdata('jenis'); ?>',
                    title: '<?= session()->getFlashdata('pesan1'); ?>',
                    text: '<?= session()->getFlashdata('pesan2'); ?>'
                });
            <?php endif; ?>

            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        })
    </script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title font-weight-bold" id="exampleModalLabel">LOGIN</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username..." required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password..." required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm px-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Paket -->
<?php foreach ($katalog as $item) : ?>
    <div class="modal fade" id="exampleModal-<?= $item['katalog_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title font-weight-bold" id="exampleModalLabel"><?= $item['nama_katalog']; ?></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $item['deskripsi']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>