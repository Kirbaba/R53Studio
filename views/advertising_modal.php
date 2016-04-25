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
                    <p><?php the_excerpt() ?></p>
                    <?php
                    // retrieve all Attachments for the 'attachments' instance of post 123
                    $attachments = new Attachments('photo_attachments');
                    ?>
                    <?php if ($attachments->exist()) : ?>
                        <div class="owl-carousel owl-theme owl_modal">
                            <?php while ($attachments->get()) : ?>
                                <a href="<?= $attachments->url() ?>"
                                   data-lightbox="modal__home_lightbox" class="owl_modal__item">
                                   <img src="<?= $attachments->url() ?>" alt="<?= $attachments->field( 'title' ); ?>"/>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif ?>
                    <a href="/order/" class="modal__home_buy">Заказать</a>
                    <a href="<?= get_permalink(); ?>" class="modal__home_more">Узнать подробнее</a>
                </div>
                <!-- close .modal__home_body -->
            </div>
            <!-- close .container -->

        </div>
        <!-- close .model__home_lightbox -->
    <?php endwhile;
    wp_reset_query(); ?>
<?php endif ?>
