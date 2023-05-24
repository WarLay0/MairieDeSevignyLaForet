<?php
session_start();

// Vérfication si le formulaire est bien envoyé
if(empty($_POST)){
    echo 'Formulaire non envoyé';
}else {
    //Récupération des données du formulaire
    $prenom = $_POST['name'];
    $nom = $_POST['fname'];
    $email = $_POST['mail'];
    $message = $_POST['message'];
    $mailAdmin = 'test-065r8k4us@srv1.mail-tester.com';

    //Filtrer et nétoyer les données
    
    htmlspecialchars($prenom); 
    htmlspecialchars($nom);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    htmlspecialchars($message);

    //Valdation des données / Accepter les traits d'union et les espaces
    $prenom = filter_var($prenom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z- ]*$/")));
    $nom = filter_var($nom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z- ]*$/")));
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $message = filter_var($message, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z- ]*$/")));

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
    if(empty($_SESSION['errors'])){
        //Code pour rcevoir le mail
        $messageMail = 'Nom : '.$nom.'\nPrénom : '.$prenom.'\nEmail : '.$email.'\nMessage : '.$message;
        $subject = $prenom.' '.$nom.' Site Internet - Mairie de Sévigny-La-Forêt';
        mail($mailAdmin, $subject, $messageMail, 'From: '. 'site@evan-bombart.fr');
        header('Location: ../index.php#ContactFlex');        
    }else {
        header('Location: ../index.php#ContactFlex');
    }
 
}