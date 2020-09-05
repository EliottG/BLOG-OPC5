
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>accueil">Mon Blog</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>articles">Articles</a></li>
                        <?php if (isset($_SESSION['id'])) : ?>
                        <?php if (isset($_SESSION['role']) && ($_SESSION['role'][0]) == 'Admin') : ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>administration">Administration</a></li>
                        <?php endif ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>compte">Mon compte</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>deconnexion">Se déconnecter</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>connexion">Se connecter</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>inscription">S'inscrire</a></li>
                    <?php endif ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= htmlentities(ROOT_DIR) ?>#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
