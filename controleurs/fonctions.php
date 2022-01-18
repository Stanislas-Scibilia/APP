<?php

function verification_session($role) {
    if (empty($_SESSION['connexion']) or $_SESSION['connexion'] != $role) {
        $url = '/?fonction=connexion';
        header('Location: ' . $url);
    }
}
//Permet d'appliquer htmlspecialchars à une donnée
function test($data) {
    $data = htmlspecialchars($data);
    return $data;
}
?>