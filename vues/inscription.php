<div class="container">
    <h1>Inscription</h1>
    <?php echo $erreur ?>
    <form action="" method="post">
           
        <input class="barre_inscription" type="text" name="identifiant" id="identifiant" placeholder="Identifiant">
        <br>
        <input class="barre_inscription" type="text" name="prenom" id="prenom" placeholder="Prénom">
        <br>
        <input class="barre_inscription" type="text" name="nom" id="nom" placeholder="Nom">
        <br>
        <label for="datenaissance"> Date de naissance</label>
        <br>
        <input class="barre_inscription" type="date" name="datenaissance" id="datenaissance">
        <br>
        <label for="genre">Genre</label>
        <br>
        <select name="genre">
        <option value="homme"> Homme </option>
        <option value="femme"> Femme </option>
        <option value="autre"> Autre </option>
        </select>
        <br>
        <input class="barre_inscription" type="email" name="email" id="email" placeholder="email@example.org">
        <br>
        <input class="barre_inscription" type="text" name="adresse" id="adresse" placeholder="Numéro & nom de rue">
        <br>
        <input class="barre_inscription" type="text" name="codepostal" id="codepostal" placeholder="Code postal">
        <br>
        <input class="barre_inscription" type="text" name="ville" id="ville" placeholder="Ville" maxlength="50" >
        <br>
        <input class="barre_inscription" type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe">
        <br>
        <input class="barre_inscription" type="password" name="motdepasse2" id="motdepasse2" placeholder="Confirmez votre mot de passe">
        <br>
        <p>Au moins 8 caractères et doit comporter des caractères spéciaux et numériques</p>
        <br>
        <input type="checkbox" name="CGU" id="CGU">
        <label for="CGU">Accepter les conditions générales d'utilisation et les règles de confidentialité.</label>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
    
</div>
<!--
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
-->