<?php $render('header'); ?>

<h1>Home</h1>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?=$user['name'];?></li>
    <?php endforeach; ?>
</ul>


<a href="<?= $base ?>/about">About</a>

<?php $render('footer'); ?>