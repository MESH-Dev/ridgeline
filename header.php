<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fonts - Astoria Sans
	================================================== -->
	<link rel="stylesheet" href="https://use.typekit.net/chf6afp.css">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<script>
		// Global variable setup
		var $dir = '<?php echo get_template_directory_uri(); ?>';  
		var $home = '<?php echo esc_url( home_url( '/' ) ); ?>';
		var $pid = '<?php echo $post->ID ?>';
	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
 <div class="line"></div>
	<header>
		<div class="container">

			<div class="row">
				<div class="gateway-nav">
					<nav>
						<ul>
							<li>
								<a href="#">
									About
								</a>
							</li>
							<li>
								<a href="#">
									Contact
								</a>
							</li>
					</nav>
				</div>
				<div class="columns-3">
					<div class="logo">
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src='<?php echo get_template_directory_uri("/"); ?>/img/Ridgeline_Logo@2x.png'>
							</a>
						</h1>
					</div>
				</div>
				<div class="columns-9">
					<nav class="main-navigation">
						<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
					</nav>
				</div>
			</div>

		</div>
	</header>
