<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>SKYLINE</title>
	<link rel="shortcut icon" href="skin/logo.ico" />
	<link rel="stylesheet" href="skin/maquette.css" media="screen" />
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<!-- <script src="script.js"></script> -->
</head>

<body>
	<div id="fond">
		<div id="bandeau">
			<?php include('bandeau.php'); ?>
		</div> 
		
		<div id="menu_haut">
			<?php include('menu_haut.php'); ?>
		</div>	
			
		<div id="menu_gauche">
			<?php include('menu_gauche.php'); ?>
		</div>
			
		<div id="contenu">
			
			<div id="texte">
				<?php include('affiche.php'); ?>
			</div>
		</div>
		
		<div id="pied_page">
			<?php include('pied.php'); ?>
		</div>
	</div>
	

</body>

</html>