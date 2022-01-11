<?php

function verification_session($role) {
    if (empty($_SESSION['connexion']) or $_SESSION['connexion'] != $role) {
        $url = '/?fonction=connexion';
        header('Location: ' . $url);
    }
}

function updateUtilisateurs($db, $id_Utilisateur, $Nom, $Prénom, $Adresse_email, $Mot_de_passe, $Type, $Genre, $Date_de_naissance, $Adresse, $Ville, $Code_postal){
	$reponse = $db->prepare("update utilisateurs set Nom = ?, Prénom = ?, Adresse email = ?, Mot de passe = ?, Type = ?, Genre = ?, Date de naissance = ?, Adresse = ?, Ville = ?, Code postal = ? where id = ?");
	$reponse->execute(array($_GET["Nom"],$_GET["Prénom"], $_GET["Adresse_mail"],$_GET["Mot_de_passe"], $_GET["Type"], $_GET["Genre"], $_GET["Date_de_naissance"], $_GET["Adresse"], $_GET["Ville"], $_GET["Code_postal"] ));
	return $reponse;
}