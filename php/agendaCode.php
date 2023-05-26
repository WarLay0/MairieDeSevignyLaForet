<?php

require '../php/bdd.php';

$co = bdd();
$requete = $co->prepare("SELECT * FROM event");
$requete->execute();
$events = $requete->fetchAll(PDO::FETCH_ASSOC);

//Mettre tous les éléents dans une div

foreach ($events as $event) {
    echo '<div data-event-id="'.$event['id'].'" data-event-title="'.$event['title'].'" data-event-start="'.$event['start'].'" data-event-end="'.$event['end'].'" data-event-url="'.$event['url'].'"></div>';
}


// Fermeture de la connexion PDO
deco($connexion);