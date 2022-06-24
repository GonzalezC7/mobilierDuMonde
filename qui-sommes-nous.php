<?php

/* Imports */
require __DIR__ . "/includes/head.php";
require __DIR__ . "/includes/nav.php";
require __DIR__ . "/includes/product.php";
require __DIR__ . "/includes/footer.php";

?>

<!DOCTYPE html>
<html lang="fr">

<?php show_head("Mobilier du monde | Qui sommes nous ?"); ?>

<body>
    <!-- Menu -->
    <?php show_nav(["Accueil" => "index.php", "Nos produits" => "nos-produits.php", "Qui sommes nous ?" => "qui-sommes-nous.php"], "Qui sommes nous ?"); ?>

    <!-- Présentation -->
    <section id="presentation" class="container">
        <h2 class="title left">Qui sommes nous ?</h2>
        <div class="row">
            <img src="assets/images/welcome.jpg" />
            <p class="text-content">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Maxime accusamus odio officiis corporis dignissimos sint debitis et explicabo,
                fugiat, tenetur asperiores qui, veniam vitae ut aut maiores ipsa! Iure, odio!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Maxime accusamus odio officiis corporis dignissimos sint debitis et explicabo,
                fugiat, tenetur asperiores qui, veniam vitae ut aut maiores ipsa! Iure, odio!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Maxime accusamus odio officiis corporis dignissimos sint debitis et explicabo,
                fugiat, tenetur asperiores qui, veniam vitae ut aut maiores ipsa! Iure, odio!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Maxime accusamus odio officiis corporis dignissimos sint debitis et explicabo,
                fugiat, tenetur asperiores qui, veniam vitae ut aut maiores ipsa! Iure, odio!
            </p>
        </div>
    </section>

    <?php show_footer(); ?>
</body>

</html>