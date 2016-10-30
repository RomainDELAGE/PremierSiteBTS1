<?php 
include 'BDD/connectBdd.php'; //on se connecte à la base de donnée

if (!isset($_GET['actu']) || $_GET['actu'] == "" ) 
	{
	$actu = 1; // le theme general porte d'id 1
	}
else
	{
	$actu = $_GET['actu'];
	}

$SQL = "SELECT photo,titre, date, contenu, pseudo FROM article A INNER JOIN compte B ON A.id_auteur=B.id where id_theme=".$actu." ORDER BY 2 ASC";

$resultats=$connexion->query($SQL); // on execute notre requête
$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet

while( $ligne = $resultats->fetch() ) // on récupère la liste des resultats
{

	// on affiche les resultats en trois blocs
	echo	'<div id="vignette"> 
					<table >
								<div id="entete_article">
								<tr>	
									<a href="photo/'.$ligne->photo.'"><img src="photo/'.$ligne->photo.'" height = 400px width=800px alt="image" id="banniere_image"/></a>
								</tr>
								</div>
								
								<tr >
									<div id="banniere_description"> '.$ligne->titre.'</div>
								</tr>
								
					</table>			
					<br/>
								
					<div id="contenu_article">'.$ligne->contenu.'</div>
					
					<br/>
					<div id="info_article">
					<table >			
								<tr>
									   <td>'.$ligne->pseudo.'</td>
									   <td>'.$ligne->date.'</td>
								</tr>  
					</table>
					</div>
				<br/>
			</div>';
			

	
}

			
			
$resultats->closeCursor(); // on ferme le curseur des résultats*/
?>
