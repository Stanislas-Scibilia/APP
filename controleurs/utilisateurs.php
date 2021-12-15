<?php

session_start();

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
        
        if (!empty($_POST)) {
            if ($_POST['identifiant']==='test' and $_POST['motdepasse']==='test') {
                $_SESSION['connexion'] = 'user';
                $message = "Vous êtes connecté en tant qu'utilisateur.";
            } elseif ($_POST['identifiant']==='admin' and $_POST['motdepasse']==='test') {
                $_SESSION['connexion'] = 'admin';
                $message = "Vous êtes connecté en tant qu'administrateur.";
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
    
    case 'deconnexion':
        $vue = 'accueil';
        $_SESSION['connexion'] = false;
        break;

    case 'mentionslegales':
        $vue = 'mentionslegales';
        break;

    default:
        $vue = '404';
        break;
}

include('vues/header.php');

if (!empty($_SESSION) and $_SESSION['connexion'] === 'admin') {
    include('vues/navbar1.php');
} elseif (!empty($_SESSION) and $_SESSION['connexion'] === 'user') {
    include('vues/navbar2.php');
} else {
    include('vues/navbar.php');
}

include('vues/fildariane.php');
include('vues/' . $vue . '.php');
include('vues/footer.php');