<?php
	/* Détermination du nom de la page à charger après vérification de sa validité */
	include 'BDD/connectBdd.php'; //on se connecte à la base de donnée
	if (isset($_GET['menu'])) {
		$menu = $_GET['menu'];
	}
	else {
		$menu = "actu";
	}
	
	
	if ($menu == "carte") {
		
		$resultats=$connexion->query("SELECT distinct id, nom FROM continent ORDER BY 1 ASC"); // on va chercher tous les nom des continents dans la table continent(résultat trié par ordre croissant)
		$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
		while( $ligne = $resultats->fetch() ) // on récupère la liste des continents
		{
			echo '<a href="?menu='.$menu.'&carte='.$ligne->id.'" >'.$ligne->nom.'</a><br/>'; // on affiche les consoles sous forme de liens
		}
		$resultats->closeCursor(); // on ferme le curseur des résultats
	}
	else {
		$resultats=$connexion->query("SELECT distinct id, libelle FROM theme ORDER BY 1 ASC"); // on va chercher tous les themes dans la table theme (résultat trié par ordre croissant)
		$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
		while( $ligne = $resultats->fetch() ) // on récupère la liste des themes
		{
			echo '<a href="?menu='.$menu.'&actu='.$ligne->id.'" >'.$ligne->libelle.'</a><br/>'; // on affiche les consoles sous forme de liens
		}
		$resultats->closeCursor(); // on ferme le curseur des résultats
		
	}
	
	
	
?>