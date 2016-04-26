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
    <meta charset="<?php bloginfo('charset'); // кодировка ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="format-detection" content="telephone=no">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title><?php echo wp_get_document_title(); // выводи тайтл, функция лежит в functions.php ?></title>
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
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""/>
            </a>

        </div>
        <!-- close .header__logo -->
        <!-- open .header__menu -->
        <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
            'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
            'container' => false, // обертка списка, тут не нужна
            'menu_id' => 'top-nav-ul', // id для ul
            'items_wrap' => '<ul id="%1$s" class="header__menu %2$s">%3$s</ul>',
            'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
        );
        wp_nav_menu($args); // выводим верхнее меню
        ?>
        <!-- close .header__menu -->
        <!-- open .header__contacts -->
        <div class="header__contacts">
            <h3>
                <sup>+375 </sup>
                <?= get_theme_mod('phone_1_textbox') ?>
                <span class="header__contacts_city">г.Минск</span>
            </h3>
            <h3>
                <sup>+375</sup>
                <?= get_theme_mod('phone_2_textbox') ?>
                <span class="header__contacts_city"><small>г. Осиповичи</small></span>
            </h3>
        </div>
        <!-- close .header__contacts -->
    </div>
    <!-- close .container -->
</header>
<!-- close .header -->