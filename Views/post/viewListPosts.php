<?php
$title = 'Articles';

?>
<div class="container">
    <?php if (isset($_SESSION['role']) && ($_SESSION['role'][0] == 'Admin')) : ?>
        <a href="<?= ROOT_DIR ?>ajouter-article"><button class="mt-3 btn btn-primary">Ajouter un article</button></a><br>
    <?php endif ?>
    <div class="row">
    <?php
    foreach ($data['posts'] as $post) : ?>
        <div class="col-xl-6">
        <a href="<?= ROOT_DIR ?>article/<?= $post['ID'] ?>">
            <div class="articleList mt-3">
                <h3 class="text-center"><?= $post['title'] ?> / <span class="color-grey"> <?= $post['author'] ?> </span></h3>
                <p> Dernière modification: <?= $post['last_update'] ?></p>
                <p class="text-center"><?= substr($post['chapo'], 0, 150).'...' ?></p>
            </div>
        </a>
        </div>
    <?php endforeach ?>
    </div>
</div>
</div>