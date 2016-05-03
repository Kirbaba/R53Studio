<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer class="footer">
		<div class="container">
			<!-- open .footer__nav -->
			<nav class="footer__nav">
				<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
				'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в function.php
				'container'=> false, // обертка списка, false - это ничего
				'menu_class' => 'footer__nav_menu', // класс для ul
		  		'menu_id' => 'footer-nav', // id для ul
		  		'fallback_cb' => false
			  	);
				wp_nav_menu($args); // выводим нижние меню
						?>
				<!-- open .footer__copyright -->
				<p class="footer__copyright">© 2015 R53Studio</p>
				<!-- close .footer__copyright -->
			</nav>
			<!-- close .footer__nav -->
			<!-- open .footer__contacts -->
			<div class="footer__contacts">
				<h4>+375 <?= get_theme_mod('phone_1_textbox') ?></h4>
				<p>Минск, улица, дом</p>
			</div>
			<!-- close .footer__contacts -->
			
		</div>
	</footer>

	<a href="#" id="callme" >
		<div id="callmeMain"></div>
	</a>

	<!-- open .modal__callme -->
	<div class="modal__callme">
		<!-- open .modal__callme_body -->
		<div class="modal__callme_body">
			<a href="" class="modal__callme_close"></a>
			<h3>Остались вопросы? <br />Хотите, перезвоним вам? </h3>
			<form action="#">
				<input type="tel" class="modal__callme_input" placeholder="Номер телефона" />
				<button type="submit" class="modal__callme_btn">Жду звонка <span></span></button>
				<small>Звонок бесплатный</small>
			</form>
		</div>
		<!-- close .modal__callme_body -->
	</div>
	<!-- close .modal__callme -->

	<?= do_shortcode('[advertising]'); ?>

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>