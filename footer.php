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
				<!-- open .footer_title -->
				<h3 class="footer_title">Меню</h3>
				<!-- close .footer_title -->
				<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
				'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в function.php
				'container'=> false, // обертка списка, false - это ничего
				'menu_class' => 'footer__nav_menu', // класс для ul
		  		'menu_id' => 'footer-nav', // id для ul
		  		'fallback_cb' => false
			  	);
				wp_nav_menu($args); // выводим нижние меню
						?>
				
			</nav>
			<!-- close .footer__nav -->

			<!-- open .footer__item -->
			<div class="footer__item">
				<!-- open .footer_title -->
				<h3 class="footer_title">Контакты</h3>
				<!-- close .footer_title -->
				<p> +375 29 6 255 755</p>
				<p>тел/факс: 8 02235 77277</p>
				<p>r53-studio@mail.ru</p>
			</div>
			<!-- close .footer__item -->

			<!-- open .footer__item -->
			<div class="footer__item footer__item_soc">
				<!-- open .footer_title -->
				<h3 class="footer_title">Мы в соцсетях</h3>
				<!-- close .footer_title -->
				<a href="#" class="footer__item_soc_icon"><i class="fa fa-vk"></i></a>
				<a href="#" class="footer__item_soc_icon"><i class="fa fa-facebook"></i></a>
				<a href="#" class="footer__item_soc_icon"><i class="fa fa-google-plus"></i></a>
			</div>
			<!-- close .footer__item -->
			<!-- open .footer__contacts -->
			<div class="footer__contacts">
			<!-- open .footer__copyright -->
				<p class="footer__contacts_copyr">© 2015 R53Studio</p>
				<!-- close .footer__copyright -->
				<p class="footer__contacts_slogan">ОТЛИЧНОЕ КАЧЕСТВО ЗА РАЗУМНЫЕ ДЕНЬГИ</p>
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