<?php

use PharIo\Manifest\Url;
?>
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
    <div class="header_section2">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img src="<?= base_url('assets_landingpage/images/logo_wo.png'); ?>" width="196" height="23"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url_to('/'); ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url_to('/') . '#layanan'; ?>">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url_to('/') . '#tentang-kami'; ?>">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url_to('/') . '#paket'; ?>">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url_to('/') . '#testimonial'; ?>">Testimonial</a>
                        </li>
                        <li class="nav-item <?= (current_url(true)->getPath() == '/cek-pesanan') ? 'active' : '' ?>">
                            <a class="nav-link" href="#">Cek Pesanan</a>
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
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="services_section layout_padding" id="layanan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="services_taital">Cek Pesanan Anda Disini</h1>
                    <p class="services_text_1">Pencarian berdasarkan email yang anda input saat memesan paket</p>
                </div>
            </div>
            <div class="services_section_2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="card mb-5 mt-3">
                            <div class="card-header">
                                <form action="" method="GET">
                                    <div class="form-row">
                                        <div class="form-group mr-2">
                                            <input type="text" class="form-control" value="<?= $keyword; ?>" name="keyword" style="width: 20rem;" placeholder="keyword pencarian...">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary px-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped mt-3">
                                    <thead>
                                        <tr class="text-center h5">
                                            <th scope="col">Nama Pemesan</th>
                                            <th scope="col">Paket</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Total Biaya</th>
                                            <th scope="col">Status Pesanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transaksi as $row) : ?>
                                            <tr class="text-center h6">
                                                <td><?= $row['nama']; ?></td>
                                                <td><?= $row['nama_katalog']; ?></td>
                                                <td><?= $row['tanggal']; ?></td>
                                                <td>Rp <?= number_format($row['harga'], '0', ',', '.') ?></td>
                                                <td>
                                                    <?php if ($row['status_pesanan'] == 2) : ?>
                                                        <button class="btn btn-sm btn-round btn-success" disabled>Pesanan diterima</button>
                                                    <?php elseif ($row['status_pesanan'] == 3) : ?>
                                                        <button class="btn btn-sm btn-round btn-danger" disabled>Pesanan ditolak</button>
                                                    <?php else : ?>
                                                        <button class="btn btn-sm btn-round btn-secondary" disabled>Menunggu persetujuan</button>
                                                    <?php endif ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding ">
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