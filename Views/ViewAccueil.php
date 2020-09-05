<?php

$title = 'Accueil';
?>

    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Eliott GDC</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Voici mon tout premier blog en PHP </p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">En savoir plus</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Bienvenue !</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Ce blog est mon premier blog en PHP crée à partir de zéro. L'architecture est en MVC et il possède 3 CRUD pour les articles, les utilisateurs et les commentaires. Le blog possède aussi un système d'administration.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">C'est partit !</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Comment ça marche</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Inscription</h3>
                            <p class="text-muted mb-0">Pour tester le site, tu peux tout simplement créer un compte en <a href="<?php htmlentities(ROOT_DIR) ?>inscription">cliquant-ici</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Poster ou commenter</h3>
                            <p class="text-muted mb-0">Ensuite tu peux tout simplement créer tes propres articles ou bien en commenter !</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Seulement regarder</h3>
                            <p class="text-muted mb-0">Il est possible de regarder les articles sans s'inscrire, mais tu ne pourras pas commenter.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">La seule règle</h3>
                            <p class="text-muted mb-0">Respect est le maître mot dans ce blog que l'on soit auteur ou simple utilisateur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Curieux(se) de voir les articles ? </h2>
                <a class="btn btn-light btn-xl" href="<?php htmlentities(ROOT_DIR) ?>articles">Voir les articles</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Pour me contacter</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Pour une éventuelle question ou bien une information, il est possible de me contacter facilement via mes coordonnées</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>06 12 46 24 73</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:eliott.geoffroy@gmail.com">eliott.geoffroy@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
