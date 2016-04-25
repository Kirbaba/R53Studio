<?php
/**
 * @var $post array
 */
?>
<div>
    <h3>Заказ с сайта</h3>
    <p>Телефон: <?= $post['contacts_phone'] ?></p>
    <p>E-mail: <?= $post['contacts_email'] ?></p>
    <p>Имя: <?= $post['contacts_name'] ?></p>
    <p>Текст: <?= $post['contacts_comment'] ?></p>
</div>