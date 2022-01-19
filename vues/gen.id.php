<div class="container">
    <p>Pour générer un identifiant pour un nouveau client, cliquez sur le bouton suivant.</p>

    <form method="post">
        <button type="submit" name="compte" value="creer">Générer un  identifiant et créer un compte</button>
    </form>

    <p><?php if (isset($message)) {echo $message;}?></p>
    <p><?php if (isset($id_Utilisateur)) {echo $id_Utilisateur;}?></p>

</div>