<?php

/**
 * includes/product.php - Affichage d'un produit
 */

/**
 * Fonction d'affichage d'un produit
 * Paramètres:
 * - $name Nom du produit
 * - $picture Lien de l'image
 * - $price Prix du produit
 */

/* A FAIRE: Créer la fonction show_product */

function show_product($name, $picture, $price)
{
    echo '<div class = box-box>';
    echo '<h2 class = "titre" >'.$name.'</h2>';
    echo '<div class = "box-img" >';
    echo '<img class = "picture-retouche" src="'.$picture.'">';
         '</div>';
    echo '<div class = "prix" >'.$price.'</div>';
         '</div>';
}
