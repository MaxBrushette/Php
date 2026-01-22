<?php $items = ["Home", "About", "Contact"]; /*This is so the navigation doesn't have to be copied on every single page, and you can add stuff. */?>

<ul>
    <?php foreach ($items as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>