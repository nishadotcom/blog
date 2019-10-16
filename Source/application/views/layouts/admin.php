<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
    <head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Blog E-Advisor</title>
		<link rel="icon" type="image/png" href="/assets/images/ci-icon.png" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/config.js"></script>
    </head>
    <body>
		<?php 
		$route 	= $this->router->fetch_class();
		?>
		<!-- top of the page -->
		<div class="navbar navbar-default navbar-fixed-top" id="mainnav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>">Blog</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php echo ($this->uri->segment(1) == '') ? 'active' : ''; ?>"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="<?php echo ($this->uri->segment(1) == 'category') ? 'active' : ''; ?>"><a href="<?php echo base_url().'category'; ?>">Category</a></li>
						<li class="<?php echo ($this->uri->segment(1) == 'article') ? 'active' : ''; ?>"><a href="<?php echo base_url().'article'; ?>">Article</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		
		<!-- Page Header / Title -->
		<div class="header">
			<div class="container">
				<h1><?php echo $template['title']; ?></h1>
			</div>
		</div>

		<!-- center of the page -->
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<?php echo $template['body']; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- bottom of the page -->
		<div class="footer">
			<div class="footer-menu">
				<div class="container">
					<div class="row bcit50">
						<ul class="nav nav-pills">
							<li class=""><a href="#">Policies</a></li>
							<li class=""><a href="#">About</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<p class="text-center">Blog <a href="#">ONIZF</a></p>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
		<script>tinymce.init({selector:'textarea'});</script>-->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
		
		<?php 
		echo ($route == strtolower('article')) ? '<script type="text/javascript" src="'.base_url().'assets/js/crud/article.js"></script>' : '';
		echo ($route == strtolower('category')) ? '<script type="text/javascript" src="'.base_url().'assets/js/crud/category.js"></script>' : '';
		?>
				
    </body>
</html>
