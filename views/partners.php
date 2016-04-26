<?php
/**
 * @var $my_query object WP_Query
 */
?>
<?php if ($my_query->have_posts()): ?>
    <!-- open .trust -->
    <section class="trust">
        <!-- open .container -->
        <div class="container">
            <h2>Нам доверяют:</h2>
            <!-- open .trust__carousel -->
            <div class="trust__carousel">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <!-- open .trust__carousel_item -->
                    <div class="trust__carousel_item">
                        <!-- open .trust__carousel_item_img -->
                        <div class="trust__carousel_item_img">
                            <?= get_the_post_thumbnail(); ?>
                        </div>
                        <!-- close .trust__carousel_item_img -->
                        <h4><?php the_title() ?></h4>
                    </div>
                    <!-- close .trust__carousel_item -->
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
            <!-- close .trust__carousel -->
        </div>
        <!-- close .container -->
    </section>
    <!-- close .trust -->
<?php endif ?>