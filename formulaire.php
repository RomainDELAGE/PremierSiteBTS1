<!DOCTYPE html>
<html lang="fr">
 
	<head>
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
             <script src="http://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.js"></script>
        <![endif]-->
		
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>		<!-- Appel du fichier javascript-->
        <script src="js/form.js" type="text/javascript"></script>
		<title>Formulaire</title>
    </head>

	<div id="vignette">
		<body>

		<?php


		if(!isset($_GET['validation']))
		{
		?>	
			<h1> Inscrivez vous sur Skyline </h1>
			
			<div id="contenu_formulaire">
				<form method="post" action="">
						
				<p>
					<label for="Nom"> Nom :</label>  
					<input type="text" name="nom" id="nom" onkeyup="surveilleNom();" />
					<span id="infoNom"></span>
				</p>
						
				<p>
					<label for="Prenom"> Prénom :</label>  
					<input type="text" name="prenom" id="prenom" onkeyup="surveillePrenom();" />
					<span id="infoPrenom"></span>
				</p>
				
			<div id="sexeAge">
				<h2>Sexe :</h2>
				<p>
				<label for="Masculin">Masculin </label><input type="radio"name="sexe" value="Masculin" id="sexe"/>
				<label for="Feminin"> Feminin </label><input type="radio"name="sexe" value="Feminin" id="sexe"/>
				</p>
				
				<p>
					<label for="Age"> Age :</label>  
					<input type="text" name="age" id="age" onkeyup="surveilleAge();" />
					<span id="infoAge"></span>
				</p>
			</div>	

				<p>
					<label for="Utilisateur"> Nom d'utilisateur :</label> 
					<input type="text" name="utilisateur" id="utilisateur" onkeyup="surveilleUtilisateur();" />
					<span id="infoUtilisateur"></span>
				</p>

				<p>
					<label for="email"> Email : </label> 
					<input type="email" name="email" id="email" placeholder="Ex : mikey.mouse@truc.fr"   />

				</p>	

				<p>	
					<label for="pass"> Mot de passe : </label><input type="password" name="mdp" id="pass" onkeyup="surveilleMdp()"/>
					<span id="infoMdp"></span>
				</p>
				
				
				<p>
					<label for="pass2"> Confirmation du mot de passe :</label>  <input type="password" name="pass2" id="pass2"  onkeyup="surveilleMdp2()" />
					<span id="infoMdp2"></span>
				</p>
						
				<p>
					<label for="pays"> Dans quel pays vous situez-vous ? </label>
					<select name="pays" id="pays">
					
						<option value="aucun" selected > Choisissez un pays </option>
						<?php 
						include 'connectBdd.php';
						
						$reponse =$connexion->query('SELECT * FROM liste_pays');
						while($donnees = $reponse->fetch())
						{
						?>
							
							<option value="<?php echo $donnees['libelle']; ?>"> <?php echo $donnees['libelle'];?></option>
						<?php
						}
						?> 
					</select>
				</p>
				
				<p>
					<label for="choix_avatar_propose"> Choisissez un avatar parmi ceux proposés : </label>
					<select name="choix_avatar" id="choix_avatar" onkeyup="surveilleAvatarPropose()" >
					
						<option value="aucun" selected > Choisissez un avatar </option>
						
						<?php 
						include 'connectBdd.php';
						
						$reponse =$connexion->query('SELECT * FROM liste_avatar');
						while($donnees = $reponse->fetch())
						{
						?>
							<option value="<?php echo $donnees['image']; ?>"> <?php echo $donnees['image'];?></option>
						<?php
						}
						?>
					</select>
					<span id="infoAvatarPropose">coucou</span>
				</p>
				
				<p>
					<label for > Ou selectionnez une image personnalisée :</label>
					<input type="file" name="avatar" id="avatar" onkeyup="surveilleAvatar();"/>
					<span id="infoAvatar"></span>
				</p>

			
				<p> <input type="submit" value="Valider" onsubmit="verifGlobale();"></p>
				</form>
			</div>
			
			
			<?php //on reccupère les infos du formulaire
			
			//si un avatar proposé est choisi dans la liste on
			if (isset($_POST['avatar']) AND $_POST['choix_avatar'] !== '')
				{
					$avatarchoisi = $_POST['avatar']; 
				}
			else 
				{
					if (isset($_POST['choix_avatar']) AND $_POST['choix_avatar'] !== 'aucun' )
					{
						$avatarchoisi = $_POST['choix_avatar'];
					}
					else
					{
						$avatarchoisi = "Null";
					}	
				}
		
			
			include 'BDD/connectBdd.php'; //on se connecte à la base de donnée

			if( isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['sexe']) AND isset($_POST['age']) 
			AND isset($_POST['utilisateur']) AND isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['pass2']) AND isset($_POST['pays'])  ) //si les champs ont été remplis en totalité
				{
					$requete = $connexion->prepare( "INSERT INTO compte(nom, prenom, sexe, age ,pseudo, email, mdp, pays,avatar) VALUES (?,?,?,?,?,?,?,?,?)"); //on les insert ds la bdd
					$requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['age'],$_POST['utilisateur'],
					$_POST['email'], $_POST['mdp'], $_POST['pays'] , $avatarchoisi ));
			
			//rajouter des conditions ici
			//
			
					$validation = 1;
				}
			else 
				{
					$validation = 2;
				}
			
		}
		
		//à traiter en javascript
		else if (isset($_GET['validation']) AND $_GET['validation'] == 1)
		{
		?>
			<h1>Félicitation l'inscription est un succès ! Bienvenue sur Skyline <?php echo $_POST['prenom']; ?><?php echo $_POST['nom']; ?> !</h1>
			<p> Voici quelques informations importantes que vous avez saisies, veillez à ne pas les oublier :</p>
			<p> Votre nom d'utilisateur : <span id="user"><?php echo $_POST['utilisateur']; ?></span></p>
			<p> Votre mot de passe : <span id="password"><?php echo $_POST['mdp']; ?></span></p>
			<p> Vous pouvez dès à présent publier vos carnet des voyage via l'espace membre. </p>
		<?php
		}

		else if (isset($_GET['validation']) AND $_GET['validation'] == 2)
		{
		?>	
			<h1>Oups le formulaire n'est pas complet : impossible de finaliser l'inscription.</br>
						Réessayez en prennant soin de remplir tous les champs </h1>
		<?php

		}
		?>
		
		</body>
	</div>
</html>	