<?php

$title = 'Ajouter un article';


?>
<div class="container">
    <h3 class='mt-3 mb-5 text-center'>Ajouter un article</h3>
    <form action="<?= htmlspecialchars(ROOT_DIR) ?>ajouter-article" method="POST">
        <input class=' form-control mb-3' required name="author" placeholder="Auteur">
        <input class=' form-control mb-3' required name="title" placeholder="Titre">
        <textarea class='form-control mb-3' required name="chapo" id="" cols="30" rows="4" placeholder="Chapô"></textarea>
        <textarea class='form-control mb-3' required name="content" id="" cols="30" rows="10" placeholder="Contenu"></textarea>
        <button class='form-control btn btn-dark' type="submit" value="1" name="send">Poster mon article</button>
    </form>
    <?php if (isset($data['success']) && $data['success'] == 'ok') : ?>
        <div class='alert alert-success'><h3 class="text-center">Votre post a bien été envoyé</h3></div>
    <?php endif ?>
</div>
