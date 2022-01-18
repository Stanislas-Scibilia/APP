<?php

function verification_session($role) {
    if (empty($_SESSION['connexion']) or $_SESSION['connexion'] != $role) {
        $url = '/?fonction=connexion';
        header('Location: ' . $url);
    }
}
//Permet d'appliquer htmlspecialchars à une donnée
function HTML_chars($data) {
    $data = htmlspecialchars($data);
    return $data;
}
function HTML_chars_decode($data) {
    $data = htmlspecialchars_decode($data);
    return $data;
}
?>