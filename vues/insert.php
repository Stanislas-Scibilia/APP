<?PHP
	$con = mysqli_connect("localhost", "root", "");
	if (! $con)
	{
	die("ne pourrait pas se relier : ". mysqli_error());
	}

	mysqli_select_db("Fit_analysor", $con);

	$sql="INSERT INTO 'utilisateurs' ('identifiant', 'prenom', 'nom', 'date naissance', 'genre', 'mail', 'adresse', 'codepostal', 'ville', 'motdepasse', 'motdepasse2')
	VALUES
	('$_POST[identifiant]','$_POST[prenom]','$_POST[nom]','$_POST[datenaissance]','$_POST[genre]','$_POST[mail]','$_POST[adresse]','$_POST[ville]','$_POST[motdepasse]','$_POST[motdepasse2]',)";

	if (!mysqli_query($sql,$con))
	{
	die("erreur lors de l'inscription" . mysqli_error());
	}
	echo "Votre inscription a été prise en compte";

	mysqli_close($con)
	?>
	<a href="inscription.php ">Retour à l'inscription</a>