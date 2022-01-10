<?php

function verification_session($role) {
    if (empty($_SESSION['connexion']) or $_SESSION['connexion'] != $role) {
        $url = '/?fonction=connexion';
        header('Location: ' . $url);
    }
}