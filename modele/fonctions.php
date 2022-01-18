<?php

function creerUser() {
    include('modele/connexionBDD.php');

    $sql = 'SELECT id_Utilisateur FROM utilisateurs ORDER BY id_Utilisateur DESC LIMIT 1';
    $result = $conn->query($sql);
    $id_Utilisateur = $result->fetch_assoc()['id_Utilisateur'];
    
    $id_Utilisateur+=1;
    $sql = "INSERT INTO utilisateurs (id_Utilisateur) VALUES ($id_Utilisateur)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}