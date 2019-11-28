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
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">  --> 
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css"> -->
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootnavbar.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootnavbar.js"> -->

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
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dropdownhover.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/summernote.css">


        <style type="text/css">
            .dropdown-inline {
                display: inline-block;
                position: relative;
            }

        </style>
    </head>
    <body>

        <!-- Header Area wrapper Starts -->
        <header id="header-wrap">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-6 p-2">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-fluid" width="25%"></a>
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
            <?php $this->load->view('layouts/menu'); ?>

        </header>
        <!-- Header Area wrapper End -->

        <!-- Services Section Start -->
        <div class="push-down-page"></div>

        <?php echo $template['body']; ?>

        <!-- Copyright Section Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-120 col-12">
                    <p>&nbsp;</p>
                </div> 
            </div>
        </div>

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
        $route = $this->router->fetch_class();
        
        echo ($route == strtolower('article')) ? '<script type="text/javascript" src="' . base_url() . 'assets/js/crud/article.js"></script>' : '';
        echo ($route == strtolower('category')) ? '<script type="text/javascript" src="' . base_url() . 'assets/js/crud/category.js"></script>' : '';
        echo ($route == strtolower('user')) ? '<script type="text/javascript" src="' . base_url() . 'assets/js/crud/user.js"></script>' : '';
        ?>


        <!-- Menu Hover Script -->
        < <script>
            $(document).ready(function () {
                $('.dropdown-menu-sub').hide();
                $('li.nav-sub-one').hover(function () {
                    $(this).find('.dropdown-menu-sub').stop(true, true).delay(200).show(500);
                }, function () {
                    $(this).find('.dropdown-menu-sub').stop(true, true).delay(200).hide(500);
                });
            });
            $(document).ready(function () {
                $('.dropdown-menu-sub-two').hide();
                $('li.nav-sub-two').hover(function () {
                    $(this).find('.dropdown-menu-sub-two').stop(true, true).delay(200).show(500);
                }, function () {
                    $(this).find('.dropdown-menu-sub-two').stop(true, true).delay(200).hide(500);
                });
            });

        </script> 

    </body>
</html>
