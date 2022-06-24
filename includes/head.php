<?php

/**
 * includes/head.php - Affichage du head de la page
 */

/**
 * Fonction d'affichage du head
 * Paramètres:
 * - $title Titre de la page
 */

/* A FAIRE: Créer la fonction show_head */

function show_head($title)
{
    echo '<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$title.'</title>
            <link rel="stylesheet" href="./assets/style/style.css">
          </head>';
}
?>
