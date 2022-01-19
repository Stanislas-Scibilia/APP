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