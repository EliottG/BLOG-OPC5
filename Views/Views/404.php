<?php
$title = '404';
ob_start();
?>
<div class="container">
    <h1 class="error text-center">404</h1>
    <h3 class='text-center'>Not found</h3>
    <h3 class="error text-center mt-5">La page que tu cherches n'existe pas ou n'est pas disponible !</h3>
    <a href="<?= ROOT_DIR ?>accueil"> SE RENDRE VERS LA PAGE PRINCIPALE </a>
</div>
<?php
$content = ob_get_clean();
require 'template.php';
?>