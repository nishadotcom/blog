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
        <div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>
        <!-- End Preloader -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nav.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scrolling-nav.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/nivo-lightbox.js"></script>     
        <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>      
        <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

        <script src="<?php echo base_url(); ?>assets/js/bootnavbar.js" ></script>
        <script>
                $(function () {
                $('#main_navbar').bootnavbar();
                })
        </script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdownhover.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sticky-sidebar.js"></script>-->
        <script type="text/javascript">

                /*var a = new StickySidebar('#left-sidebar', {
                topSpacing: 20,
                        bottomSpacing: 20,
                        containerSelector: '.container',
                        innerWrapperSelector: '.sidebar__inner'
                })*/;  </script>
        <script>
                    $(document).ready(function(){
            $('#feature-one').owlCarousel({
            loop: true,
                    autoplay: 2000,
                    items: 1,
                    dots:false,
                    margin: 15,
                    //nav: true,
                    autoplayHoverPause: true,
                    animateOut: 'slideOutUp',
                    animateIn: 'slideInUp',
                    vertical:true,
                    slideTransition: 'linear',
                    autoplayTimeout: 6000,
                    autoplaySpeed: 6000,
                    responsive:{
                    0:{
                    items:1
                    },
                            600:{
                            items:1
                            },
                            1000:{
                            items:1
                            }
                    }
            });
                    $('#feature-two').owlCarousel({
            loop: true,
                    autoplay: 4000,
                    items: 1,
                    dots:false,
                    margin: 15,
                    //nav: true,
                    autoplayHoverPause: true,
                    animateOut: 'slideOutUp',
                    animateIn: 'slideInUp',
                    vertical:true,
                    slideTransition: 'linear',
                    autoplayTimeout: 8000,
                    autoplaySpeed: 8000,
                    responsive:{
                    0:{
                    items:1
                    },
                            600:{
                            items:1
                            },
                            1000:{
                            items:1
                            }
                    }
            });
                    $('#feature-three').owlCarousel({
            loop: true,
                    autoplay: 3000,
                    items: 1,
                    dots:false,
                    //nav: true,
                    autoplayHoverPause: true,
                    animateOut: 'slideOutUp',
                    animateIn: 'slideInUp',
                    slideTransition: 'linear',
                    autoplayTimeout: 7000,
                    autoplaySpeed: 7000,
                    vertical:true,
                    responsive:{
                    0:{
                    items:1
                    },
                            600:{
                            items:1
                            },
                            1000:{
                            items:1
                            }
                    }
            });
                    $('#feature-four').owlCarousel({
            loop: true,
                    autoplay: 1000,
                    items: 1,
                    dots:false,
                    //nav: true,
                    autoplayHoverPause: true,
                    animateOut: 'slideOutUp',
                    animateIn: 'slideInUp',
                    vertical:true,
                    slideTransition: 'linear',
                    autoplayTimeout: 4000,
                    autoplaySpeed: 4000,
                    responsive:{
                    0:{
                    items:1
                    },
                            600:{
                            items:1
                            },
                            1000:{
                            items:1
                            }
                    }
            });
                    }); </script>


        <script type="text/javascript">
           $(document).on('ready', function() {

   $(".latest-blog").slick({

   dots: false,
           infinite: false,
           slidesToShow: 4,
           slidesToScroll: 1,
           autoplay: true,
           autoplaySpeed: 3000,
           //pauseOnHover: true,

           responsive: [
           {
           breakpoint: 1024,
                   settings: {
                   slidesToShow: 1,
                           slidesToScroll: 1,
                   }
           },
           {
           breakpoint: 600,
                   settings: {
                   slidesToShow: 1,
                           slidesToScroll:1
                   }
           },
           {
           breakpoint: 480,
                   settings: {
                   slidesToShow: 1,
                           slidesToScroll: 1
                   }
           }

           ]
  });
           $(".featureone").slick({

   dots: false,
           infinite: false,
   slidesToShow: 1,
           slidesToScroll: 1,
           vertical:true,
           autoplay: true,
           autoplaySpeed: 3000,
           verticalSwiping: true,
           //pauseOnHover: true,

           responsive: [
           {
           breakpoint: 1024,
                   settings: {
                           slidesToShow: 1,
           slidesToScroll: 1,
           }
           },
                   {
                   breakpoint: 600,
                           settings: {
           slidesToShow: 1,
                   slidesToScroll:1
                   }
           },
                           {
           breakpoint: 480,
   settings: {
           slidesToShow: 1,
                   slidesToScroll: 1
                   }
                   }

           ]


                   });
                   /* ======= 2 ======== */
                   $(".featuretwo").slick({

   dots: false,
                                   infinite: false,
                                   slidesToShow: 1,
                                           slidesToScroll: 1,
                                           vertical:true,
                                           autoplay: true,
                                           autoplaySpeed: 4000,
                                           verticalSwiping: true,
                                                   //pauseOnHover: true,

                                                           responsive: [
           {
                                           breakpoint: 1024,
                                                   settings: {
                                                           slidesToShow: 1,
                                           slidesToScroll: 1,
                                           }
                                                   },
           {
                                                           breakpoint: 600,
                                                   settings: { 
                                           slidesToShow: 1,
                   slidesToScroll:1
                                                   }
                   },
                                                   {
                                                   breakpoint: 480,
                                                   settings: {
                                                   slidesToShow:1,
                                                   slidesToScroll: 1
                                                   }
           }

                                                   ]


                                                           });
                                                           /* ====== 3 ======= */
                                                   $(".featurethree").slick({

                                                   dots: false,
                                                           infinite: false,
                                                                   slidesToShow: 1,
                                                   slidesToScroll: 1,
                                                           vertical:true,
                                                           autoplay: true,
                                                                   autoplaySpeed: 4500,
                                                           verticalSwiping: true,
                                                   //pauseOnHover: true,

                                                           responsive: [
                                                           {
                                                                   breakpoint: 1024,             settings: {
                                                                   slidesToShow: 1,
                                                                   slidesToScroll: 1,
                                                                           }
                                                                                   },
                                                                   {
                                                                                   breakpoint: 600,
                                                                           settings: {
                                                                                   slidesToShow: 1,
                                                                   slidesToScroll:1
                                                                           }
                                                                           },
                                                                           {
                                                                           breakpoint: 480,
                                                                                           settings: {
                                                                                   slidesToShow: 1,
                                                                                           slidesToScroll: 1
                                                                           }
                                                                                   }

                                                                           ]
                                                                             

                                                                   });
                                                                           /* ====== 4 ======= */
                                                           $(".featurefour").slick({

                                                           dots: false,
                                                                   infinite: false,
                                                                           slidesToShow: 1,
                                                           slidesToScroll: 1,
                                                                   vertical:true,
                                                                   autoplay: true,
                                                                   autoplaySpeed: 3500,
                                                           verticalSwiping: true,
                                                                   // pauseOnHover: true,

                                                                           responsive: [
                                                                   {
                                                           breakpoint: 1024,
                                                           settings: {
                                                           slidesToShow: 1,
                                                           slidesToScroll: 1,
                                                           }
                                                           },
                                                           {
                                                           breakpoint: 600,
                                                                   settings: {
                                                                   slidesToShow: 1,
                                                                   slidesToScroll:1
                                                           }
                                                                   },
           {
                                                                   breakpoint: 480,
                                                           settings: {
                                   slidesToShow: 1,
              slidesToScroll: 1
                   }
           }

           ]


   });<!-- Trending 1 -->
        $(".trendingone").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,
verticalSwiping: true,
       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
         <!-- Trending 2 -->
        $(".trendingtwo").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
        <!-- Trending 3 -->
        $(".trendingthree").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

      //  pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
         <!-- Trending 4 -->
        $(".trendingfour").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
         <!-- Trending 5 -->
        $(".trendingfive").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
         <!-- Trending 6 -->
        $(".trendingsix").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

        //pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
         <!-- Trending 7 -->
        $(".trendingseven").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
        <!-- Trending 8 -->
        $(".trendingeight").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

        //pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
        <!-- Trending 9 -->
        $(".trendingnine").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
	  
        $(".trendingten").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
        <!-- Trending 11 -->
        $(".trendingeleven").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
        <!-- Trending 12 -->
        $(".trendingtwelve").slick({
        
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
              vertical:true,
      autoplay: true,
      autoplaySpeed: 4500,

       // pauseOnHover: true,

      responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 1,
              slidesToScroll:1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }

]
    });
	  
	  
  });
      /* slick Vertical Begins */
	
      /* slick Vertical Ends */
	
        </script>
        <script>
                                                                                             $.fn.equalHeights = function(){
                                                                                             var max_height = 0;
                                                                                                     $(this).each(function(){
                                                                                             max_height = Math.max($(this).height(), max_height);
                                                                                             });
                                                                                                     $(this).each(function(){
                                                                                             $(this).height(max_height);
                                                                                             });
                                                                                                     };
                                                                                             $(document).ready(function(){
                                                                                     $('.flip-box').equalHeights();
                                                                                             $('.flip-box-front').equalHeights();
                                                                                             $('.flip-box-back').equalHeights();
                                                                                             $('.flip-box-back1').equalHeights();
                                                                                             $('.flip-box-back2').equalHeights();
                                                                                             $('.flip-box-back3').equalHeights();
                                                                                             $('.flip-box-back4').equalHeights();
                                                                                             });</script>
        <script>



                                                                                            $(document).ready(function() {

                                                                                    $("#latest-blog-new").owlCarousel({

                                                                                    //autoPlay: 3000, //Set AutoPlay to 3 seconds
                                                                                    //items : 4,
                                                                                    itemsDesktop : [1199, 4],
                                                                                            itemsDesktopSmall : [979, 4],
                                                                                            loop: true,
                                                                                            items: 4,
                                                                                            margin: 4,
                                                                                            autoplay: true,
                                                                                            dots:false,
                                                                                            nav:true,
                                                                                            autoplayTimeout: 8500,
                                                                                            smartSpeed: 450,
                                                                                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                                                                            responsive:{
                                                                                            0:{
                                                                                            items:1
                                                                                            },
                                                                                                    600:{
                                                                                                    items:3
                                                                                                    },
                                                                                                    1000:{
                                                                                                    items:4
                                                                                                    }
                                                                                            }

                                                                                    });
                                                                                            });</script>

        <script>

                                                                                            $(document).ready(function() {
                                                                                    // executes when HTML-Document is loaded and DOM is ready
                                                                                    $(".push-down-page").hide(800);
                                                                                            $(".navbar .dropdown-toggle").hover(function () {

                                                                                    $(this).parent().toggleClass("show");
                                                                                            $(this).parent().find(".dropdown-menu").toggleClass("show", );
                                                                                            $(".push-down-page").show(800);
                                                                                    });
                                                                                            // hide the menu when the mouse leaves the dropdown
                                                                                            $(".navbar .dropdown-menu").mouseleave(function() {
                                                                                    $(this).removeClass("show");
                                                                                            $(".push-down-page").hide(800);
                                                                                    });
                                                                                            $(".navbar").mouseleave(function() {
                                                                                    //$('.push-down-page').removeClass();
                                                                                    $(".push-down-page").hide(800);
                                                                                    });
                                                                                            $(window).resize(function(){
                                                                                    if ($(window).width() >= 980){
                                                                                    $(".push-down-page").hide(800);
                                                                                            // when you hover a toggle show its dropdown menu
                                                                                            $(".navbar .dropdown-toggle").hover(function () {
                                                                                    $(this).parent().toggleClass("show");
                                                                                            $(this).parent().find(".dropdown-menu").toggleClass("show");
                                                                                            $(".push-down-page").show(800);
                                                                                    });
                                                                                            $(".navbar .dropdown-menu").mouseleave(function() {
                                                                                    $(this).removeClass("show");
                                                                                            $(".push-down-page").hide(800);
                                                                                    });
                                                                                    }
                                                                                });
                                                                                            });</script> 

        <script>
                                                                                            window.onscroll = function() {myFunction()};
                                                                                            var navbar = document.getElementById("navbar");
                                                                                            var sticky = navbar.offsetTop;
                                                                                            function myFunction() {
                                                                                            if (window.pageYOffset >= sticky) {
                                                                                            navbar.classList.add("sticky")
                                                                                            } else {
                                                                                            navbar.classList.remove("sticky");
                                                                                            }
                                                                                            }
        </script>
        <!-- Menu Hover Script -->
        < <script>
                                                                                    $(document).ready(function() {
                                                                                    $('.dropdown-menu-sub').hide();
                                                                                            $('li.nav-sub-one').hover(function() {
                                                                                    $(this).find('.dropdown-menu-sub').stop(true, true).delay(200).show(500);
                                                                                            }, function() {
                                                                                    $(this).find('.dropdown-menu-sub').stop(true, true).delay(200).hide(500);
                                                                                            });
                                                                                            });
                                                                                            $(document).ready(function() {
                                                                                    $('.dropdown-menu-sub-two').hide();
                                                                                            $('li.nav-sub-two').hover(function() {
                                                                                    $(this).find('.dropdown-menu-sub-two').stop(true, true).delay(200).show(500);
                                                                                            }, function() {
                                                                                    $(this).find('.dropdown-menu-sub-two').stop(true, true).delay(200).hide(500);
                                                                                            });
                                                                                            });



        </script> 

    </body>
</html>
