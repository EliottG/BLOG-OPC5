<?php
$title = "S'inscire";

?>
<div class="container">
    <div class="login-form">
        <h3 class='text-center'>Formulaire d'inscription</h3>
        <form action="<?= htmlentities(ROOT_DIR) ?>inscription" method="POST">
            <input class='form-control mb-3' required type="text" name="name" placeholder="Nom">
            <p><?php if (isset($data['test']['name'])) echo htmlspecialchars($data['test']['name']) ?></p>
            <input class='form-control mb-3' required type="text" name="firstname" placeholder='Prénom'>
            <p><?php if (isset($data['test']['firstname'])) echo htmlspecialchars($data['test']['firstname']) ?></p>
            <input class='form-control mb-3' required type="text" name="pseudo" placeholder='Pseudo'>
            <p><?php if (isset($data['test']['pseudo'])) echo htmlspecialchars($data['test']['pseudo']) ?></p>
            <input class='form-control mb-3' required type="password" name="password" placeholder='Mot de passe'>
            <p><?php if (isset($data['test']['password'])) echo htmlspecialchars($data['test']['password']) ?></p>
            <input class='form-control mb-3' required type="password" name="confPassword" placeholder='Confirmer le mot de passe'>
            <p><?php if (isset($data['test']['confPassword'])) echo htmlspecialchars($data['test']['confPassword']) ?></p>
            <button class='form-control btn btn-dark' name="send" value="2" type="submit">S'inscrire</button>
            <p class='mt-3'>J'ai déjà un compte : <a href="<?= htmlentities(ROOT_DIR) ?>connexion">Se connecter</a></p>
        </form>
    </div>
</div>
<?php if (isset($data['test']) && $data['test'] == 'success') : ?>
    <div class="alert alert-success text-center">
        <h3>Votre compte a bien été crée</h3>
    </div>
<?php endif ?>