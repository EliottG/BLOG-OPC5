<?php

$title = 'Accueil';

?>
<div class="container-fluid home_banner">
    <div class="container">
        <div class="profil-block">
            <img class="profil-picture" src="public/pictures/profil.jpg" alt="Photo de profil">
            <h3>Eliott Geoffroy Deudon-Combe</h3>
            <h4>Développeur PHP, mais pas seulement</h4>
            <div class="social-block">
                <a target="_blank" href="https://www.linkedin.com/in/eliott-geoffroy-deudon-combe-796593194/"><img src="public/pictures/social/linkedin.svg" alt="linkedin logo" width="48px"></a>
                <a target="_blank" href="https://github.com/EliottG"><img class=" " src="public/pictures/social/github.svg" alt="github logo" width="51px"></a>
                <a target="_blank" href="https://gitlab.com/EliottG"><img src="public/pictures/social/gitlab.svg" alt="github logo" width="51px"></a>
                <a href="<?= htmlentities(ROOT_DIR) ?>#cv">
                    <img src="<?= htmlentities(ROOT_DIR) ?>public/pictures/social/cv.png" alt="Plein écran">
                </a>
                <a href="<?= htmlentities(ROOT_DIR) ?>#_" class="overlay" id="cv">
                        <img src="<?= htmlentities(ROOT_DIR) ?>public/pictures/BigCv.jpg" alt="Plein écran">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 container explications">
    <h2 class="text-center ">Bienvenue sur mon blog</h2>
    <p class="text-center">Tu peux consulter librement les nouveaux articles sans t'inscrire, mais si tu souhaites participer
        en commentant des articles, il faudra alors que tu crées un compte!
        <div class="explications mt-5">
            <div class="row">
                <div class="col-xl-5 explication1 mb-5">
                    <h3 class="text-center">Des articles variés </h3>
                    <p class="text-center">
                        Même si le développement-web reste notre passion commune, il serait dommage de restreindre le thème des articles
                        à un seul domaine, c'est pourquoi les articles peuvent parler de n'importe quel thème!
                    </p>
                </div>
                <div class="col-xl-2"></div>
                <div class="col-xl-5 explication2 mb-5">
                    <h3 class="text-center">Espace commentaire</h3>
                    <p class="text-center">Afin que l'espace commentaire reste un lieu de partage et non un champ de bataille,
                        chaque commentaire devra être validé par un administrateur. Il est donc normal de ne pas
                        voir son commentaire affiché juste après l'avoir publié.
                    </p>
                </div>
            </div>
        </div>
    </p>
</div>

<div class="container contact mt-5 mb-5">
    <h2 class="text-center mb-4">Me contacter</h2>
    <div class="contact-form">
        <form action='<?= htmlentities(ROOT_DIR) ?>accueil' class="text-center" method="POST">
            <div class="row">
                <div class="col-xl-6">
                    <input class="col-xl-12 form-control mb-3" required name="name" placeholder="Nom">
                    <input class="col-xl-12 form-control mb-3" required name="firstname" placeholder="Prénom">
                    <input class=" col-xl-12 form-control mb-3" type="email" required name="email" placeholder="Email">
                </div>
                <div class="col-xl-6">
                    <textarea rows="6" class="col-xl-12 form-control mb-3" required name="content" placeholder="Votre message"></textarea>
                </div>
                <div class="text-center col-xl-12">
                    <button class="text-center form-control btn btn-dark" name="send" value="2" type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    <?php if ($data['test'] == 'Envoyé') : ?>
        <div class="alert alert-success text-center">Merci pour votre message, je vous répondrai dès que possible !</div>
    <?php endif ?>
    <?php if ($data['test'] == 'Refusé') : ?>
        <div class="alert alert-danger text-center">Des champs sont encore requis</div>
    <?php endif ?>
</div>

<div class="mt-5 container-fluid footer">

</div>