<?php

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("INSERT INTO event (title, start, end, url) VALUES (:title, :start, :end, :url)");
$requete->bindParam(':title', $_POST['title']);
$requete->bindParam(':start', $_POST['start']);
$requete->bindParam(':end', $_POST['end']);
$requete->bindParam(':url', $_POST['url']);
$requete->execute();

header('Location: ../../admin.php');