<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Oznif</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
   <!-- <link rel="stylesheet" href="assets/css/owl.theme.css">  -->
	<!-- <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"> -->
	
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/social-icons.css">
	
	<!-- FontAwesome Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/roboto/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick-theme.css">
  
  </head>
  <body>
  	<?php 
	$route 	= $this->router->fetch_class();
	?>
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
	 
        <div class="container">
		<div class="row">
		<div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-6 p-2">
<div class="text-center">
		<a href="http://localhost/oznif/"><img src="<?php echo base_url();?>assets/img/logo.png" class="img-fluid"></a>
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
              <li class="nav-item active">
                <a class="nav-link " href="<?php echo base_url();?>" >
                  <i class="fa fa-cubes" aria-hidden="true"></i><span>Home</span>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#feature" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cubes" aria-hidden="true"></i><span>Feature</span>
                </a>

 <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <span class="drop-heading">Category 1</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3">
                <span class="drop-heading">Category 2</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
               <div class="col-md-3">
                <span class="drop-heading">Category 3</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
                  <div class="col-md-3">
                <span class="drop-heading">Category 4</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
            </div>
          </div>
        </div>


              </li>

              <li class="nav-item">
                <a class="nav-link" href="#services">
                  <i class="fa fa-cubes" aria-hidden="true"></i><span>Services</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  <i class="fa fa-cubes" aria-hidden="true"></i><span>Team</span>
                </a>
              </li>
			   <li class="nav-item ml-auto">
                		<button class="btn btn-primary pull-right contribute-btn"
onClick="window.open('<?php echo base_url().'article'; ?>','contribute')"
						 type="button">
  <i class="fa fa-info-circle" aria-hidden="true"></i>
  Contribute
</button>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->
	
    <!-- Services Section Start -->
    <section class="featured-section-padding featured-sec">
      <div class="container">
	  <div class="row">
	  <div class="col-md-12 p-0 p-md-1">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown text-left" data-wow-delay="0.3s">Featured Writers</h2>
          </div>
        </div>
        </div>
      </div>
	  
	  <div class="container">
	  <div class="row">
  <!-- 1 -->
  <div class="col-md-3 p-0 p-md-1">

<div id="feature-one" class="owl-carousel owl-theme">
    
    <div class="item">      
      <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/1.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back1">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back1">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back1">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

</div>

  </div>


  <!-- 2 -->
  <div class="col-md-3 p-0 p-md-1">
<div id="feature-two" class="owl-carousel owl-theme">
 
<div class="item">      
      <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/10.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back2">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back2">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/3.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back2">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/4.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

</div>


  </div>
  <!-- 3 -->
  <div class="col-md-3 p-0 p-md-1">
	  
<div id="feature-three" class="owl-carousel owl-theme">
 
<div class="item">      
      <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/3.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back3">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/4.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>


    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back3">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/11.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>


</div>

  </div>

  <!-- 4 -->
  <div class="col-md-3 p-0 p-md-1">
	  
<div id="feature-four" class="owl-carousel owl-theme">
 
<div class="item">      
      <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/12.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back4">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/13.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>

    <div class="item">
         <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">

    <div class="flip-box-back4">
      <h2>Lorem Ipsum</h2>
      <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter
    </p>
    </div>
  </div>
</div>
</a>
</div>

  <div class="item">      
  <a href="#">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="<?php echo base_url();?>assets/img/blog/14.jpg" alt="Paris" class="img-fluid">
    </div>
  </div>
</div>
</a>
</div>




</div>

  </div>
  <!-- Row Ends -->
</div>
  </div>
  <!-- Featured Ends  -->
    </section>
    <!-- Services Section End -->
  

    <!-- Team Section Start -->
    <section class="section-padding trending-topic">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
        <div class="section-header text-left">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Trending Topics</h2>
          </div>
        </div>
        </div>
		<div class="row">
		<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 p-0 p-md-2">
		<!-- Row 1 -->
		<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12 pr-0">
		<div class="trendingone slider">
      
		<div>
      <a href="#" target="_blank">
		<div class="topic-one blue-bg">
            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC1</a>
					    <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>

			</div>
      </a>
			</div>

					<div>

		<div class="topic-one blue-bg">
       <a href="#" target="_blank">
            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC1</a>
					    <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </a>
			</div>

			</div>
			</div>
		</div>

		
		
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
		
		<div class="trendingtwo slider">
		
		<div>
				<div class="topic-one greenlight-bg">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC2</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
			</div>
			</div>
					<div>
				<div class="topic-one greenlight-bg">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC2</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
			</div>
			</div>
		
		</div>
		</div>
		
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 pl-0">
		
		<div class="trendingthree slider">
<div>
				<div class="topic-one orange-bg">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC6</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
			</div>
			</div>
			
			<div>
				<div class="topic-one orange-bg">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC6</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
			</div>
			</div>
		
		</div>
		</div>
		
		</div>
		<!-- Row 2 -->
		<div class="row topic-top">
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12 pr-0">
				<div class="trendingfour slider">
<div>
	<div class="topic-one violet-bg">
            <div class="portfolio-item">
              <div class="shot-item">
			
             
				 
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC1</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
			</div>
			</div>
			<div>
	<div class="topic-one violet-bg">
            <div class="portfolio-item">
              <div class="shot-item">
			
             
				 
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC1</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
			</div>
			</div>
	</div>
		
		</div>
		
		<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">

