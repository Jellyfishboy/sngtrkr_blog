<?php ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> <html l<?php language_attributes(); ?>> <!--<![endif]-->
<head>
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>
<meta name="description" content="<?php if ( is_single() ) {
	single_post_title('', true); 
	} else {
	bloginfo('name'); echo " - "; bloginfo('description');
	}
?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<!-- The little things -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" type="image/ico" href="<?php echo bloginfo('template_directory'); ?>/assets/images/icon.png">
    <link rel="author" type="text/plain" href="<?php echo bloginfo('template_directory'); ?>/humans.txt" />  
<!-- The little things -->

<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/screen.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/animations.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/bootstrap.css" />
<!-- Stylesheets -->

<!-- Load scripts quick smart -->
	<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/modernizr-2.6.2.js"></script>     
    <!--[if (lt IE 9) & (!IEMobile)]>
		<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/selectivizr-min.js"></script>
	<![endif]-->
<!-- Load scripts quick smart -->

	<?php wp_deregister_script('jquery');wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
	<div id="fb-root"></div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=438994976162502";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <header class="<?php if(is_front_page()) echo 'hero'; ?>" role="banner">
    	<div class="container">
    		<div class="row">
    			<div class="fivecol">
	    			<a href="/"><h1>Official Blog</h1></a>
	    			<h2>Insights into upcoming artists and releases, alongside new features and updates within the SNGTRKR platform.</h2>
	    		</div>
	    		<div class="sevencol last">
	    			<a href="http://www.sngtrkr.com" target="_blank"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/header.png" alt="SNGTRKR" /></a>
	    		</div>
			</div>
		</div>
		<div id="menu_bar">
			<div class="container">
				<div class="row">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</div>
			</div>
		</div>
    </header>
	    <div class="container">