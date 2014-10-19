<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Favicon -->
		<link rel="icon" href="images/favicon.png">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700|Open+Sans:300italic,400italic,600italic,400,300,600,700|VT323' rel='stylesheet' type='text/css'>

		<!-- Import Font Awesome -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css">

		<!-- Custom styles for this template -->
		<!-- <link href="css/style.css" rel="stylesheet"> -->

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse" data-offset="60">
			
	<header role="banner">

		<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="overlay">
		    <div class="container">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php if (is_front_page()) { echo "#intro"; } else { echo home_url(); } ?>"><i class="fa fa-code"></i> Rafa Ramos</a>
		      </div>
		      <div class="navbar-collapse collapse navbar-right">
		      <?php if (is_front_page()) { ?>
		        <ul class="nav navbar-nav">
		          <li style="display: none;"><a href="#intro">Início</a></li>
		          <li><a href="#sobre">Sobre</a></li>
		          <li><a href="#portfolio">Portfolio</a></li>
		          <li><a href="#blog">Blog</a></li>
		          <li><a href="#contato">Contato</a></li>
		        </ul>
		      <?php } else { wp_bootstrap_main_nav(); } ?>
		      </div><!--/.nav-collapse -->
		    </div>
		  </div>
		</div><!-- end .navbar -->
	
	</header> <!-- end header -->
