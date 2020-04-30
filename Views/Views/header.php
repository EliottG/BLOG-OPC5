<nav class="navbar navbar-expand-sm navbar-dark bg-dark pt-3 pb-3 shadow">
    <a class="navbar-brand" href="<?= ROOT_DIR ?>accueil">Blog</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?php if ($title == 'Accueil') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= ROOT_DIR ?>accueil">Accueil <span class="sr-only"></span></a>
            </li>
            <li class="nav-item <?php if ($title == 'Articles') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= ROOT_DIR ?>articles">Articles</a>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Mon compte') {
                                                echo 'active';
                                            } ?>">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Membre</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php if (isset($_SESSION['id'])) : ?>
                        <?php if (isset($_SESSION['role']) && ($_SESSION['role'][0]) == 'Admin') : ?>
                            <a class="dropdown-item" href="<?= ROOT_DIR ?>administration">Administration</a>
                        <?php endif ?>
                        <a class="dropdown-item" href="<?= ROOT_DIR ?>compte">Mon compte</a>
                        <a class="dropdown-item" href="<?= ROOT_DIR ?>deconnexion">Se déconnecter</a>
                    <?php else : ?>
                        <a class="dropdown-item" href="<?= ROOT_DIR ?>connexion">Se connecter</a>
                        <a class="dropdown-item" href="<?= ROOT_DIR ?>inscription">S'inscrire</a>
                    <?php endif ?>
                </div>
            </li>
        </ul>
    </div>
</nav>