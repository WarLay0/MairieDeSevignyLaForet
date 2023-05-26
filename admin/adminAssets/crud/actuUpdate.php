<?php

$id = $_GET['id'];

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("SELECT * FROM actu WHERE id = :id");
$requete->bindParam(':id', $id);
$requete->execute();
$actu = $requete->fetch(PDO::FETCH_ASSOC);

?>

<form action="actuUpdateCode.php" method="post">
    <input type="hidden" name="id" value="<?= $actu['id'] ?>">
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value="<?= $actu['titre'] ?>">
    <label for="texte">Texte</label>
    <input type="text" name="texte" id="texte" value="<?= $actu['texte'] ?>">
    <label for="categorie">Catégorie</label>
    <input type="text" name="categorie" id="categorie" value="<?= $actu['categorie'] ?>">
    <label for="fichier">Fichier</label>
    <input type="text" name="fichier" id="fichier" value="<?= $actu['fichier'] ?>">
    <input type="submit" value="Modifier">
</form>