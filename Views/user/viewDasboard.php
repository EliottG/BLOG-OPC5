<?php
$title = "Mon compte";

?>
<div class="container">
    <h3 class="mt-3 mb-5 text-center">Tableau de bord de <?= $_SESSION['pseudo'] ?></h3>
    <div class="row">
        <?php if ($_SESSION['role'][0] == 'Admin') : ?>
            <div class="col-xl-12  my-articles">
                <h3 class="text-center">Mes articles |<a href="<?= ROOT_DIR ?>ajouter-article"><button class="btn btn-primary">Ajouter un article</button></a></h3>
                <?php foreach ($data['posts'] as $post) : ?>
                    <div class="myArticles row">
                        <p>
                            <div class="col-xl-8"><a href="<?= ROOT_DIR ?>article/<?= $post['ID'] ?>"><?= $post['title'] ?> </a></div>
                            <div class="col-xl-4"> <a href="<?= ROOT_DIR ?>modifier-article/<?= $post['ID'] ?>"><button class="btn btn-dark" name="modify" type="submit">Modifier </button></a>
                        </p>
                    </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>
<div class="col-xl-12 text-center my_comments">
    <h3 class="text-center">Mes commentaires</h3>
    <?php foreach ($data['comments'] as $comment) : ?>
        <?= "<p>" . $comment['content'] . " - " ?> <a href="<?= ROOT_DIR ?>article/<?= $comment['post_id'] ?>">Voir l'article</a></p>
    <?php endforeach ?>
</div>


</div>
</div>