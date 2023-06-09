<?php
session_start();

// Vérfication si le formulaire est bien envoyé
if(empty($_POST)){
    echo 'Formulaire non envoyé';
}else {
    //Vider les données de la session
    unset($_SESSION['errors']);
    //Récupération des données du formulaire
    $prenom = $_POST['name'];
    $nom = $_POST['fname'];
    $email = $_POST['mail'];
    $message = $_POST['message'];
    $mailAdmin = 'mairie.sevigny-la-foret@wanadoo.fr';

    //Filtrer et nétoyer les données
    
    htmlspecialchars($prenom); 
    htmlspecialchars($nom);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    htmlspecialchars($message);

    //Valdation des données / Accepter les traits d'union et les espaces
    $prenom = filter_var($prenom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZÀ-ÿ -]*$/")));
    $nom = filter_var($nom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZÀ-ÿ -]*$/")));
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $message = filter_var($message, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZÀ-ÿ -]*$/")));

    //Créer un ableau d'erreu qui sera socké dans la session
    $errors = [];

    //Remplir le tableau d'erreur
    if($prenom == false or $prenom == null){
        array_push($errors, 'prenom');
    }
    if($nom == false or $nom == null){
        array_push($errors, 'nom');
    }
    if($email == false or $email == null){
        array_push($errors, 'mail');
    }
    if($message == false or $message == null){
        array_push($errors, 'mail');
    }

    $_SESSION['errors'] = $errors;
    if (empty($_SESSION['errors'])) {
        $messageMail = '<html><body>';
        $messageMail .= '<h1>Message de ' . $prenom . ' ' . $nom . '</h1>';
        $messageMail .= '<p>' . $message . '</p>';
        $messageMail .= '</body></html>';
        $subject = $prenom . ' ' . $nom . ' - Site Internet - Mairie de Sévigny-La-Forêt';
        $headers = 'From: no-reply@mairiesevignylaforet.fr' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        mail($mailAdmin, $subject, $messageMail, $headers);
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php');
    }

 
}