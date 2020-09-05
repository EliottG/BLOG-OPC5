<?php

$title = htmlspecialchars($data['post']['title']);

?>
<br>
<body class='PostPage'>
<div class="container">
    <a href="<?= htmlspecialchars(ROOT_DIR) ?>articles"><button class='btn btn-primary'> Revenir aux articles </button></a><br>
    <div class="single-article">
    <h3 class="single-title text-center"><?= htmlspecialchars($data['post']['title']) ?></h3>
    <p class="text-center single-chapo"><?= htmlspecialchars($data['post']['chapo']) ?> </p>
    <p class="text-justify single-content"><?= nl2br(htmlspecialchars($data['post']['content'])) ?></p>
    </div>
    <h3>Les commentaires</h3>
    <?php if (isset($_SESSION['id'])) : ?>
        <a href="<?= htmlspecialchars(ROOT_DIR) ?>commentaire/<?=htmlspecialchars($data['post']['ID']) ?>"><button class='btn btn-dark'>Ajouter un commentaire</button></a>
        <?php endif ?>
    <?php foreach ($data['comments'] as $comment) : ?>
        <p class='mt-3 comments'> <?= htmlspecialchars($comment['creation_date']). ' - ' . "<span class='bold'>" . htmlspecialchars($comment['author']) ?> </span> : <?= htmlspecialchars($comment['content']) ?></p>
    <?php endforeach ?>
</div>
</body>