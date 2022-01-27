<div class="container">
    <h1>Identifiant</h1>
    <form action="" method="post">
    <input class="barre_inscription" type="text" name="identifiant" id="identifiant" placeholder="Identifiant" maxlength="50">
    <br>
    <input type="submit" value="Sélectionner l'identifiant">
    </form>
    <br>
    <?php echo "Identifiant sélectionné : " .$_SESSION["identifiant"]; ?>
    <br>
    <input type="button" onclick="window.location.href = '/?fonction=modif_form2';" value="Modifier les informations">
    <br>
    <input type="button" onclick="window.location.href = '/?fonction=suppr_compte';" value="Supprimer le compte">

</div>
