<?php

require '../php/bdd.php';

$co = bdd();

$requeteEvent = $co->prepare("SELECT * FROM event");
$requeteEvent->execute();
$events = $requeteEvent->fetchAll(PDO::FETCH_ASSOC);
