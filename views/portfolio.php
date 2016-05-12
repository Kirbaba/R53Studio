<?php
/**
 * @var $my_query object WP_Query
 * @var $tax array
 * @var $main_cat string
 */
?>

<!-- open .page-portfolio__tabmenu -->
<ul class="page-portfolio__tabmenu">
    <li class="<?= ($main_cat == 'out' ) ? 'page-portfolio__tabmenu_active' : '' ?>"><a
            href="?cat=out" class="page-portfolio__tabmenu_btn"> Наружная реклама</a>

    </li>
    <li class="<?= ($main_cat == 'in') ? 'page-portfolio__tabmenu_active' : '' ?>"><a href="?cat=in"
                                                                                         class="page-portfolio__tabmenu_btn">Интерьерные
            работы</a>
    </li>
</ul>
<!-- close .page-portfolio__tabmenu -->

<!-- open .page-portfolio__tabmenu_sub -->
<ul class="page-portfolio__tabmenu_sub">
    <?php $i = 0; ?>
    <?php foreach ($tax as $t): ?>
        <?php $term = get_term($t, 'section'); ?>
        <?php if (isset($_GET['sub'])): ?>
            <?php if ($_GET['sub'] == $term->term_id): ?>
                <li><a href="?sub=<?= $term->term_id ?>"
                       class="page-portfolio__tabmenu_sub_active"><?= $term->name ?></a></li>
            <?php else: ?>
                <li><a href="?sub=<?= $term->term_id ?>"><?= $term->name ?></a></li>
            <?php endif; ?>
        <?php else: ?>
            <?php if ($i == 0): ?>
                <li><a href="?sub=<?= $term->term_id ?>"
                       class="page-portfolio__tabmenu_sub_active"><?= $term->name ?></a></li>
            <?php else: ?>
                <li><a href="?sub=<?= $term->term_id ?>"><?= $term->name ?></a></li>
            <?php endif ?>
        <?php endif ?>
        <?php $i++; ?>
    <?php endforeach; ?>
    <!--<li><a href="#" class="page-portfolio__tabmenu_sub_active">item 1</a></li>
    <li><a href="#">item 2</a></li>
    <li><a href="#">item 3</a></li>
    <li><a href="#">item 4</a></li>
    <li><a href="#">item 5</a></li>-->
</ul>
<!-- close .page-portfolio__tabmenu_sub -->

<!-- open .page-portfolio__content -->
<article class="page-portfolio__content">
    <?php if ($my_query->have_posts()): ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <a class="page-portfolio__item" href="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
               data-lightbox="gallery-set">
										<span class="page-portfolio__item_img">
											<?= get_the_post_thumbnail(); ?>
										</span>
                <h4><?php the_title() ?></h4>
            </a>
        <?php endwhile;
        wp_reset_query(); ?>
    <?php endif ?>

</article>
<!-- close .page-portfolio__content -->
