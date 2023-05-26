<?php

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("INSERT INTO actu (titre, texte, categorie, fichier, date) VALUES (:titre, :texte, :categorie, :fichier, :date)");
$requete->bindParam(':titre', $_POST['titre']);
$requete->bindParam(':texte', $_POST['texte']);
$requete->bindParam(':categorie', $_POST['categorie']);
$requete->bindParam(':fichier', $_POST['fichier']);
$requete->bindParam(':date', date('Y-m-d H:i:s'));
$requete->execute();

header('Location: ../../admin.php');