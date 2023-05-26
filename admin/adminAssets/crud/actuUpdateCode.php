<?php

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("UPDATE actu SET titre = :titre, texte = :texte, categorie = :categorie, fichier = :fichier, date = :date WHERE id = :id");
$requete->bindParam(':titre', $_POST['titre']);
$requete->bindParam(':texte', $_POST['texte']);
$requete->bindParam(':categorie', $_POST['categorie']);
$requete->bindParam(':fichier', $_POST['fichier']);
$requete->bindParam(':date', date('Y-m-d H:i:s'));
$requete->bindParam(':id', $_POST['id']);
$requete->execute();

header('Location: ../../admin.php');