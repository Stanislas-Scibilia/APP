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

function creerMesure() {
    include('modele/connexionBDD.php');
    global $id_Mesure;
    
    $sql = 'SELECT id_Mesure FROM mesures ORDER BY id_Mesure DESC LIMIT 1';
    $result = $conn->query($sql);
    $id_Mesure = $result->fetch_assoc()['id_Mesure'];
    
    $id_Mesure+=1;
    $sql = "INSERT INTO mesures (id_Mesure) VALUES ($id_Mesure)";

    if ($conn->query($sql) === TRUE) {
        $message = "New record created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
