	<input type="text" id="recherche" onkeyup="chercher_utilisateur()" placeholder="Rechercher un utilisateur...">
	<input type="button" id="modifier" onclick="window.location.href = '/?fonction=modif_form';" value="Modifier les données utilisateur">
	
	<?php
	echo "<table id ='utilisateurs' class='utilisateurs'>";
		echo "<tr><th>identifiant</th>
		<th>Prénom</th>
		<th>Nom</th>
		<th>Adresse e-mail</th>
		<th>Mot de passe</th>
		<th>Type</th>
		<th>Genre</th>
		<th>Date de naissance</th>
		<th>Adresse</th>
		<th>Ville</th>
		<th>Code postal</th></tr>";
		
	
		while($row = $allusers->fetch_assoc()) {
			echo "<tr><td>";
			echo $row['id_Utilisateur'];
			echo "</td><td>";
			echo $row['Prenom'];
			echo "</td><td>";
			echo $row['Nom'];
            echo "</td><td>";
			echo $row['Adresse_email'];
            echo "</td><td>";
			echo $row['Mot_de_passe'];
            echo "</td><td>";
			echo $row['Type'];
            echo "</td><td>";
			echo $row['Genre'];
            echo "</td><td>";
			echo $row['Date_de_naissance'];
            echo "</td><td>";
			echo $row['Adresse'];
            echo "</td><td>";
			echo $row['Ville'];
            echo "</td><td>";
			echo $row['Code_postal'];
			echo "</td></tr>";
		}
	echo "</table>";
	?>
<script src="vues/gestionutilisateur.js"></script>