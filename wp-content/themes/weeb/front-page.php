<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<!--   slider  -->
<section class="sliderwrap wrapper">
	<div class="container">
		<div class="bx-outer">
			<ul class="bxslider">
					<?php
						$args = array( 'posts_per_page' => 10, 'cat' => 42 );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ){ setup_postdata($post);
					?>
						<li style="background:url(<?php echo get_the_post_thumbnail_url( $post, 'slider' );?>) no-repeat 50% 50%;">
							<div class="slide-info">
								<div class="slide-title"><?php the_title();?></div>
								<div class="slide-text"><?php the_content();?></div>
								<div class="slider-links">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>?p=4" class="go-catalog">В каталог</a><a href="#popup" class="go-phone fancybox-inline">Заказать по телефону</a>
								</div>
							</div>
							
						</li>
					<?php
								}
								wp_reset_postdata();
					?>
			</ul>		
		</div>
		
		<div class="side-slides">
		
		<a href="<?php the_field( 'ssil_ban' ); ?>"><img src="<?php the_field( 'home_baner1' ); ?>" alt="" /></a>
		<a href="<?php the_field( 'ssil_ban2' ); ?>"><img src="<?php the_field( 'home_baner2' ); ?>" alt="" /></a>
		
		</div>
	
	</div>
</section>


<!--   features  -->
<section class="features wrapper">
	<div class="container">
		<ul>
			<li><span class="icon"></span><span class="digit">225</span> Довольных клиентов<br /> за 3 года работы</li>
			<li><span class="icon"></span><span class="digit">10 лет</span> Гарантия на продукцию <br />нашего магазина</li>
			<li><span class="icon"></span><span class="digit">до 1 дня</span> Сроки доставки <br />и установки печей <br />и котлов</li>
			<li><span class="icon"></span><span class="digit">на 17%</span> Дешевле, <br />чем у конкурентов</li>
		</ul>
	</div>
</section>


<!--  catalog   categories  -->
<section class="catalog-cats wrapper">
	<div class="container">
		<div class="section-title"><span>Каталог продукции</span></div>
		
		<div class="home-category category1">
			<?php the_field( 'home_cat1' ); ?>
		</div>
		
		<div class="home-category category2">
			<?php the_field( 'home_cat2' ); ?>
		</div>
		
		<div class="home-category category3">
			<?php the_field( 'home_cat3' ); ?>
		</div>
		
		<div class="home-category category4">
			<?php the_field( 'home_cat4' ); ?>
		</div>
		
		<div class="home-category category5">
			<?php the_field( 'home_cat5' ); ?>
		</div>		
		
		<div class="home-category category6">
			<?php the_field( 'home_cat6' ); ?>
		</div>
		
		<div class="home-category category7">
			<?php the_field( 'home_cat7' ); ?>
		</div>
		
		<div class="home-category category8">
			<?php the_field( 'home_cat8' ); ?>
		</div>
		
	</div>
</section>


<!--  popular  -->
<section class="popular-products wrapper">
	<div class="container">
		<div class="widget-title"><span>Популярные товары</span></div>
		<?php echo do_shortcode('[products limit="10" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>?p=154" class="show-products">Смотреть все</a>
	</div>
</section>





<?php get_sidebar('about');?>



<!--   reviews  -->
<section class="reviews-carousel wrapper">
	<div class="container">
	<div class="widget-title"><span>Отзывы наших клиентов</span></div>
	<div class="reviews-pad">
		<ul class="bx-reviews">
					<?php
						$args = array( 'posts_per_page' => 10, 'cat' => 67 );
						$lastposts = get_posts( $args );
						foreach( $lastposts as $post ){ setup_postdata($post);
					?>
						<li >
							<div class="img-pad"><?php the_content();?></div>
							<div class="info-pad">
								<div class="review-quote"><?php echo get_the_excerpt(); ?></div>
								<div class="review-name"><?php the_title(); ?></div>
							</div>
						</li>
					<?php
								}
								wp_reset_postdata();
					?>
		</ul>
	</div>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>?cat=67" class="more-reviews">Смотреть всё</a>
	</div>
</section>


<!--    brands  -->
<section class="home-brands wrapper">
	<div class="container">
	<div class="widget-title"><span>Наши партнеры</span></div>
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
	
  jQuery('.bxslider').bxSlider({
	  controls: false,
	  pager:true,
	  mode: 'horizontal',
	  auto: true,
	  speed: 1000
  });
  
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
  
 jQuery('.popular-products ul.products ').bxSlider({
		  	mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 30,
			infiniteLoop: true,
			slideWidth: 270,
			minSlides: 1,
			maxSlides: 4,
			speed: 800,
			pager:false
	  });
 jQuery('.bx-reviews ').bxSlider({
		  	mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 30,
			infiniteLoop: true,
			slideWidth: 370,
			minSlides: 1,
			maxSlides: 3,
			speed: 800,
			pager:false
	  });
	  

	  

	  
});
</script>

<?php get_footer();
