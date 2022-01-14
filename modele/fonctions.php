<?php

function creerUser() {
    include('modele/connexionBDD.php');
    $sql = "INSERT INTO utilisateurs (id_Utilisateur) VALUES (10)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = 'SELECT id_Utilisateur FROM Table ORDER BY ID DESC LIMIT 1';
    $result = $conn->query($sql);
    echo $result->fetch_assoc();

    $conn->close();
}