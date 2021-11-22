<div class="container">
    <h1>Inscription</h1>
    
    <form action="" method="post">
           
        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
        <br>
        <input type="text" name="nom" id="nom" placeholder="nom">
        <br>
        <label for="datenaissance"> Date de naissance</label>
        <br>
        <input type="date" name="datenaissance" id="datenaissance">
        <br>
        <input list="genre" placeholder="genre">
        <datalist id="genre">
            <option value="Femme">
            <option value="Homme">
            <option value="Autre">
        </datalist>
        <br>
        <input type="email" name="mail" id="mail" placeholder="email@example.org">
        <br>
        <input type="text" name="adresse" id="adresse" placeholder="numéro & nom de rue">
        <br>
        <input type="text" name="codepostal" id="codepostal" placeholder="code postal">
        <br>
        <input type="text" name="ville" id="ville" placeholder="Ville">
        <br>
        <input type="password" name="motdepasse" id="motdepasse" placeholder="mot de passe">
        <br>
        <input type="password" name="motdepasse2" id="motdepasse2" placeholder="confirmez votre mot de passe">
        <br>
        <p>Au moins 8 caractères et doit comporter des caractères spéciaux et numériques</p>
        <br>
        <input type="checkbox" name="CGU" id="CGU">
        <label for="CGU">Accepter les conditions générales d'utilisation et les règles de confidentialité.</label>
        <br>
        <input type="submit" value="s'inscrire">
    </form>
</div> 