<?php

if (!file_exists('../php/bdd.php')) {
    require 'php/bdd.php';
}else{
    require '../php/bdd.php';
}


function actu(){
    $co = bdd();
    $requete = $co->prepare("SELECT * FROM actu");
    $requete->execute();
    $actus = $requete->fetchAll(PDO::FETCH_ASSOC);

    //Mettre tous les éléents dans un <article>

    foreach ($actus as $actu){
        echo '<article class="actuArticle" id="'.str_replace(' ', '', $actu['titre']).'">';
        echo '<h2 class="actuTitre">'.$actu['titre'].'</h2>';
        echo '<p>'.$actu['texte'].'</p>';
        echo '<p class="actuDate">'.$actu['date'].'</p>';
        echo '<p class="actuCatégorie">'.$actu['categorie'].'</p> ';
        echo '<img class="actuImage" src="../assets/img/actu/'.$actu['fichier'].'">';
        echo '</article>';
        echo '<hr>';
        ;
    }
    deco($co);
}

//Récupérer le premier élément dans une fonction

function firstActu(){
    $co = bdd();
    $requete = $co->prepare("SELECT * FROM actu ORDER BY id DESC LIMIT 1");
    $requete->execute();
    $actus = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach ($actus as $actu){
        echo '<h3>'.$actu['titre'].'</h3>';
        echo '<p>'.$actu['texte'].'</p>';
        echo '<a href="pages/actu.php#'.str_replace(' ', '', $actu['titre']).'">Accéder à l\'agenda</a>';
    }
    deco($co);
}


