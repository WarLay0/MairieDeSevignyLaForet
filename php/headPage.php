<?php

function pageName(){
    $page = $_SERVER['PHP_SELF'];
    return $page;
}

function verifName($name){
    
    if (strpos($name , 'index')) {
        $page = 'Accueil';
        $meta = 'Bienvenue sur le site de la mairie de Sévigny-la-Forêt. Retrouvez toutes les informations concernant la mairie, les associations, les entreprises et les événements de la commune.';
    }else if (strpos($name , 'histoire')) {
        $page = 'Histoire';
        $meta = 'Découvrez l\'histoire de la commune de Sévigny-la-Forêt.';
    }else if (strpos($name , 'gallery')) {
        $page = 'Galerie';
        $meta = 'Découvrez les photos de la commune de Sévigny-la-Forêt.';
    }else if (strpos($name , 'actu')) {
        $page = 'Actualités';
        $meta = 'Retrouvez toutes les actualités de la commune de Sévigny-la-Forêt.';
    }else if (strpos($name , 'agenda')) {
        $page = 'Agenda';
        $meta = 'Retrouvez toutes les dates importantes de la commune de Sévigny-la-Forêt.';
    }

    echo '<title>'.$page.' | Mairie de Sévigny-la-Forêt</title>';
    echo '<meta name="description" content="'.$meta.'">';
    
}