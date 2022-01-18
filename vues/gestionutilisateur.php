
    <form action="" method="POST">
        <input type="search" name="s" placeholder="Rechercher un utilisateur" autocomplete="off">
        <input type="submit" name="envoyer">
    </form>

    <section class="afficher_utilisateur">



        <?php
            if($allusers->num_rows > 0){
                while($user = $allusers->fetch_assoc()){
                    ?>
                    <p><?= $user['Nom']; ?> <br/><?= $user['Prenom'] ?> <br/> <?= $user['id_Utilisateur'] ?> <br/><?= $user['Genre'] ?> <br/> <?= $user['Adresse_email'] ?> <br/> <?= $user['Mot_de_passe'] ?></p>
                    <?php  
                }



            }else{
                ?>
                <p>Aucun utilisateur trouvé</p>
                <?php
            }



        ?>
    </section>

	<input type="text" id="recherche" onkeyup="chercher_utilisateur()" placeholder="Rechercher un utilisateur..."> 
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
