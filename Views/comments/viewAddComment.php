<?php
$title = 'Ajouter un commentaire';

?>
<body class='PostPage'>
<div class="container">
    <h3>Poster un commentaire</h3>
    <form action="<?= htmlspecialchars(ROOT_DIR) ?>commentaire/<?= $data['ID'] ?>" method="POST">
        <textarea class='form-control' name="content" id="" required cols="30" rows="5"></textarea>
        <button type="submit" name="send" value="submit" class='form-control btn btn-primary'>Envoyer</button>
    </form>
</div>