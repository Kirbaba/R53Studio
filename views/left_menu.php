<?php
/**
 * @var $menu_items array
 */
?>
<aside class="sidebar-left">
    <section class="accordion">
        <?php foreach ($menu_items as $item): ?>
            <h3>
                <a href="<?= $item['url'] ?>" class="accordion_title"><?= $item['title'] ?></a>
                <a href="<?= $item['url'] ?>" class="sidebar-left_go-btn"></a>
            </h3>
            <?php if ($item['child']): ?>
                <ul>
                    <?php foreach ($item['child'] as $subItem): ?>
                        <li><a href="<?= $subItem['url'] ?>"><?= $subItem['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif ?>
        <?php endforeach; ?>
    </section>
</aside>