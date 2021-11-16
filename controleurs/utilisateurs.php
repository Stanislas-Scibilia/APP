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
        $view = 'jeuLudique';
        break;
}

include('vues/header.php');
include('vues/navbar.php');
include('vues/fildariane.php');
include('vues/' . $vue . '.php');
include('vues/footer.php');
