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


				<a href="#" class="go-inside">ВНУТРЕННИЕ ИНТЕРЬЕРЫ</a>

				<div class="day_group">
					<a href="#" class="day-switch day-switch_night"></a>
					<a href="#" class="day-switch day-switch_day"></a>
				</div>

				<a href="#" class="show-info show-info_lightbox">СВЕТОВОЙ КОРОБ</a>
				<a href="#" class="show-info show-info_letters">ОБЬЕМНЫЕ БУКВЫ</a>
				<a href="#" class="show-info show-info_banner">баннер</a>
				<a href="#" class="show-info show-info_stella">ПИЛОН/СТЕЛА</a>
				<a href="#" class="show-info show-info_sign">ДОМОВОЙ ЗНАК</a>
				<a href="#" class="show-info show-info_flag">ФЛАГ-ШТОК</a>
				<a href="#" class="show-info show-info_stander">ШТЕНДЕР</a>
				<a href="#" class="show-info show-info_tablo">СВЕТОДИОДНОЕ ТАБЛО</a>
				<a href="#" class="show-info show-info_transport">ОКЛЕЙКА ТРАНСПОРТА</a>
			</div>
			<!-- close .workspace -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .site-content -->

<?php get_footer(); // подключаем footer.php ?>