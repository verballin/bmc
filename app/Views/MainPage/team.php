<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BMC : Team</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('brem/img/icon bmc.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('brem/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('brem/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('brem/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('brem/css/style.css') ?>" rel="stylesheet">



</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;"><img src="brem/img/icon bmc.png" alt="" height="50px"><span
                    style="color: #fb873f;"></span></p>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php
            $session=session();
            $isLoggedIn = $session->get('login') === true;
            ?>
            <div class="nav-item dropdown">
                <?php if ($isLoggedIn) { ?>
                    <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?= site_url('dashboard') ?>" class="dropdown-item">Dashboard</a>
                        <form action="<?= site_url('/logout') ?>" method="post" style="display: inline;">
                        <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                <?php } else { ?>
                    <a href="<?= site_url('login') ?>" class="nav-item nav-link"><i class="fa fa-user"></i></a>
                <?php } ?>
            </div>

                <a href="<?= base_url()?>" class="nav-item nav-link">Home</a>
                <a href="<?= site_url('about') ?>" class="nav-item nav-link">About</a>
                <a href="<?= site_url('courses') ?>" class="nav-item nav-link">Kursus</a>
                <?php if($isLoggedIn) { ?>
                <a href="<?= site_url('#') ?>" class="nav-item nav-link">Simulasi</a>
                <?php } ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?= site_url('team') ?>" class="dropdown-item">Our Team</a>
                        <a href="<?= site_url('testimonial') ?>" class="dropdown-item">Testimonial</a>

                    </div>
                </div>
                <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Contact</a>
     
                </div>
                

                <div id="google_translate_element">
                </div>


                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Our Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="<?= base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="<?=base_url('brem/img/Yusuf.jpg')?>" alt="" style="height: 300px; width: 200px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/ajay.panwar">
                                    <i class="fab fa-facebook"></i>
                                </a>                                
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="mailto:ajaypanwar7472@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/6281234567890">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>                                    
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">YUSUF</h5>
                            <small>Team Leader</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="<?=base_url('brem/img/brema.1.jpg')?>" alt="" style="height: 300px; width: 200px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/ajay.panwar">
                                    <i class="fab fa-facebook-f"></i>
                                </a>                                
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="mailto:keertidvcorai@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/6281234567890">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">BREMA</h5>
                            <small>Team Member</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="<?=base_url('brem/img/yediht.jpg')?>" alt="" style="height: 300px; width: 200px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/ajay.panwar">
                                    <i class="fab fa-facebook-f"></i>
                                </a>                                
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="mailto:keertidvcorai@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/6281234567890">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">YEDITH</h5>
                            <small>Team Member</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="img/yediht.jpg" alt="" style="height: 300px; width: 200px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/ajay.panwar">
                                    <i class="fab fa-facebook-f"></i>
                                </a>                                
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="mailto:keertidvcorai@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/6281234567890">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">YEDITH</h5>
                            <small>Team Member</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="img/yediht.jpg" alt="" style="height: 300px; width: 200px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/ajay.panwar">
                                    <i class="fab fa-facebook-f"></i>
                                </a>                                
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="mailto:keertidvcorai@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a target="_blank" class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/6281234567890">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">YEDITH</h5>
                            <small>Team Member</small>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <p><a class="text-light" href="<?= site_url('about') ?>">About Us</a></p>
                    <p><a class="text-light" href="<?= site_url('contact') ?>">Contact Us</a></p>
                    <p><a class="text-light" href="#">Privacy Policy</a></p>
                    <p><a class="text-light" href="#">Terms & Condition</a></p>
                    <p><a class="text-light" href="#">FAQs & Help</a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Jalan Farrel Pasaribu, Simpang GG. Rambutan Daerah, Jl. Lapangan Sepak Bola, Kec. Siantar Marihat, Kota Pematang Siantar, Sumatera Utara 21121</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> 0821-6329-9216</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i> kursuonline.moracollege@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('brem/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('brem/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('brem/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('brem/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('brem/js/main.js') ?>"></script>
</body>

</html>