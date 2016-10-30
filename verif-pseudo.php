<?php
include 'BDD/connectBdd.php';

if ($_POST)
{
	$pseudo_post = ($_POST['utilisateur']);
	$verif = "SELECT pseudo FROM compte WHERE pseudo = '".$pseudo_post."' ";
	
	$req=$connexion->query($verif); // on va chercher tous les membres de la table qu'on trie par ordre croissant

	$nb = $req->rowcount();
	
	if	( $nb >= 1)
		{ echo 1; }
	else	
		{ echo 2; } 
}


?>