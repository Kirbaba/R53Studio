<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   <meta name="format-detection" content="telephone=no">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); // выводи тайтл, функция лежит в functions.php ?></title>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	
	<!-- open .header -->
	<header class="header">
		<!-- open .container -->
		<div class="container">
			<!-- open .header__logo -->
			<div class="header__logo">
				<a href="/">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" />
				</a>
				
			</div>
			<!-- close .header__logo -->
			<!-- open .header__menu -->
			<ul class="header__menu">
				<li><a href="#">ПОРТФОЛИО</a></li>
				<li><a href="#">СТАТЬИ</a></li>
				<li><a href="#">КОНТАКТЫ </a></li>
			</ul>
			<!-- close .header__menu -->
			<!-- open .header__contacts -->
			<div class="header__contacts">
				<h3>
					<sup>+375 </sup>
					29 6 255 755
					<span class="header__contacts_city">г.Минск</span>
				</h3>
				<h3>
					<sup>+375</sup>
					2235 77277
					<span class="header__contacts_city"><small>г. Осиповичи</small></span>
				</h3>
			</div>
			<!-- close .header__contacts -->
		</div>
		<!-- close .container -->
	</header>
	<!-- close .header -->