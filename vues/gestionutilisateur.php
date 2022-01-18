<?php
$bdd = new PDO('mysql:host=localhost;dbname=Fit_analysor;', 'root');
$allusers = $bdd->query('SELECT * FROM utilisateurs ORDER BY id_Utilisateur DESC');
if(isset($_GET['s']) AND !empty($_GET['s'])){
	$recherche = htmlspecialchars($_GET['s']);
	$allusers = $bdd->query('SELECT Nom, Prénom, id_Utilisateur,Genre,Adresse email, Mot de passe FROM utilisateurs WHERE Nom LIKE"%'.$recherche.'%" ORDER BY id DESC');
}
?>
<body>

	<form method="GET">
		<input type="search" name="s" placeholder="Rechercher un utilisateur" autocomplete="off">
		<input type="submit" name="envoyer">
	</form>
<<<<<<< HEAD
	
	<section class="afficher_utilisateur">

		<?php
			if($allusers->rowCount() > 0){
				while($user = $allusers->fetch()){
					?>
					<p><?= $user['Nom']; ?> <br/><?= $user['Prénom'] ?> <br/> <?= $user['id_Utilisateur'] ?> <br/><?= $user['Genre'] ?> <br/> <?= $user['Adresse email'] ?> <br/> <?= $user['Mot de passe'] ?></p>
					<?php  
				}

			}else{
				?>
				<p>Aucun utilisateur trouvé</p>
				<?php
			}

		?>
	</section>
</body>
=======

	<input type="text" id="recherche" onkeyup="chercher_utilisateur()" placeholder="Rechercher un utilisateur..."> 
	<?php
	echo "<table class='utilisateurs'>";
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
	</div>
</body>
<script src="vues/gestionutilisateur.js"></script>
>>>>>>> 1e4b10edebb37a419657934a370ec646d272f736
