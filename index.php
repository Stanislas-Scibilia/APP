<?php

// Activation des erreurs
ini_set('display_errors', 1);

if(isset($_GET['cible']) && !empty($_GET['cible'])) {

    $url = $_GET['cible'];
    
} else {

    $url = 'utilisateurs';
}

include('controleurs/' . $url . '.php');