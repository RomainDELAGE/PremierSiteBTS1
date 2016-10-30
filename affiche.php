<?php
if (isset($_GET['menu'])) // on s'assure que les parametres envoyés dans la variables menu existent
	{
		if ($_GET['menu']=="actu") {include ('affiche_actu.php');} //on inclue la page correspondante en fonction du paramètre envoyé
		else if ($_GET['menu']=="carte") {include ('affiche_carte.php');}
		else if ($_GET['menu']=="compte") {include ('formulaire.php');}
		else if ($_GET['menu']=="contact") {include ('ContactB.php');}
	}

?>