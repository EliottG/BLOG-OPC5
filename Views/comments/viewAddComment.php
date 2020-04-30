<?php
$title = 'Ajouter un commentaire';

?>
<div class="container">
    <h3>Poster un commentaire</h3>
    <form action="<?= ROOT_DIR ?>commentaire/<?= $data['ID'] ?>" method="POST">
        <textarea class='form-control' name="content" id="" required cols="30" rows="5"></textarea>
        <button type="submit" name="send" value="submit" class='form-control btn btn-primary'>Envoyer</button>
    </form>
</div>