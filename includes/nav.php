<?php

/**
 * includes/nav.php - Affichage du nav de la page
 */

/**
 * Fonction d'affichage du menu de navigation
 * Paramètres:
 * - $links Tableau associatifs des liens à afficher
 * - $active Clef du lien "actif" (page actuelle)
 */
function show_nav(array $links, string $active): void

{
  /* A FAIRE: Compléter la fonction */

  foreach($links as $key => $element) {
    
    echo 
    '<a href='.$element.'>'.$key.'</a>';

    // var_dump($key);
    // var_dump($element);
}

echo $active;

};