<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Oznif</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <!-- Icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/line-icons.css">
        <!-- Slicknav -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.css">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
        <!-- <link rel="stylesheet" href="assets/css/owl.theme.css">  -->
        <!-- <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"> -->


        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nivo-lightbox.css">
        <!-- Animate -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
        <!-- Main Style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <!-- Responsive Style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/social-icons.css">

        <!-- FontAwesome Style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/roboto/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/summernote.css">

    </head>
    <body>
        <?php
        $route = $this->router->fetch_class();
        ?>
        <!-- Header Area wrapper Starts -->
        <header id="header-wrap">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-6 p-2">
                        <div class="text-center">
                            <a href="http://localhost/oznif/"><img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-6 p-2">
                        <div class="pull-right social-iocns">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="lni-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto w-100 justify-content-start clearfix">
                            <li class="nav-item <?php echo ($this->uri->segment(1) == '') ? 'active' : ''; ?>">
                                <a class="nav-link " href="<?php echo base_url(); ?>" >
                                    <i class="fa fa-cubes" aria-hidden="true"></i><span>Home</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown <?php echo ($this->uri->segment(1) == 'category') ? 'active' : ''; ?>">
                                <a class="nav-link " href="<?php echo base_url() . 'category'; ?>" >
                                    <i class="fa fa-cubes" aria-hidden="true"></i><span>Category</span>
                                </a>
                            </li>

                            <li class="nav-item <?php echo ($this->uri->segment(1) == 'article') ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo base_url() . 'article'; ?>">
                                    <i class="fa fa-cubes" aria-hidden="true"></i><span>Article</span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo ($this->uri->segment(1) == 'user') ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo base_url() . 'user'; ?>">
                                    <i class="fa fa-cubes" aria-hidden="true"></i><span>User</span>
                                </a>
                            </li>
                            <!--<li class="nav-item ml-auto">
                                <button class="btn btn-primary pull-right contribute-btn" type="button">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    Contribute
                                </button>
                            </li>-->

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        </header>

        <section class="featured-section-padding featured-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="section-title wow fadeInDown text-left" data-wow-delay="0.3s"><?php echo $template['title']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 p-0 p-md-1">
                        <?php echo $template['body']; ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- Copyright Section End -->

        <!-- Go to Top Link -->
        <a href="#" class="back-to-top">
            <i class="lni-arrow-up"></i>
        </a>

        <!-- Preloader -->
        <!--<div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>-->
        <!-- End Preloader -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/config.js"></script>
        <script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/datatable/datatables.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatable/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/summernote.js"></script>
        <?php
        echo ($route == strtolower('article')) ? '<script type="text/javascript" src="' . base_url() . 'assets/js/crud/article.js"></script>' : '';
        echo ($route == strtolower('category')) ? '<script type="text/javascript" src="' . base_url() . 'assets/js/crud/category.js"></script>' : '';
        echo ($route == strtolower('user')) ? '<script type="text/javascript" src="' . base_url() . 'assets/js/crud/user.js"></script>' : '';
        ?>
    </body>
</html>
