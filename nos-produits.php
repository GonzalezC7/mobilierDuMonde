<?php

/* Imports */
require __DIR__ . "/includes/head.php";
require __DIR__ . "/includes/nav.php";
require __DIR__ . "/includes/product.php";
require __DIR__ . "/includes/footer.php";

?>

<!DOCTYPE html>
<html lang="fr">

<?php show_head("Mobilier du monde | Nos produits"); ?>

<body>
    <!-- Menu -->
    <?php show_nav(["Accueil" => "index.php", "Nos produits" => "nos-produits.php", "Qui sommes nous ?" => "qui-sommes-nous.php"], "Nos produits"); ?>

    <section id="products" class="container">
        <h2 class="title">Mobilier d'intérieur</h2>
        <div class="row">
            <?php show_product("Fauteuil stylé", "assets/fauteuil.jpg", 250.99); ?>
            <?php show_product("Canapé stylé", "assets/canape.jpg", 800.99); ?>
        </div>
    </section>

    <section id="products" class="container">
        <h2 class="title">Mobilier d'extérieur</h2>
        <div class="row">
            <?php show_product("Salon de jardin", "assets/salon-jardin.jpg", 200.99); ?>
            <?php show_product("Barbecue", "assets/barbecue.jpg", 300.99); ?>
        </div>
    </section>

    <?php show_footer(); ?>
</body>

</html>