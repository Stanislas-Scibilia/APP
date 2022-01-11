<div class="container">
    <p>Pour générer un identifiant pour un nouveau client, cliquez sur le bouton suivant.</p>

    <form method="post">
        <button type="submit" name="compte" value="creer">Générer un  identifiant et créer un compte</button>
    </form>

    <p><?php if (isset($uuid)) {echo $uuid;}?></p>

</div>