<?php

session_start();
include('controleurs/fonctions.php');
include('modele/fonctions.php');

if (isset($_GET['fonction']) && !empty($_GET['fonction'])) {
    $function = $_GET['fonction'];
} else {
    $function = "accueil";
}

switch($function) {
    case 'accueil':
        $vue = 'accueil';
        break;
    
    case 'connexion':
        $vue = 'connexion';
        
        if (!empty($_POST)) {
            if ($_POST['identifiant']==='test' and $_POST['motdepasse']==='test') {
                $_SESSION['connexion'] = 'user';
                $message = "Vous êtes connecté en tant qu'utilisateur.";
                header("Location: /?fonction=profil");
                exit();
            } elseif ($_POST['identifiant']==='admin' and $_POST['motdepasse']==='test') {
                $_SESSION['connexion'] = 'admin';
                $message = "Vous êtes connecté en tant qu'administrateur.";
                header("Location: /?fonction=profil");
                exit();
            }
        }
        break;
    
    case 'activité_ludique':
        $vue = 'activité_ludique';
        if (!empty($_POST) and $_POST['1']===1 and $_POST['2']===4 and $_POST['3']===5 and $_POST['4']===5) {
            $message = 'Vous avez gagné !';
        }
        break;

    case 'admin':
        verification_session('admin');
        $vue = 'admin';
        break;
    
    case 'gen.id':
        verification_session('admin');
        $vue = 'gen.id';
        
        if (!empty($_POST) and $_POST['compte'] === 'creer') {
            creerUser();
        }
        break;
    
    case 'inscription':
        //connexion à la BDD
        include("modele/connexionBDD.php"); 
        $erreur="";
        $_POST["identifiant"] = HTML_chars($_POST["identifiant"]);
        $_POST["prenom"] = HTML_chars($_POST["prenom"]);
        $_POST["nom"] = HTML_chars($_POST["nom"]);
        $_POST["datenaissance"] = HTML_chars($_POST["datenaissance"]);
        $_POST["email"] = HTML_chars($_POST["email"]);
        $_POST["adresse"] = HTML_chars($_POST["adresse"]);
        $_POST["codepostal"] = HTML_chars($_POST["codepostal"]);
        $_POST["ville"] = HTML_chars($_POST["ville"]);
        $_POST["motdepasse"] = HTML_chars($_POST["motdepasse"]);
        //Vérifie si tous les champs sont remplis et si les 2 mots de passe sont identiques
        if ($_POST["motdepasse"] == $_POST["motdepasse2"] && $_POST["nom"] != "" && $_POST["prenom"] != "" && $_POST["email"] != "" && $_POST["motdepasse"] != "" && $_POST["genre"] != "" && $_POST["datenaissance"] != "" && $_POST["adresse"] != "" && $_POST["ville"] != "" && $_POST["codepostal"] != "" && isset($_POST["CGU"])){
            $sql = "UPDATE utilisateurs SET Nom = '$_POST[nom]', Prenom = '$_POST[prenom]', Adresse_email = '$_POST[email]', Mot_de_passe = '$_POST[motdepasse]' , Type = 'Client', Genre = '$_POST[genre]', Date_de_naissance = '$_POST[datenaissance]', Adresse = '$_POST[adresse]', Ville = '$_POST[ville]', Code_postal = '$_POST[codepostal]' WHERE id_Utilisateur = '$_POST[identifiant]' ";
                if ($conn->query($sql) !== TRUE) {
                echo "Error updating record: " . $conn->error;
                }
            $conn->close();
        } else {
            //envoie un message d'erreur dans le cas contraire
            $erreur="Réessayez";
        }
        $vue = 'inscription';
        break;
    
    case 'profil':
        verification_session('user');
        include("modele/connexionBDD.php");

        $data1 = '';
        
        $sql = "SELECT * FROM mesures WHERE id_Capteur=1 ";
        $result = $conn->query($sql);
            
        while ($row = $result->fetch_array()) {
        
            $data1 = $data1 . '"'. $row['Données'].'",';
        };
        $data1 = trim($data1,",");


        $data2 = '';
        
        $sql = "SELECT * FROM mesures WHERE id_Capteur=2 ";
        $result = $conn->query($sql);
            
        while ($row = $result->fetch_array()) {
        
            $data2 = $data2 . '"'. $row['Données'].'",';
        };
        $data2 = trim($data2,",");


        $data3 = '';
        
        $sql = "SELECT * FROM mesures WHERE id_Capteur=3 ";
        $result = $conn->query($sql);
            
        while ($row = $result->fetch_array()) {
        
            $data3 = $data3 . '"'. $row['Données'].'",';
        };
        $data3 = trim($data3,",");

        $conn->close();
        $vue = 'profil';
        break;
        
    
    case 'faq':
        $vue = 'FAQ';
        break;
    
    case 'deconnexion':
        $vue = 'accueil';
        $_SESSION['connexion'] = false;
        break;

    case 'mentionslegales':
        $vue = 'mentionslegales';
        break;
    
    case 'gestion':
        verification_session('admin');
		include('modele/connexionBDD.php');
        $sql = 'SELECT * FROM utilisateurs ORDER BY id_Utilisateur DESC';
        $allusers = $conn->query($sql);
        if(isset($_POST['s']) AND !empty($_POST['s'])){
            $recherche = htmlspecialchars($_POST['s']);
            $allusers = $conn->query('SELECT Nom, Prenom, id_Utilisateur,Genre,Adresse_email, Mot_de_passe FROM utilisateurs WHERE Nom LIKE"%'.$recherche.'%" ORDER BY id_Utilisateur DESC');
        }
        $vue = 'gestionutilisateur';
        break;
    
    case 'CGU':
        $vue = 'CGU'; 
        break;
    
    case 'compte':
        $vue = 'compte';
        break;

    case 'lasalle':
        verification_session('admin');
        include("modele/connexionBDD.php");

        $data4 = '';
        
        $sql = "SELECT * FROM mesures WHERE id_Capteur=2 ";
        $result = $conn->query($sql);
            
        while ($row = $result->fetch_array()) {
        
            $data4 = $data4 . '"'. $row['Données'].'",';
        };
        $data4 = trim($data4,",");
        $conn->close();
        $vue = 'lasalle'; 
        break;
   
    default:
        $vue = '404';
        break;
}

include('vues/header.php');

if (!empty($_SESSION) and $_SESSION['connexion'] === 'admin') {
    include('vues/navbar1.php');
} elseif (!empty($_SESSION) and $_SESSION['connexion'] === 'user') {
    include('vues/navbar2.php');
} else {
    include('vues/navbar.php');
}

include('vues/fildariane.php');
include('vues/' . $vue . '.php');
include('vues/footer.php');