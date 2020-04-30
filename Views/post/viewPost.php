<?php

$title = $data['post']['title'];

?>
<br>
<div class="container">
    <a href="<?= ROOT_DIR ?>articles"><button class='btn btn-primary'> Revenir aux articles </button></a><br>
    <div class="single-article">
    <h3 class="single-title text-center"><?= $data['post']['title'] ?></h3>
    <p class="text-center single-chapo"><?= $data['post']['chapo'] ?> </p>
    <p class="text-justify single-content"><?= $data['post']['content'] ?></p>
    </div>
    <h3>Les commentaires</h3>
    <?php if (isset($_SESSION['id'])) : ?>
        <a href="<?= ROOT_DIR ?>commentaire/<?= $data['post']['ID'] ?>"><button class='btn btn-dark'>Ajouter un commentaire</button></a>
        <?php endif ?>
    <?php foreach ($data['comments'] as $comment) : ?>
        <p class='mt-3 comments'> <?= $comment['creation_date'] . ' - ' . "<span class='bold'>" . $comment['author'] ?> </span> : <?= $comment['content'] ?></p>
    <?php endforeach ?>
</div>