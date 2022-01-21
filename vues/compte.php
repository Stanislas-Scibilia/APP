<?php

echo'
<div class="compte">
    <h1>Veuillez contacter votre salle pour modifier les informations de votre compte</h1>
   
    <ul>
        <h3>Voici vos informations actuelles :</h3>
            <li>Identifiant : '.$_SESSION['id'].'</li>
            <li>Prénom : '.$_SESSION['Prenom'].'</li>
            <li>Nom : '.$_SESSION['Nom'].'</li>
            <li>Date de naissance : '.$_SESSION['date'].'</li>
            <li>Genre : '.$_SESSION['genre'].'</li>
            <li>Adresse mail : '.$_SESSION['Email'].'</li>
            <li>Adresse : '.$_SESSION['adresse'].'</li>
            <li>Ville : '.$_SESSION['ville'].'</li>
            <li>Code postal : '.$_SESSION['code'].'</li>
    </ul>
</div>';
?>