<div class="trendingfive slider">
<div>
	<div class="topic-one blue-light-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC21</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
</div>

<div>
	<div class="topic-one blue-light-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC21</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
</div>

<div>
	<div class="topic-one blue-light-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC21</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
</div>

</div>

	
</div>
		
		<!-- ================ -->
		
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12 pl-0">
<div class="trendingsix slider">
<div>

	<div class="topic-one violetbg2">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC7</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
</div>

<div>

	<div class="topic-one violetbg2">
	            <div class="portfolio-item">
              <div class="shot-item">
				
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC7</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
</div>

</div>
		
		</div>
		
		</div>
		
		<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6  col-12 topic-top">
		
		<div class="trendingseven slider">
<div>

	<div class="topic-one blue-light-bg">
	            <div class="portfolio-item">
              <div class="shot-item">			
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC9</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	<div>

	<div class="topic-one blue-light-bg">
	            <div class="portfolio-item">
              <div class="shot-item">			
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC9</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	
	</div>
	

		</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6  col-12 topic-top pl-0">
				<div class="trendingeight slider">
<div>
		
	<div class="topic-one violetbg1">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC10</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	<div>
		
	<div class="topic-one violetbg1">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC10</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	
	</div>

		</div>
		
		</div>
		</div>
		
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2">
		<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  col-12 ">
<div class="trendingnine slider">
<div>

	<div class="topic-one blue-bg02">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC45</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	
</div>
<div>

	<div class="topic-one blue-bg02">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC45</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	
</div>
</div>

		</div>
		
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  col-12  topic-top">
		<div class="trendingnine slider">
<div>
	<div class="topic-one green-normal-bg">
	            <div class="portfolio-item">
              <div class="shot-item">

                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC456</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
					  <p></p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	<div>
	<div class="topic-one green-normal-bg">
	            <div class="portfolio-item">
              <div class="shot-item">

                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC456</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
					  <p></p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	</div>

		</div>
		
		
		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 topic-top">
				<div class="trendingnine slider">
<div>
			<div class="topic-two orange-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC5</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
		</div>
		<div>
			<div class="topic-two orange-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC5</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
		</div>
		
		</div>
		
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 pl-0 topic-top">
<div class="trendingnine slider">
<div>
	<div class="topic-two blue-light-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC6</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	<div>
	<div class="topic-two blue-light-bg2">
	            <div class="portfolio-item">
              <div class="shot-item">
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="#">Topic ABC6</a>
					  <p>lipsum as it is sometimes known, is dummy text used in laying out print</p>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
	</div>
	</div>
	
	</div>
		
		
		</div>
		</div>
		</div>
		</div>
      </div>
    </section>
    <!-- Team Section End -->
  
    <!-- Blog Section -->
    <section class="section-padding ">
      <!-- Container Starts -->
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 col-12 p-0">
        <div class="section-header text-left">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 blog-item p-0">
		  
		 

	
    <!-- blog Section End -->
<div id="latest-blog-new" class="owl-carousel owl-theme">

    <div class="item">
                <!-- Blog Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog/2.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <h2>Lorem Ipsum</h2>
          <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter</p>
                  </div>
                </div>
              </div>
            </div>
    </div>

    <div class="item">          <!-- Blog Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog/3.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <h2>Lorem Ipsum</h2>
          <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

              <div class="item">          <!-- Blog Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog/4.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <h2>Lorem Ipsum</h2>
          <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

              <div class="item">          <!-- Blog Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog/5.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <h2>Lorem Ipsum</h2>
          <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

              <div class="item">          <!-- Blog Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog/6.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <h2>Lorem Ipsum</h2>
          <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

              <div class="item">          <!-- Blog Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog/7.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <h2>Lorem Ipsum</h2>
          <p>lipsum as it is sometimes known, is dummy text used in laying out print, graphic 
    or web designs. The passage is attributed to an unknown typesetter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

</div>
        </div>
    </div>
      </div>
    </section>
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
    <script src="<?php echo base_url();?>assets/js/jquery-min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mixitup.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nav.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrolling-nav.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/nivo-lightbox.js"></script>     
    <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>      
    <script src="<?php echo base_url();?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
	<script src="<?php echo base_url();?>assets/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
  	<script type="text/javascript" src="<?php echo base_url();?>assets/js/sticky-sidebar.js"></script>
    <script type="text/javascript">

    var a = new StickySidebar('#left-sidebar', {
      topSpacing: 20,
      bottomSpacing: 20,
      containerSelector: '.container',
      innerWrapperSelector: '.sidebar__inner'
    });
  </script>
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
});
 </script>


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
                slidesToShow: 1,
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


      });
	  <!-- Trending 1 -->
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
	   <!-- Trending 10 -->
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
});
</script>
<script>



$(document).ready(function() {
 
  $("#latest-blog-new").owlCarousel({
 
      //autoPlay: 3000, //Set AutoPlay to 3 seconds
      //items : 4,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [979,4],

    loop: true,
    items: 4,
    margin: 4,
    autoplay: true,
    dots:false,
    nav:true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

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
 
});



</script>

<script type="text/javascript">
      $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
  if ($(window).width() >= 768){  

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
    // do something here
  } 
});  
  
});


    </script>
  </body>
</html>
