<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

	<!-- open .site-content -->
	<section class="site-content bg_day">
		<!-- open .container -->
		<div class="container">
			<?php get_sidebar(); ?>
			
			<!-- open .workspace -->
			<div class="workspace">


				
				<!-- open .js_outside -->
				<div class="js_outside">

					<a href="#" class="go-btn go-inside">ВНУТРЕННИЕ ИНТЕРЬЕРЫ</a>

					<div class="day_group">
						<a href="#" class="day-switch day-switch_night"></a>
						<a href="#" class="day-switch day-switch_day"></a>
					</div>

					<a href="#" class="show-info show-info_lightbox" data-modal="modal__home_lightbox">СВЕТОВОЙ КОРОБ</a>
					<a href="#" class="show-info show-info_letters" data-modal="modal__home_tablo">ОБЬЕМНЫЕ БУКВЫ</a>
					<a href="#" class="show-info show-info_banner" data-modal="modal__home_tablo">баннер</a>
					<a href="#" class="show-info show-info_stella" data-modal="modal__home_tablo">ПИЛОН/СТЕЛА</a>
					<a href="#" class="show-info show-info_sign" data-modal="modal__home_tablo">ДОМОВОЙ ЗНАК</a>
					<a href="#" class="show-info show-info_flag" data-modal="modal__home_tablo">ФЛАГ-ШТОК</a>
					<a href="#" class="show-info show-info_stander" data-modal="modal__home_tablo">ШТЕНДЕР</a>
					<a href="#" class="show-info show-info_tablo" data-modal="modal__home_tablo">СВЕТОДИОДНОЕ ТАБЛО</a>
					<a href="#" class="show-info show-info_transport">ОКЛЕЙКА ТРАНСПОРТА</a>
				</div>
				<!-- close .js_outside -->
				<!-- open .js_inside -->
				<div class="js_inside">
					<a href="#" class="go-btn go-outside">ВНЕШНИЕ ИНТЕРЬЕРЫ</a>

					<a href="#" class="show-info show-info_plate" data-modal="modal__home_lightbox">таблички</a>
					<a href="#" class="show-info show-info_x-banner" data-modal="modal__home_tablo">х-баннер</a>
					<a href="#" class="show-info show-info_inside-stand" data-modal="modal__home_tablo">информационный стенд </a>
					<a href="#" class="show-info show-info_signboard" data-modal="modal__home_tablo">интерьерная вывеска</a>
					<a href="#" class="show-info show-info_inside-lightbox" data-modal="modal__home_tablo">сверхтонкий световой короб</a>
				</div>
				<!-- close .js_inside -->
				
			</div>
			<!-- close .workspace -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .site-content -->

<?php get_footer(); // подключаем footer.php ?>