<div class="container">
    <h1>Modification</h1>
    <?php echo $confirmation ?>
    <form action="" method="post">
        <input class="barre_inscription" type="text" name="identifiant" id="identifiant" placeholder="Identifiant" maxlength="50">
        <br> 
        <input class="barre_inscription" type="text" name="prenom" id="prenom" placeholder="Prénom" maxlength="50">
        <br>
        <input class="barre_inscription" type="text" name="nom" id="nom" placeholder="Nom" maxlength="50">
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
        <input class="barre_inscription" type="email" name="email" id="email" placeholder="email@example.org" maxlength="50">
        <br>
        <input class="barre_inscription" type="text" name="adresse" id="adresse" placeholder="Numéro & nom de rue" maxlength="100">
        <br>
        <input class="barre_inscription" type="text" name="codepostal" id="codepostal" placeholder="Code postal" maxlength="50">
        <br>
        <input class="barre_inscription" type="text" name="ville" id="ville" placeholder="Ville" maxlength="50">
        <br>
        <input type="submit" value="Modifier les informations">
        <br>
        <input type="submit" value="Supprimer l'utilisateur" onclick=supprUser(<?php if (isset($_SESSION["identifiant"])) {echo $_SESSION["identifiant"];}?>)>
    </form>
    
</div>
