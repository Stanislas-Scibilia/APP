<?php

function verification_session($role) {
    if (empty($_SESSION['connexion']) or $_SESSION['connexion'] != $role) {
        $url = '/?fonction=connexion';
        $message = 'Vous devez vous connecter pour accéder à la ressource précédemment demandée.';
        header('Location: ' . $url);
    }
}