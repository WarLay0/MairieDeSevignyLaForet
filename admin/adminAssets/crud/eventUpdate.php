<?php

$id = $_GET['id'];

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("SELECT * FROM event WHERE id = :id");
$requete->bindParam(':id', $id);
$requete->execute();
$event = $requete->fetch(PDO::FETCH_ASSOC);

?>

<form action="eventUpdateCode.php" method="post">
    <input type="hidden" name="id" value="<?= $event['id'] ?>">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" value="<?= $event['title'] ?>">
    <label for="start">Début</label>
    <input type="datetime-local" name="start" id="start" value="<?= $event['start'] ?>">
    <label for="end">Fin</label>
    <input type="datetime-local" name="end" id="end" value="<?= $event['end'] ?>">
    <label for="url">Lien</label>
    <input type="text" name="url" id="url" value="<?= $event['url'] ?>">
    <input type="submit" value="Modifier">
</form>