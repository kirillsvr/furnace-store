<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!--   footer  form  -->
<section class="footer-form wrapper">
	<div class="container">
		<div class="form-info">
			<div class="form-title">У вас возникли вопросы?</div>
			<div class="form-subtitle">Оставьте заявку, наши менеджеры позвонят вам и ответят на все ваши вопросы</div>
		</div>
		<div class="form-pad">
			<?php echo do_shortcode('[contact-form-7 id="54" title="bottomform"]'); ?>
		</div>
	</div>
</section>


<!--   footer shop menu  -->
<section class="fs-menu wrapper">
	<div class="container">
		<div class="column column1">
			<div class="widget">
				<div class="widget-title"><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-doma/">Печи для дома</a></div>
				<ul>
				<li><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-doma/otopitelnye-pechi/">Отопительные печи</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-doma/pechi-kaminy/">Печи-камины</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-doma/portativnye-pechi/">Портативные печи</a></li>
				</ul>
			</div>
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-bani-i-sauny/">Печи для бани и сауны</a></div>
				<ul>
				<li><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-bani-i-sauny/drovyanye-pechki-kamenki/">Дровяные печки-каменки</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-bani-i-sauny/elektricheskie-pechi-dlya-bani-i-sauny/">Электрические печи для бани и сауны</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/pechi-dlya-bani-i-sauny/gazovye-pechi-dlya-bani/">Газовые печи для бани</a></li>
				</ul>
			</div>
		</div>
		<div class="column column2">
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/kaminy/">Камины</a></div>
				<ul>
				<li><a href="http://pechi.kbportfolio.ru/product-category/kaminy/kaminnye-topki/">Каминные топки</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/kaminy/oblitsovki/">Облицовки</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/kaminy/elektricheskie-kaminy/">Электрические камины</a></li>
				</ul>
			</div>
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/kotly/">Котлы</a></div>
			</div>
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/dymohody/">Дымоходы</a></div>
			</div>
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/pechnoe-lite/">Печное литье</a></div>
			</div>
		</div>
		<div class="column">
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/ognezashhita/">Огнезащита</a></div>
			</div>
			<div class="widget">
				<div class="widget-title"> <a href="http://pechi.kbportfolio.ru/product-category/aksessuary/">Аксессуары</a></div>
				<ul>
				<li><a href="http://pechi.kbportfolio.ru/product-category/aksessuary/tovary-dlya-drovyanyh-kamenok/">Товары для дровяных каменок</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/aksessuary/tovary-dlya-kaminnyh-topok/">Товары для каминных топок</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/aksessuary/tovary-dlya-parogeneratorov/">Товары для парогенераторов</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/aksessuary/tovary-dlya-pechej-i-kotlov/">Товары для печей и котлов</a></li>
				<li><a href="http://pechi.kbportfolio.ru/product-category/aksessuary/tovary-dlya-elektricheskih-kamenok/">Товары для электрических каменок</a></li>
				</ul>
			</div>
		</div>
		
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-menu.jpg" alt="" class="fs-img" />
		
	</div>
</section>

<!--  footer menu  -->
<section class="fmenu wrapper">
	<div class="container">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'footer-menu',
						'theme_location' => 'primary',
						'container' => ''
					) );
				?>
	</div>
</section>

<!--  footer  -->
<footer class="footer wrapper">
	<div class="container">
	
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="" /></a>
		
		<div class="phone-block">
			<?php echo do_shortcode('[content_block id=38]'); ?>
			<a href="#popup" class="fancybox-inline">Заказать звонок</a>
		</div>
		
		<div class="time-block">
			<?php echo do_shortcode('[content_block id=40]'); ?>
		</div>
		
		<div class="adr-block">
			<?php echo do_shortcode('[content_block id=47]'); ?>
		</div>
		
		<div class="socials">
			<?php echo do_shortcode('[content_block id=49]'); ?>
		</div>
		
		<div class="credits-pad">
		
			<div class="copyright">© 2008—2021 «pechi.kbportfolio.ru»</div>
			
			<div class="credit-links">
			<?php echo do_shortcode('[content_block id=45]'); ?>
			</div>
			
			<!--div class="credits">Дизайн и разработка сайта - Студия дизайн KirillB</div-->
			
		</div>
		
	</div>
</footer>


<!--  form popup callback  -->
<div style="display:none" class="fancybox-hidden">
    <div id="popup">
        <?php echo do_shortcode('[contact-form-7 id="83" title="popupform"]'); ?>
    </div>
</div>


<!--  form popup buy  -->
<div style="display:none" class="fancybox-hidden">
    <div id="buyform">
        <?php echo do_shortcode('[contact-form-7 id="152" title="buyform"]'); ?>
    </div>
</div>

<!--  form popup buy 2 -->
<div style="display:none" class="fancybox-hidden">
    <div id="buyform2">
        <?php echo do_shortcode('[contact-form-7 id="153" title="buyform_copy"]'); ?>
    </div>
</div>

<!--  policy -->
<div style="display:none" class="fancybox-hidden">
    <div id="policy">
        <?php echo do_shortcode('[content_block id=101]'); ?>
    </div>
</div>



<!--  phone masked input  -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function() {
        jQuery(".text-863 input").mask("+7(999) 999-99-99");
        jQuery(".text-712 input").mask("+7(999) 999-99-99");
    });
</script>
	
	
<script>
jQuery(".cat-item-pad .button-buy").click(function(){
	var $tempweeb = jQuery(this).parent().find(".cat-item-title a").html();
	//console.log($tempweeb);
	jQuery("#dname").val($tempweeb);
	jQuery(".form-title .dynamic-name").html($tempweeb);
});

jQuery(".column-buy .button-buy").click(function(){
	var $tempweeb2 = jQuery(".product-title span.pname").html();
	//console.log($tempweeb);
	jQuery("#dname").val($tempweeb2);
	jQuery(".form-title .dynamic-name").html($tempweeb2);
});

</script>
	
	

<?php wp_footer(); ?>

</body>
</html>
