<?php
// Récupération des données de connexion à la base de données
require '../admin/bddaccess.php';
// Démarrage de la session
session_start();

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