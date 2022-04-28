<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<!--  breadcrumbs  -->
		<div class="container">
		<?php breadcrumb_trail(); ?>
		</div>


<!--  main  -->
<main class="mainwrap wrapper">
	<div class="container">
		
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<div class="category-title"><?php single_cat_title(); ?></div>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			echo '<ul class="archive-loop">';
			while ( have_posts() ) : the_post();

				// get_template_part( 'content', get_post_format() );
				if (is_category(67)) {
				get_template_part( 'content', 'review' );	
				}
				else {
				get_template_part( 'content', 'intro' );
				}
			// End the loop.
			endwhile;
			echo '</ul>';

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( '<', 'twentyfifteen' ),
				'next_text'          => __( '>', 'twentyfifteen' ),
				// 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
		
	</div>
</main>




<!--  archive widget 1  -->
<section class="archive-widget1 wrapper">
	<div class="container">
		<div class="widget-title"><span>О нас</span></div>
		<div class="widget-body">
		<p>Мы работаем с 2021 года и являемся официальным дилером представленны брендов, работаем с соблюдение всех гарантийных<br /> обязательств, работаем только с надежными и аккуратными партнерами - транспортными компаниями, сервисными организациями</p>
		<ul>
			<li><p>575 печей и каминов <br />в наличии на складе</p></li>
			<li><p>Профессиональный <br />монтаж</p></li>
			<li><p>Гарантия до 10 лет <br />на всю продукцию</p></li>
			<li><p>Более 200 довольных <br />клиентов за 3 года <br />работы</p></li>
			<li><p>Доставим в любую <br />точку России</p></li>
			<li><p>Возможность <br />приобрести продукцию <br />в кредит</p></li>
		</ul>
		</div>
	</div>
</section>


<!--    brands  -->
<section class="home-brands wrapper">
	<div class="container">
	<div class="widget-title"><span>Интернет-магазин печей и каминов в Перми</span></div>
	<?php dynamic_sidebar( 'home-brands' ); ?>
	</div>
</section>



<!--  archive widget 3  -->
<section class="archive-widget3 wrapper">
	<div class="container">
		<div class="widget-title"><span>Интернет-магазин печей и каминов в Перми</span></div>
		<div class="widget-body">
		<p>Владельцы загородной недвижимости (дач и коттеджей) знают, что печи-камины – это не роскошь, а необходимость, особенно, если поблизости не имеется центрального отопления и собственной котельной. Желание иметь свой, хотя бы небольшой дом за городом вполне естественно для жителя мегаполиса. Однако не всегда есть возможность отапливать его без соответствующей техники.</p>
		<p><strong>Качественная печь-камин</strong> – это не только оборудование, предназначенное для отопления жилого помещения. Печь-камин - это статусная, имиджевая вещь, создающая в доме ни с чем не сравнимый комфорт. Печи и камины в Перми, как и других городах страны, играют большую роль при оформлении жилого интерьера, придавая ему определенный стиль – изысканный, аристократичный и комфортный. Известно, что у человека живой огонь традиционно ассоциируется с уютом еще с первобытных времен и сохраняется на генетическом уровне.</p>
		<p><a href="#">Интернет-магазин Печи-Камины</a> реализует большой ассортимент отопительного оборудования и сопутствующих товаров по привлекательным ценам. Специалисты нашей компании помогут подобрать и приобрести печь камин в Перми. В нашем каталоге вы можете найти печи-камины для любого типа помещения, под любой интерьер и на различный вкус. В ассортименте представлены лучшие печи-камины самых известных производителей, как отечественных, так и зарубежных.</p>
		<p>Подберите свою печь-камин, печь для бани, котлы или другое отопительное оборудование.</p>
		<p>Если говорить про отопительное оборудование, то печи-камины давно завоевали популярность в европейских странах, в том числе, тех, чей климат схож с российским. Во-первых, они компактны; во-вторых, характеризуются высоким коэффициентом полезного действия.</p>
		</div>
	</div>
</section>

<!-- bxSlider Javascript file -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.min.js"></script>
<script>
jQuery(document).ready(function(){ 
	jQuery('.pwb-row').bxSlider({
		  	mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 30,
			infiniteLoop: true,
			slideWidth: 170,
			minSlides: 1,
			maxSlides: 6,
			speed: 800,
			pager:false
	  });
	  
});
</script>


<?php get_footer(); ?>
