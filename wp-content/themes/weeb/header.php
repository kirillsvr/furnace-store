<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--   top  -->
<section class="top wrapper">
	<div class="container">
		<div class="col-left">
			<span class="label">Ваш город :</span> Пермь
		</div>
		
		<div class="col-right">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
						'container' => ''
					) );
				?>
		</div>
		
	</div>
</section>


<!--   header  -->
<header class="header wrapper">
	<div class="container">
	
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="" /></a>
		
		<div class="phone-block">
			<?php echo do_shortcode('[content_block id=38]'); ?>
			<a href="#popup" class="fancybox-inline">Заказать звонок</a>
		</div>
		
		<div class="time-block">
			<?php echo do_shortcode('[content_block id=40]'); ?>
		</div>
		
		<div class="search-block">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<input type="search" class="search-field" placeholder="Поиск по каталогу"  name="s" />
				<input type="submit" class="search-submit" value="" />
			</form>
		</div>
	
	</div>
</header>

<!--  shopmenu  -->
<section class="shopmenu wrapper">
	<div class="container">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu2',
						'theme_location' => 'secondary',
						'container' => ''
					) );
				?>
	</div>
</section>



						
					

