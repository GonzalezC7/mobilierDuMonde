<?php

/* Imports */
require __DIR__ . "/includes/head.php";
require __DIR__ . "/includes/nav.php";
require __DIR__ . "/includes/product.php";
require __DIR__ . "/includes/footer.php";

?>

<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="style.css">

<?php show_head("Mobilier du monde | Accueil"); ?>

<body>
    <!-- Menu -->
    <?php show_nav(["Accueil" => "index.php", "Nos produits" => "nos-produits.php", "Qui sommes nous ?" => "qui-sommes-nous.php"], "Accueil"); ?>

    <!-- Présentation générale -->
    <section id="welcome" class="container">
        <h2 class="title left">Bienvenue sur notre site</h2>
        <div class="row">
            <img src="assets/images/welcome.jpg" />
            <p class="text-content">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Maxime accusamus odio officiis corporis dignissimos sint debitis et explicabo,
                fugiat, tenetur asperiores qui, veniam vitae ut aut maiores ipsa! Iure, odio!
            </p>
        </div>
    </section>

    <!-- Produits à l'honneur -->
    <section id="products" class="container">
        <h2 class="title">Nos produits à l'honneur</h2>
        <div class="row">
            <?php show_product("Fauteuil stylé", "assets/images/fauteuil.jpg", 250.99); ?>
            <?php show_product("Canapé stylé", "assets/images/canape.jpg", 800.99); ?>
        </div>
    </section>

    <?php show_footer(); ?>
</body>

</html>