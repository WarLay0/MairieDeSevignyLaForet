<?php

require '../php/bdd.php';

$co = bdd();
$requete = $co->prepare("SELECT * FROM actu");
$requete->execute();
$actus = $requete->fetchAll(PDO::FETCH_ASSOC);

//Mettre tous les éléents dans un <article>

foreach ($actus as $actu){
    echo '<article class="actuArticle">';
    echo '<h2 class="actuTitre">'.$actu['titre'].'</h2>';
    echo '<p>'.$actu['texte'].'</p>';
    echo '<p class="actuDate">'.$actu['date'].'</p>';
    echo '<p class="actuCatégorie">'.$actu['categorie'].'</p> ';
    echo '<img class="actuImage" src="../assets/img/actu/'.$actu['fichier'].'">';
    echo '</article>';
    echo '<hr>';
    ;
}


