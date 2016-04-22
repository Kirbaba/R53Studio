<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
						'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
						'container'=> false, // обертка списка, false - это ничего
						'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
				  		'menu_id' => 'bottom-nav', // id для ul
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args); // выводим нижние меню
					?>
				</div>
			</div>
		</div>
	</footer>

	<!-- open .model__home_lightbox -->
	<div class="modal__home modal__home_lightbox">
		<!-- open .container -->
		<div class="container">
			<!-- open .modal__home_body -->
			<div class="modal__home_body">
			<a href="" class="modal__home_close"></a>
				<h3>СВЕТОДИОДНОЕ ТАБЛО</h3>
				<p>Светодиодное табло – это эффективный маркетинговый ход и надежное средство подачи информации. Изображение на светодиодном приборе будет различимо даже при расстоянии в 20 до 100 метров.</p>
				
				<div class="owl-carousel owl-theme owl_modal">
					<a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="modal__home_lightbox" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
					</a>
					<a href="<?php bloginfo('template_directory'); ?>/img/trade-center-day.jpg" data-lightbox="modal__home_lightbox" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/trade-center-day.jpg" alt="" />
					</a>
					<a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="modal__home_lightbox" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
					</a>
					<a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="modal__home_lightbox" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
					</a>
				</div>

				<a href="#" class="modal__home_buy">Заказать</a>
				<a href="#" class="modal__home_more">Узнать подробнее</a>
			</div>
			<!-- close .modal__home_body -->
		</div>
		<!-- close .container -->
		
	</div>
	<!-- close .model__home_lightbox -->

	<!-- open .model__home_lightbox -->
	<div class="modal__home modal__home_tablo">
		<!-- open .container -->
		<div class="container">
			<!-- open .modal__home_body -->
			<div class="modal__home_body">
			<a href="" class="modal__home_close"></a>
				<h3>СВЕТОДИОДНОЕ ТАБЛО</h3>
				<p>Светодиодное табло – это эффективный маркетинговый ход и надежное средство подачи информации. Изображение на светодиодном приборе будет различимо даже при расстоянии в 20 до 100 метров.</p>
				
				<div class="owl-carousel owl-theme owl_modal">
					<a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="modal__home_tablo" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
					</a>
					<a href="<?php bloginfo('template_directory'); ?>/img/trade-center-night.jpg" data-lightbox="modal__home_tablo" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/trade-center-night.jpg" alt="" />
					</a>
					<a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="modal__home_tablo" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
					</a>
					<a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="modal__home_tablo" class="owl_modal__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
					</a>
				</div>

				<a href="#" class="modal__home_buy">Заказать</a>
				<a href="#" class="modal__home_more">Узнать подробнее</a>
			</div>
			<!-- close .modal__home_body -->
		</div>
		<!-- close .container -->
		
	</div>
	<!-- close .model__home_lightbox -->


<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>