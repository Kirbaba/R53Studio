<?php
/**
 * @var $my_query object WP_Query
 */
?>
<?php if ($my_query->have_posts()): ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <!-- open .model__home_lightbox -->
        <div class="modal__home modal__home_<?= get_post_meta(get_the_ID(), 'size', true) ?>">
            <!-- open .container -->
            <div class="container">
                <!-- open .modal__home_body -->
                <div class="modal__home_body">
                    <a href="" class="modal__home_close"></a>
                    <h3><?php the_title() ?></h3>
                    <p><?php the_content() ?></p>

                    <div class="owl-carousel owl-theme owl_modal">
                        <a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg"
                           data-lightbox="modal__home_lightbox" class="owl_modal__item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt=""/>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?>/img/trade-center-day.jpg"
                           data-lightbox="modal__home_lightbox" class="owl_modal__item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/trade-center-day.jpg" alt=""/>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg"
                           data-lightbox="modal__home_lightbox" class="owl_modal__item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt=""/>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg"
                           data-lightbox="modal__home_lightbox" class="owl_modal__item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt=""/>
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
    <?php endwhile;
    wp_reset_query(); ?>
<?php endif ?>
