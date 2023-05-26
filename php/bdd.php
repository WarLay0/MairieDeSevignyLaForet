<?php
// Récupération des données de connexion à la base de données

// si pas de bddaccess.php, essayer /admin/bddaccess.php
if (file_exists('bddaccess.php')) {
    require '../admin/bddaccess.php';
} elseif (file_exists('../bddaccess.php')) {
    require '../bddaccess.php';
}elseif (file_exists('../../bddaccess.php')) {
    require '../../bddaccess.php';
}
// Démarrage de la session
function bdd(){
    $server = 'localhost';

    try{
        $connexion = new PDO("mysql:host=$server;dbname=mairiesevignylaforet", NAME, PASS);
        
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
      }

    return $connexion;
}

function deco(&$connexion){
    $connexion = null;
}