<?php

function creerUser() {
    include('modele/connexionBDD.php');
    global $id_Utilisateur;
    
    $sql = 'SELECT id_Utilisateur FROM utilisateurs ORDER BY id_Utilisateur DESC LIMIT 1';
    $result = $conn->query($sql);
    $id_Utilisateur = $result->fetch_assoc()['id_Utilisateur'];
    
    $id_Utilisateur+=1;
    $sql = "INSERT INTO utilisateurs (id_Utilisateur) VALUES ($id_Utilisateur)";

    if ($conn->query($sql) === TRUE) {
        $message = "New record created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function supprCompte($valeur) {
    include('modele/connexionBDD.php');
    var_dump($valeur);
    global $suppression;
    $sql="DELETE FROM utilisateurs_capteurs WHERE id_Utilisateur='$valeur'";
    $conn->query($sql);
    /*$sql2="DELETE FROM utilisateurs WHERE id_Utilisateur='$valeur'";
    $conn->query($sql2);*/
    if ($conn->connect_error) {
        $suppression = "Le compté n'a pas été supprimé";
    } else {
       $suppression = "Le compte a bien été supprimé";
    }
}