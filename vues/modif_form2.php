<div class="container">
    <h1>Modification</h1>
    <?php if (isset($confirmation)) {echo $confirmation;} ?>
    <form action="" method="post">
        <input class="barre_inscription" type="text" name="prenom" id="prenom" placeholder="Prénom" maxlength="50" value="<?php if(isset($_SESSION["prenom"])){echo $_SESSION["prenom"];}?>">
        <br>
        <input class="barre_inscription" type="text" name="nom" id="nom" placeholder="Nom" maxlength="50" value="<?php if(isset($_SESSION["nom"])){echo $_SESSION["nom"];}?>">
        <br>
        <label for="datenaissance"> Date de naissance</label>
        <br>
        <input class="barre_inscription" type="date" name="datenaissance" id="datenaissance" value="<?php if(isset($_SESSION["datenaissance"])){echo $_SESSION["datenaissance"];}?>">
        <br>
        <label for="genre">Genre</label>
        <br>
        <select name="genre">
        <option value="homme"> Homme </option>
        <option value="femme"> Femme </option>
        <option value="autre"> Autre </option>
        </select>
        <br>
        <input class="barre_inscription" type="email" name="email" id="email" placeholder="email@example.org" maxlength="50" value="<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?>">
        <br>
        <input class="barre_inscription" type="text" name="adresse" id="adresse" placeholder="Numéro & nom de rue" maxlength="100" value="<?php if(isset($_SESSION["adresse"])){echo $_SESSION["adresse"];}?>">
        <br>
        <input class="barre_inscription" type="text" name="codepostal" id="codepostal" placeholder="Code postal" maxlength="50"value="<?php if(isset($_SESSION["codepostal"])){echo $_SESSION["codepostal"];}?>">
        <br>
        <input class="barre_inscription" type="text" name="ville" id="ville" placeholder="Ville" maxlength="50" value="<?php if(isset($_SESSION["ville"])){echo $_SESSION["ville"];}?>">
        <br>
        <input class="barre_inscription" type="text" name="motdepasse" id="motdepasse" placeholder="Mot de passe" maxlength="50" value="<?php if(isset($_SESSION["motdepasse"])){echo $_SESSION["motdepasse"];}?>">
        <br>
        <label for="type">Type</label>
        <br>
        <select name="type">
        <option value="Client"> Client </option>
        <option value="Gérant"> Gérant </option>
        </select>
        <br>
        <br>
        <input type="submit" value="Modifier les informations">
        <br>
    </form>
    
</div>
