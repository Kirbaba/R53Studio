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
						<a href="#" class="day-switch day-switch_day day-switch_day_active"></a>
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
		<!-- open .trust -->
		<?= do_shortcode('[partners]') ?>
		<!-- close .trust -->
	</section>
	<!-- close .site-content -->

	<!-- open .stock -->
	<section class="stock">
		<!-- open .container -->
		<div class="container">
			<!-- open .stock__wrap -->
			<div class="stock__wrap">
				<!-- open .stock__baner -->
				<div class="stock__baner">
					<img src="<?php bloginfo('template_directory'); ?>/img/152-6302-offer-ribbon.png" alt="" />
					<h3>УСПЕЙ ЗАКАЗАТЬ СВЕТОВУЮ ВЫВЕСКУ ДО 1 ИЮЛЯ 2016 И ПОЛУЧИ <br /><span class="color_red">ДИЗАЙН МАКЕТА В ПОДАРОК.</span></h3>
					<div class="clockContainer">
					<!-- <h2>До конца акции осталось:</h2> -->
					<div class="clock"></div>
				</div>
				</div>
				<!-- close .stock__baner -->
				<!-- open .stock__form -->
				<div class="stock__form">
					<h4>Быстрый расчет <br />стоимости заказа</h4>
					<p>Оставьте заявку на бесплатную консультацию</p>
					<form action="<?= get_bloginfo('url'); ?>/wp-admin/admin-post.php?action=add_order" method="POST" enctype="multipart/form-data">
						<input type="text" name="contacts_name" class="stock__form_input" placeholder="Ваше имя"/>
						<input type="email" name="contacts_email" class="stock__form_input"  placeholder="E-mail"/>
						<input type="tel" name="contacts_phone" class="stock__form_input"  placeholder="Номер телефона"/>
						<textarea name="contacts_comment" class="stock__form_text" placeholder=""></textarea>
						<input type="hidden" name="action" value="add_order">
						<input type="file" id="stock__form_file" name="file" class="stock__form_file"  placeholder="прикрепить файл"/>
						<label for="stock__form_file"><span class="js_input_file">прикрепить файл</span></label>
						<button type="submit" class="stock__form_submit">заказать <br />со скидкой! <span></span></button>
					</form>

				</div>
				<!-- close .stock__form -->
			</div>
			<!-- close .stock__wrap -->
			
		</div>
		<!-- close .container -->
	</section>
	<!-- close .stock -->

	<!-- open .home__form -->
	<section class="home__form">
		<!-- open .container -->
		<div class="container">
			<h2>Узнавайте о акциях первыми</h2>
			<h4>Мы ежемесячно публикуем новые выгодные предложения для наших клиентов, <br /> чтобы узнавать о них одним из первых, внесите ваши данные в форму ниже прямо сейчас</h4>
			<form action="#">
				<input type="text" name="home__form_name" class="home__form_input" placeholder="Ваше имя или название организации"/>
				<input type="email" name="home__form_mail" class="home__form_input" placeholder="Ваш e-mail"/>
				<button class="home__form_btn">Узнавать первым</button>
			</form>
			<p>Ваши данные никогда не будут переданы 3-м лицам</p>
		</div>
		<!-- close .container -->
	</section>
	<!-- close .home__form -->

<?php get_footer(); // подключаем footer.php ?>