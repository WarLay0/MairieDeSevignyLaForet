<?php

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("UPDATE event SET title = :title, start = :start, end = :end, url = :url WHERE id = :id");
$requete->bindParam(':title', $_POST['title']);
$requete->bindParam(':start', $_POST['start']);
$requete->bindParam(':end', $_POST['end']);
$requete->bindParam(':url', $_POST['url']);
$requete->bindParam(':id', $_POST['id']);
$requete->execute();

header('Location: ../../admin.php');