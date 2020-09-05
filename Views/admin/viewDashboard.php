<?php
$title = 'Administration';
?>
<body class='PostPage'>
<h1 class='text-center mt-5'>Administration</h1>
<div class="container">
    <div class="row">
        <div class="col-xl-4 text-center">
            <h3 class='mt-3'>Utilisateurs</h3>
            <?php foreach ($data['user'] as $user) : ?>
                <p class='text-left'><a href="utilisateur/<?= htmlspecialchars($user['ID']) ?>"><button class='btn btn-primary mr-3'>Voir</button></a><?= $user['pseudo'] ?></p>
            <?php endforeach ?>
        </div>
        <div class="col-xl-4 text-center">
            <h3 class='mt-3'>Articles</h3>
            <?php foreach ($data['posts'] as $post) : ?>
                <div class="articles-admin">
                    <form method="POST" action="<?= htmlspecialchars(ROOT_DIR) ?>administration">
                        <button type="submit" name="suppr" value="<?= htmlspecialchars($post['ID']) ?>" class='btn btn-danger mb-2'>Supprimer</button>
                    </form>
                    <p class='text-left ml-1'> <a href="<?= htmlspecialchars(ROOT_DIR) ?>article/<?= htmlspecialchars($post['ID']) ?>">
                    <button class='btn btn-primary mr-3'>Voir</button></a><?= htmlspecialchars($post['title']) ?></p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-xl-4 text-center">
            <h3 class='mt-3'>Commentaires <br>(à valider)</h3>
            <?php foreach ($data['comments'] as $comment) : ?>
                <p class='text-justify'>
                    <form method="POST" action="<?= htmlspecialchars(ROOT_DIR) ?>administration">
                        <button type="submit" name="validate" value="<?= htmlspecialchars($comment['ID']) ?>" class='btn btn-primary mr-3'>Valider</button>
                    </form><p class="text-center"><span class='bold'><?= htmlspecialchars($comment['author']) ?></span> : <?= htmlspecialchars($comment['content']) ?></p>
                </p>
            <?php endforeach ?>
        </div>
    </div>
</div>