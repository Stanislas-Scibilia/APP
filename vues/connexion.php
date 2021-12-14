<div class="connexion">
        
        <div class="element_connexion">Contacte ta salle pour récupérer ton identifiant</div>

        <form action="" method="post">
                <input class="barre_connexion" type="text" name="identifiant" id="identifiant" placeholder="identifiant">
	        <br>
                <input class="barre_connexion" type="password" name="motdepasse" id="motdepasse" placeholder="mot de passe">
                <br>
                <div class="bouton_connexion"> <input type="submit" value="connexion"> </div>
        </form>
        <br>
        <?php if (isset($message)) {echo $message;} ?>
</div>