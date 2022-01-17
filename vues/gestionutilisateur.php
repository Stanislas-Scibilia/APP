<body>

	
		<?php
	echo "<table>";
		echo "<tr><th>identifiant</th><th>Prénom</th><th>Nom</th><th>Adresse e-mail</th><th>Mot de passe</th><th>Type</th><th>Genre</th><th>Date de naissance</th><th>Adresse</th><th>Ville</th><th>Code postal</th>";
		
		while($row = $sqldata->fetch_assoc()) {
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
		<?php
		$articles =$sqldata->query('SELECT * FROM articles');

		if(isset($_GET['q'] AND !empty($_GET['q'])){
			$q = htmlspecialchars($_GET['q']);
			$artciles = $sqldata->query('SELECT * FROM articles WHERE * LIKE "%".$q."%" );
		}

	<form method="GET">
		<input type="search" name="q" placeholder="Recherche..."/> 
		<input type="submit" value="Valider">
	</form>
</body>
<script src="vues/gestionutilisateur.js"></script>
