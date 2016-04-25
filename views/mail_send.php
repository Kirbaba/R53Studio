<?php
/**
 * @var $post array
 */
?>
<div>
    <h3>Письмо с сайта</h3>
    <p>E-mail: <?= $post['contacts_email'] ?></p>
    <p>Имя: <?= $post['contacts_name'] ?></p>
    <p>Текст: <?= $post['contacts_comment'] ?></p>
</div>