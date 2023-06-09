<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Accueil | Mairie de Sévigny-la-Forêt</title> -->
    <link rel="icon" type="image/x-icon" href="../assets/img/HomeVisitCard/BlasonSLF.svg">
    <!-- Importation CSS -->
    <link rel="stylesheet" href="../sass/style.css">
    <!-- Importation JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/menuBurger.js"></script>
    <script src="../assets/js/calendar.js"></script>
    <script src="../assets/js/searchbar.js"></script>
    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- FullCalendar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <?php
        if (file_exists('php/headPage.php')){
            require 'php/headPage.php';
        }else{
            require '../php/headPage.php';
        }
        verifName(pageName());
        echo '<link rel="canonical" href="https://www.mairiesevignylaforet.fr'.pageName().'">';
        // echo '<script>headerBackground("'.pageName().'")</script>';
    ?>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G1LJ83H2B8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G1LJ83H2B8');
    </script>
</head>
<body>
    <?php
        session_start();
    ?>
    <header>