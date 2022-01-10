<div class="container">
    <h1>Inscription</h1>
    
    <form action="" method="post">
           
        <input class="barre_inscription" type="text" name="prenom" id="prenom" placeholder="Prénom">
        <br>
        <input class="barre_inscription" type="text" name="nom" id="nom" placeholder="Nom">
        <br>
        <label for="datenaissance"> Date de naissance</label>
        <br>
        <input class="barre_inscription" type="date" name="datenaissance" id="datenaissance">
        <br>
        <input class="barre_inscription" list="genre" placeholder="Genre">
        <datalist id="genre">
            <option value="Femme">
            <option value="Homme">
            <option value="Autre">
        </datalist>
        <br>
        <input class="barre_inscription" type="email" name="mail" id="mail" placeholder="email@example.org">
        <br>
        <input class="barre_inscription" type="text" name="adresse" id="adresse" placeholder="Numéro & nom de rue">
        <br>
        <input class="barre_inscription" type="text" name="codepostal" id="codepostal" placeholder="Code postal">
        <br>
        <input class="barre_inscription" type="text" name="ville" id="ville" placeholder="Ville">
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