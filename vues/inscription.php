<div class="container">
    <h1>Inscription</h1>
    <?php echo $erreur ?>
    
    <form action="" method="post">   
        <input class="barre_inscription" type="text" name="identifiant" id="identifiant" placeholder="Identifiant" maxlength="50" value = <?php if (isset($_SESSION["identifiant"])) {echo $_SESSION["identifiant"];}?>>
        <br>
        <input class="barre_inscription" type="text" name="prenom" id="prenom" placeholder="Prénom" maxlength="50" value = <?php if (isset($_SESSION["prenom"])) {echo $_SESSION["prenom"];}?>>
        <br>
        <input class="barre_inscription" type="text" name="nom" id="nom" placeholder="Nom" maxlength="50" value = <?php if (isset($_SESSION["nom"])) {echo $_SESSION["nom"];}?>>
        <br>
        <label for="datenaissance"> Date de naissance</label>
        <br>
        <input class="barre_inscription" type="date" name="datenaissance" id="datenaissance" value = <?php if (isset($_SESSION["datenaissance"])) {echo $_SESSION["datenaissance"];}?>>
        <br>
        <label for="genre">Genre</label>
        <br>
        <select name="genre">
        <option value="homme"> Homme </option>
        <option value="femme"> Femme </option>
        <option value="autre"> Autre </option>
        </select>
        <br>
        <input class="barre_inscription" type="email" name="email" id="email" placeholder="email@example.org" maxlength="50" value = <?php if (isset($_SESSION["email"])) {echo $_SESSION["email"];};?>>
        <br>
        <input class="barre_inscription" type="text" name="adresse" id="adresse" placeholder="Numéro & nom de rue" maxlength="100" value = <?php if (isset($_SESSION["adresse"])) {echo $_SESSION["adresse"];};?>>
        <br>
        <input class="barre_inscription" type="text" name="codepostal" id="codepostal" placeholder="Code postal" maxlength="50" value = <?php if (isset($_SESSION["codepostal"])) {echo $_SESSION["codepostal"];};?>>
        <br>
        <input class="barre_inscription" type="text" name="ville" id="ville" placeholder="Ville" maxlength="50" value = <?php if (isset($_SESSION["ville"])) {echo $_SESSION["ville"];};?>>
        <br>
        <input class="barre_inscription" type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" maxlength="50">
        <br>
        <input class="barre_inscription" type="password" name="motdepasse2" id="motdepasse2" placeholder="Confirmez votre mot de passe" maxlength="50">
        <br>
        <p>Au moins 8 caractères et doit comporter des caractères spéciaux et numériques</p>
        <br>
        <input type="checkbox" name="CGU" id="CGU" value = <?php if (isset($_SESSION["CGU"])) {echo $_SESSION["CGU"];};?>>
        <label for="CGU">Accepter les conditions générales d'utilisation et les règles de confidentialité.</label>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
    
</div>
