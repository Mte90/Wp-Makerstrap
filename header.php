<!DOCTYPE html>
<html>
    <head>
	<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf8" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700" rel="stylesheet" media="screen">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/makerstrap.complete.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" rel="stylesheet" media="screen, projection" />
	<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

	<nav class="navbar navbar-inverse navbar-default" role="navigation">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse">
		<?php wp_nav_menu( array( 'menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth' => 3, 'container' => false, 'walker' => new Bootstrap_Walker_Nav_Menu ) ); ?>
	    </div><!-- /.navbar-collapse -->
	</nav>

	<div id="main-container" class="container">

	    <?php bootstrapwp_breadcrumbs(); ?>
