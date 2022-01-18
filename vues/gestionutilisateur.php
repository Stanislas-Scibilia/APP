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