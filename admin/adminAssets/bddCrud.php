<?php

require '../php/bdd.php';

$co = bdd();

$requeteEvent = $co->prepare("SELECT * FROM event");
$requeteEvent->execute();
$events = $requeteEvent->fetchAll(PDO::FETCH_ASSOC);

$requeteActu = $co->prepare("SELECT * FROM actu");
$requeteActu->execute();
$actus = $requeteActu->fetchAll(PDO::FETCH_ASSOC);