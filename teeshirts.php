<?php
    // Créer une variable pour indiquer le nom de la page 
    $page = "teeshirts";

    // Inclure le code du fichier qui contient tout le haut de la page
    include("parties-communes/entete.php"); 
?>

<main class="page-teeshirts">
    <article class="amorce">
        <h1><?= $_->titrePage; ?></h1>
    </article>
    <article class="principal">
    <?= $_->aVenir; ?>
    </article>
</main>
<?php include("parties-communes/pied2page.php"); ?>