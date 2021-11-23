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
        break;
    
    case 'jeuLudique':
        $vue = 'jeuLudique';
        break;

    case 'admin':
        $vue = 'admin';
        break;
    
    case 'gen.id':
        $vue = 'gen.id';
        break;
    
    case 'inscription':
        $vue = 'inscription';
        break;
    
    case 'profil':
        $vue = 'profil';
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
