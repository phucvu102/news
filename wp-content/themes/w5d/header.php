<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="content-language" content="vi" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmgp.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-4.1.0/css/font-awesome.css" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?php echo time();?>" rel="stylesheet" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css" rel="stylesheet" />
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>
<body>
<header class="kun-header">
	<section class="wrapper">
		<section class="logo">
			<figure>
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo $image[0]?>" /></a>
			</figure>
		</section><!-- .logo -->
		<nav class="navigation" id="kun-nav-responsive">
			<?php wp_nav_menu( 
			array( 
				'theme_location' => 'primary-menu', 
				'container' => 'false', 
				'menu_id' => 'header-menu', 
				'menu_class' => 'main'
			) 
			); ?>
			
		</nav><!-- .navigation -->
		<section class="search">
			<form class="main-search" action = '<?php echo get_site_url() ?>'>
				<i class="fa fa-search"></i>
				<input type="text" name="s" value="" class="keyword" autocomplete="off" />
			</form>
		</section><!-- .search -->
		<button type="button" class="navbar-toggle" id="kun-navbar-responsive">
			<i class="fa fa-bars"></i>
		</button>
		<section class="clear"></section>
	</section><!-- .wrapper -->
	<section class="clear"></section>
</header><!-- .kun-header -->