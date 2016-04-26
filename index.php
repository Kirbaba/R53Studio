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
					<a href="#" class="show-info show-info_letters" data-modal="modal__home_letters">ОБЬЕМНЫЕ БУКВЫ</a>
					<a href="#" class="show-info show-info_banner" data-modal="modal__home_banner">баннер</a>
					<a href="#" class="show-info show-info_stella" data-modal="modal__home_stella">ПИЛОН/СТЕЛА</a>
					<a href="#" class="show-info show-info_sign" data-modal="modal__home_sign">ДОМОВОЙ ЗНАК</a>
					<a href="#" class="show-info show-info_flag" data-modal="modal__home_flag">ФЛАГ-ШТОК</a>
					<a href="#" class="show-info show-info_stander" data-modal="modal__home_stander">ШТЕНДЕР</a>
					<a href="#" class="show-info show-info_tablo" data-modal="modal__home_tablo">СВЕТОДИОДНОЕ ТАБЛО</a>
					<a href="#" class="show-info show-info_transport" data-modal="modal__home_transport">ОКЛЕЙКА ТРАНСПОРТА</a>
				</div>
				<!-- close .js_outside -->
				<!-- open .js_inside -->
				<div class="js_inside">
					<a href="#" class="go-btn go-outside">ВНЕШНИЕ ИНТЕРЬЕРЫ</a>

					<a href="#" class="show-info show-info_plate" data-modal="modal__home_plate">таблички</a>
					<a href="#" class="show-info show-info_x-banner" data-modal="modal__home_x-banner">х-баннер</a>
					<a href="#" class="show-info show-info_inside-stand" data-modal="modal__home_inside-stand">информационный стенд </a>
					<a href="#" class="show-info show-info_signboard" data-modal="modal__home_signboard">интерьерная вывеска</a>
					<a href="#" class="show-info show-info_inside-lightbox" data-modal="modal__home_inside-lightbox">сверхтонкий световой короб</a>
				</div>
				<!-- close .js_inside -->
				
			</div>
			<!-- close .workspace -->
		</div>
		<!-- close .container -->
		<?= do_shortcode('[partners]') ?>
	</section>
	<!-- close .site-content -->

	<!-- open .stock -->
	<section class="stock">
		<!-- open .container -->
		<div class="container">
			<!-- open .stock__baner -->
			<div class="stock__baner">
				<img src="<?php bloginfo('template_directory'); ?>/img/152-6302-offer-ribbon.png" alt="" />
				<h3>Успей заказать наружную рекламу<br /> до 1 июля 2016 <br />	 и получи <span class="color_red">дизайн в подарок</span></h3>
				<div class="clockContainer">
				<h2>До конца акции осталось:</h2>
				<div class="clock"></div>
			</div>
			</div>
			<!-- close .stock__baner -->
			<!-- open .stock__form -->
			<div class="stock__form">
				<h4>Быстрый расчет стоимости заказа</h4>
				<p>Оставьте заявку на бесплатную консультацию</p>
				<form action="<?= get_bloginfo('url'); ?>/wp-admin/admin-post.php?action=add_order" method="POST" enctype="multipart/form-data">
					<input type="text" name="contacts_name" class="stock__form_input" placeholder="Ваше имя"/>
					<input type="email" name="contacts_email" class="stock__form_input"  placeholder="E-mail"/>
					<input type="tel" name="contacts_phone" class="stock__form_input"  placeholder="Номер телефона"/>
					<textarea name="contacts_comment" class="stock__form_text" placeholder="Сообщение"></textarea>
					<input type="hidden" name="action" value="add_order">
					<input type="file" id="stock__form_file" name="file" class="stock__form_file"  placeholder="прикрепить файл"/>
					<label for="stock__form_file"><span class="js_input_file">прикрепить файл</span></label>
					<button type="submit" class="stock__form_submit">заказать со скидкой! <span></span></button>
				</form>

			</div>
			<!-- close .stock__form -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .stock -->

<?php get_footer(); // подключаем footer.php ?>