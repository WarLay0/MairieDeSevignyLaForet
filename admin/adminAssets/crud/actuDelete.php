<?php

$id = $_GET['id'];

require '../../../php/bdd.php';
$co = bdd();

$requete = $co->prepare("DELETE FROM actu WHERE id = :id");
$requete->bindParam(':id', $id);
$requete->execute();

header('Location: ../../admin.php');