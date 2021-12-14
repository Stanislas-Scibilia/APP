<?php

if (isset($_GET['fonction']) && !empty($_GET['fonction'])) {
    $function = $_GET['fonction'];
} else {
    $function = "accueil";
}

switch($function) {
    case 'accueil':
        $vue = 'accueil';
        break;
    
    case 'connexion':
        $vue = 'connexion';
        session_start();
        if (!empty($_POST)) {
            if ($_POST['identifiant']==='test' and $_POST['motdepasse']==='test') {
                $_SESSION['connexion'] = true;
                $message = "Vous êtes connecté.";
            }
        }
        break;
    
    case 'activité_ludique':
        $vue = 'activité_ludique';
        break;

    case 'admin':
        $vue = 'admin';
        break;
    
    case 'gen.id':
        $vue = 'gen.id';
        $uuid = uniqid("", true);
        break;
    
    case 'inscription':
        $vue = 'inscription';
        break;
    
    case 'profil':
        $vue = 'profil';
        break;
    
    case 'faq':
        $vue = 'FAQ';
        break;

    default:
        $vue = '404';
        break;
}

include('vues/header.php');
include('vues/navbar.php');
include('vues/fildariane.php');
include('vues/' . $vue . '.php');
include('vues/footer.php');