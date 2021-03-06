<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';
require_once TM_DIR . '/lib/bootstrap_menu.php';
require_once TM_DIR . '/lib/clean_comments_constructor.php';

/*function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка без разделителя
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}*/

register_nav_menus(array( // Регистрируем 2 меню
    'top' => 'Верхнее', // Верхнее
    'left' => 'Боковое' // Боковое меню
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
    'name' => 'Сайдбар', // Название в админке
    'id' => "sidebar", // идентификатор для вызова в шаблонах
    'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
    'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
    'after_widget' => "</div>\n", // разметка после вывода каждого виджета
    'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
    'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

function pagination()
{ // функция вывода пагинации
    global $wp_query; // текущая выборка должна быть глобальной
    $big = 999999999; // число для замены
    $links = paginate_links(array( // вывод пагинации с опциями ниже
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
        'format' => '?paged=%#%', // формат, %#% будет заменено
        'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
        'type' => 'array', // нам надо получить массив
        'prev_text' => 'Назад', // текст назад
        'next_text' => 'Вперед', // текст вперед
        'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
        'show_all' => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
        'end_size' => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
        'mid_size' => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
        'add_args' => false, // массив GET параметров для добавления в ссылку страницы
        'add_fragment' => '',    // строка для добавления в конец ссылки на страницу
        'before_page_number' => '', // строка перед цифрой
        'after_page_number' => '' // строка после цифры
    ));
    if (is_array($links)) { // если пагинация есть
        echo '<ul class="pagination">';
        foreach ($links as $link) {
            if (strpos($link, 'current') !== false) echo "<li class='active'>$link</li>"; // если это активная страница
            else echo "<li>$link</li>";
        }
        echo '</ul>';
    }
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
function add_scripts()
{ // добавление скриптов
    if (is_admin()) return false; // если мы в админке - ничего не делаем
    wp_deregister_script('jquery'); // выключаем стандартный jquery
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array(), '1', 1);
    wp_enqueue_script('yndex-map', 'http://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');
    wp_enqueue_script('libs', get_template_directory_uri() . '/js/libs.min.js', '', '', true);
    wp_enqueue_script('flipclock_js', get_template_directory_uri() . '/js/flipclock.js', array(), '1', true);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/script.js', '', '', true); // бутстрап
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', '', '', true); // и скрипты шаблона
    wp_localize_script('main', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
function add_styles()
{ // добавление стилей
    if (is_admin()) return false; // если мы в админке - ничего не делаем
    wp_enqueue_style('libs', get_template_directory_uri() . '/css/libs.min.css');// бутстрап
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.css', '1');
    wp_enqueue_style('font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', '1');
    wp_enqueue_style('flipclock', get_template_directory_uri() . '/css/flipclock.css');
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/style.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css'); // основные стили шаблона
}

function prn($content)
{
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r($content);
    echo '</pre>';
}

function content_class_by_sidebar()
{ // функция для вывода класса в зависимости от существования виджетов в сайдбаре
    if (is_active_sidebar('sidebar')) { // если есть
        echo 'col-sm-9'; // пишем класс на 80% ширины
    } else { // если нет
        echo 'col-sm-12'; // контент на всю ширину
    }
}

/*----------------------------------------------— НАСТРОЙКИ ТЕМЫ —--------------------------------------------------*/
add_action('customize_register', function ($customizer) {
    /*Меню настройки контактов*/
    $customizer->add_section(
        'phone_section',
        array(
            'title' => 'Настройки телефонов',
            'description' => 'Контакты',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'phone_1_textbox',
        array('default' => '29 6 255 755')
    );

    $customizer->add_control(
        'phone_1_textbox',
        array(
            'label' => 'Телефон г. Минск',
            'section' => 'phone_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'phone_2_textbox',
        array('default' => '2235 77277')
    );

    $customizer->add_control(
        'phone_2_textbox',
        array(
            'label' => 'Телефон г. Осиповичи',
            'section' => 'phone_section',
            'type' => 'text',
        )
    );


});
/*--------------------------------------------— КОНЕЦ НАСТРОЕК ТЕМЫ —-----------------------------------------------*/

/*----------------------------------------------— НАЧАЛО РЕКЛАМА —---------------------------------------------------------*/

add_action('init', 'myCustomInitAdvertising');

function myCustomInitAdvertising()
{
    $labels = array(
        'name' => 'Реклама', // Основное название типа записи
        'singular_name' => 'Реклама', // отдельное название записи типа Book
        'add_new' => 'Добавить рекламу',
        'add_new_item' => 'Добавить новую рекламу',
        'edit_item' => 'Редактировать рекламу',
        'new_item' => 'Новая реклама',
        'view_item' => 'Посмотреть рекламу',
        'search_items' => 'Найти рекламу',
        'not_found' => 'Рекламы не найдено',
        'not_found_in_trash' => 'В корзине рекламы не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Реклама'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('advertising', $args);
}


function advertisingShortcode()
{
    $args = array(
        'post_type' => 'advertising',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/views/advertising_modal.php', ['my_query' => $my_query]);

}

add_shortcode('advertising', 'advertisingShortcode');

function photo_attachments($attachments)
{
    $fields = array(
        array(
            'name' => 'title',                         // unique field name
            'type' => 'text',                          // registered field type
            'label' => __('Заголовок', 'attachments'),    // label to display
            'default' => 'title',                         // default value upon selection
        )
    );

    $args = array(

        // title of the meta box (string)
        'label' => 'Прикрепленные изображения',

        // all post types to utilize (string|array)
        'post_type' => array('advertising'),

        // meta box position (string) (normal, side or advanced)
        'position' => 'normal',

        // meta box priority (string) (high, default, low, core)
        'priority' => 'high',

        // allowed file type(s) (array) (image|video|text|audio|application)
        'filetype' => null,  // no filetype limit

        // include a note within the meta box (string)
        'note' => 'прикрепите изображения здесь!',

        // by default new Attachments will be appended to the list
        // but you can have then prepend if you set this to false
        'append' => true,

        // text for 'Attach' button in meta box (string)
        'button_text' => __('Добавить изображения', 'attachments'),

        // text for modal 'Attach' button (string)
        'modal_text' => __('Добавить', 'attachments'),

        // which tab should be the default in the modal (string) (browse|upload)
        'router' => 'browse',

        // whether Attachments should set 'Uploaded to' (if not already set)
        'post_parent' => false,

        // fields array
        'fields' => $fields,

    );

    $attachments->register('photo_attachments', $args); // unique instance name
}

add_action('attachments_register', 'photo_attachments');

add_action('save_post', 'myExtraFieldsUpdate', 10, 1);

/* Сохраняем данные, при сохранении поста */
function myExtraFieldsUpdate($post_id)
{
    if (!isset($_POST['extra'])) return false;
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

function extraFieldsProductsSubtitle($post)
{
    ?>
    <p>
        <span>Расположение: </span>
        <input type="text" name='extra[size]' value="<?php echo get_post_meta($post->ID, "size", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsProducts()
{
    add_meta_box('extra_size', 'Расположение', 'extraFieldsProductsSubtitle', 'advertising', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsProducts', 1);

/*---------------------------------------------— КОНЕЦ РЕКЛАМА —------------------------------------------------------*/


/*---------------------------------------------— ОТПРАВКА ЗАКАЗА —------------------------------------------------------*/
add_action('admin_post_add_order', 'add_order');
add_action('admin_post_nopriv_add_order', 'add_order');

function add_order()
{
    $parser = new Parser();
    $text = $parser->render(TM_DIR . '/views/mail_order.php', ['post' => $_POST], false);
    $headers[] = "Content-type: text/html;";
    if (empty($_FILES['file']['name'])) {
        wp_mail(get_option('admin_email'), "Заявка с вашего сайта", $text, $headers);
    } else {
        $uploaddir = TM_DIR . '/files/' . $_FILES['file']['name'];
        copy($_FILES['file']['tmp_name'], $uploaddir);
        wp_mail(get_option('admin_email'), "Заявка с вашего сайта", $text, $headers, $uploaddir);
    }
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . get_bloginfo('url'));
    exit();
}

/*---------------------------------------------— КОНЕЦ ОТПРАВКА ЗАКАЗА —------------------------------------------------------*/


/*---------------------------------------------— ОТПРАВКА ФОРМЫ —------------------------------------------------------*/
add_action('admin_post_send_form', 'send_form');
add_action('admin_post_nopriv_send_form', 'send_form');

function send_form()
{
    $parser = new Parser();
    $text = $parser->render(TM_DIR . '/views/mail_send.php', ['post' => $_POST], false);
    $headers[] = "Content-type: text/html;";
    wp_mail(get_option('admin_email'), "Письмо с вашего сайта", $text, $headers);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . get_bloginfo('url'));
    exit();
}

/*---------------------------------------------— КОНЕЦ ОТПРАВКА ФОРМЫ —------------------------------------------------------*/


/*---------------------------------------------— НАМ ДОВЕРЯЮТ —------------------------------------------------------*/
add_action('init', 'myCustomInitPartners');

function myCustomInitPartners()
{
    $labels = array(
        'name' => 'Партнеры', // Основное название типа записи
        'singular_name' => 'Партнеры', // отдельное название записи типа Book
        'add_new' => 'Добавить Партнера',
        'add_new_item' => 'Добавить нового Партнера',
        'edit_item' => 'Редактировать Партнера',
        'new_item' => 'Новый Партнер',
        'view_item' => 'Посмотреть Партнера',
        'search_items' => 'Найти Партнера',
        'not_found' => 'Партнеров не найдено',
        'not_found_in_trash' => 'В корзине Партнеров не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Партнеры'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('partners', $args);
}


function partnersShortcode()
{
    $args = array(
        'post_type' => 'partners',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/views/partners.php', ['my_query' => $my_query]);

}

add_shortcode('partners', 'partnersShortcode');
/*---------------------------------------------— КОНЕЦ НАМ ДОВЕРЯЮТ —------------------------------------------------------*/

/*---------------------------------------------— КОНЕЦ НАМ ДОВЕРЯЮТ —------------------------------------------------------*/
function leftMenuShortcode()
{
    $menu_items = wp_get_nav_menu_items('Боковое'); // получаем элементы меню

    $menu_items = getMenuTree($menu_items);

    $parser = new Parser();
    $parser->render(TM_DIR . '/views/left_menu.php', ['menu_items' => $menu_items]);

}

add_shortcode('left-menu', 'leftMenuShortcode');

function getMenuTree($arr)
{
    $arr_new = [];
    if(!empty($arr)){
        foreach ($arr as $m_item) {
            if ($m_item->menu_item_parent == 0) {
                $arr_new[$m_item->ID]['title'] = $m_item->title;
                $arr_new[$m_item->ID]['url'] = $m_item->url;
                $arr_new[$m_item->ID]['child'] = false;
            } else {
                $arr_new[$m_item->menu_item_parent]['child'][$m_item->ID]['title'] = $m_item->title;
                $arr_new[$m_item->menu_item_parent]['child'][$m_item->ID]['url'] = $m_item->url;
            }
        }
    }

    return $arr_new;
}
/*---------------------------------------------— КОНЕЦ НАМ ДОВЕРЯЮТ —------------------------------------------------------*/


/*---------------------------------------------— ПОРТФОЛИО —------------------------------------------------------*/
add_action('init', 'myCustomInitPortfolio');

function myCustomInitPortfolio()
{
    $labels = array(
        'name' => 'Портфолио', // Основное название типа записи
        'singular_name' => 'Портфолио', // отдельное название записи типа Book
        'add_new' => 'Добавить Портфолио',
        'add_new_item' => 'Добавить новое Портфолио',
        'edit_item' => 'Редактировать Портфолио',
        'new_item' => 'Новое Портфолио',
        'view_item' => 'Посмотреть Портфолио',
        'search_items' => 'Найти Портфолио',
        'not_found' => 'Портфолио не найдено',
        'not_found_in_trash' => 'В корзине Портфолио не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Портфолио'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('portfolio', $args);
}


function portfolioShortcode()
{

    /*if(isset($_GET['sub'])){
        $term_id = $_GET['sub'];
        $term = get_term($_GET['sub'], 'section');
        $parent_term = get_term($term->parent, 'section');
        $tax_child_id = get_term_children($term->parent, 'section');// получаем дочерние элементы
        $main_cat = $parent_term->slug;
    }
    else {
        if(!isset($_GET['cat'])){
            $tax_info = get_term_by( 'slug', 'out', 'section');//получаем id родительской категории
        }
        else {
            $tax_info = get_term_by( 'slug', $_GET['cat'], 'section');//получаем id родительской категории
        }

        $tax_child_id = get_term_children($tax_info->term_id, 'section');// получаем дочерние элементы

        $term = get_term($tax_child_id[0], 'section');
        //prn($term);
        $term_id = $term->term_id;
        $main_cat = $_GET['cat'];
    }*/

    if(!isset($_GET['cat'])){
        $tax_info = get_term_by( 'slug', 'out', 'section');//получаем id родительской категории
    }
    else {
        $tax_info = get_term_by( 'slug', $_GET['cat'], 'section');//получаем id родительской категории
        $main_cat = $_GET['cat'];
    }

    if(empty($main_cat)){
        $main_cat = 'out';
    }
    $args = array(
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'section',
                'field'    => 'id',
                'terms'    => $tax_info->term_id,
            )
        )
    );

    $my_query = null;

    $my_query = new WP_Query($args);

    //prn($my_query);

    $parser = new Parser();
    $parser->render(TM_DIR . '/views/portfolio.php', [
        'my_query' => $my_query,
        'main_cat' => $main_cat,
    ]);

}

add_shortcode('portfolio', 'portfolioShortcode');

// Custom taxonomy type
function add_section_taxonomies() {
    register_taxonomy('section', 'portfolio', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Категории', 'taxonomy general name' ),
            'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
            'search_items' =>  __( 'Поиск категорий' ),
            'all_items' => __( 'Все категории' ),
            'parent_item' => __( 'Родитель' ),
            'parent_item_colon' => __( 'Родитель:' ),
            'edit_item' => __( 'Редактировать категорию' ),
            'update_item' => __( 'Обновить категорию' ),
            'add_new_item' => __( 'Добавить новую категорию' ),
            'new_item_name' => __( 'Новая категория' ),
            'menu_name' => __( 'Категории' ),
        ),

        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'section', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'add_section_taxonomies', 0 );
/*---------------------------------------------— КОНЕЦ ПОРТФОЛИО —------------------------------------------------------*/


