<div class="container">
    <h1>Inscription</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
           
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
        <input class="barre_inscription" list="genre" placeholder="Genre">
        <datalist id="genre">
            <option value="Femme">
            <option value="Homme">
            <option value="Autre">
        </datalist>
        <br>
        <input class="barre_inscription" type="email" name="email" id="email" placeholder="email@example.org">
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

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fit_analysor";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>

<?php
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

$reponse = $conn->prepare("update utilisateurs set Nom = ?, Prénom = ?, Adresse email = ?, Mot de passe = ?, Type = ?, Genre = ?, Date de naissance = ?, Adresse = ?, Ville = ?, Code postal = ? where id = ?");
$reponse->execute(array($_GET["Nom"],$_GET["Prénom"], $_GET["Adresse_mail"],$_GET["Mot_de_passe"], $_GET["Type"], $_GET["Genre"], $_GET["Date_de_naissance"], $_GET["Adresse"], $_GET["Ville"], $_GET["Code_postal"] ));
return $reponse;

?>