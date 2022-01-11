<?php
$id_Utilisateur = $_POST["identifiant"];
$Nom = $_POST["nom"];
$Prénom = $_POST["prenom"];
$Adresse_email = $_POST["email"];
$Mot_de_passe = $_POST["motdepasse"];
$Type = "Client";
$Genre = $_POST["genre"];
$Date_de_naissance = $_POST["datenaissance"];
$Adresse = $_POST["adresse"];
$Ville = $_POST["ville"];
$Code_postal = $_POST["codepostal"];

updateUtilisateurs($conn, $id_Utilisateur, $Nom, $Prénom, $Adresse_email, $Mot_de_passe, $Type, $Genre, $Date_de_naissance, $Adresse, $Ville, $Code_postal);
?>