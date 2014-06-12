<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory')?>/bootstrap_311/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/font_awesome/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_directory')?>/css/bill.css" rel="stylesheet" media="screen"> 
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/ie9_bill.css">
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <link href="css/ie9_patriots.css" rel="stylesheet" media="screen"> 
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-inverse" role="navigation">
	    <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header" >
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="#"><div class="cube"></div> &nbsp;bill cimino</a>
	      </div>

	      <!-- Collect the nav links, forms, and other content for toggling -->	
	      <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'nav navbar-nav' ) ); ?>
	    </div><!-- /.container-fluid -->
	 </nav>

<!-- 	<header id="header" role="banner">
		<section id="branding">
			<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'bill_cimino_theme' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
		</section>
	</header> -->