<?php
$title = 'Articles';

?>
<body class='PostPage'>
    <div class="container">
        <?php if (isset($_SESSION['role']) && ($_SESSION['role'][0] == 'Admin')) : ?>
            <a href="<?= htmlspecialchars(ROOT_DIR) ?>ajouter-article"><button class="mt-3 btn btn-primary">Ajouter un article</button></a><br>
        <?php endif ?>
        <div class="row">
            <?php
            foreach ($data['posts'] as $post) : ?>
                <div class="col-xl-6">
                    <a href="<?= htmlspecialchars(ROOT_DIR) ?>article/<?= htmlspecialchars($post['ID']) ?>">
                        <div class="articleList mt-3 shadow">
                            <h3 class="text-center lead"><?= htmlspecialchars(substr($post['title'], 0, 35)) . ' ... ' ?> / <span class="text-dark"> <?= htmlspecialchars($post['author']) ?> </span></h3>
                            <p class="font-italic text-dark"> Dernière modification: <?= htmlspecialchars($post['last_update']) ?></p>
                            <p class="text-center"><?= htmlspecialchars(substr($post['chapo'], 0, 150)) . ' ... ' ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    </div>