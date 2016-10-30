<?php
	
	include 'BDD/connectBdd.php';
	
	/*$avatar=$_POST['avatar'];
	$age=$_POST['age'];
	$sexe=$_POST['sexe'];*/

	if (!isset($_POST['avatar']))
	{
			if(isset($_POST['age']) AND $_POST['age'] <= 10 )
			{
					if(isset($_POST['sexe']) AND $_POST['sexe']=="Masculin")
					{
						{ echo 1; }	
					}
					else
					{
						{ echo 2; }
					}
			}
			
			else if(isset($_POST['age']) AND $_POST['age'] > 10 AND $_POST['age'] <= 20 )
			{
					if(isset($_POST['sexe']) AND $_POST['sexe']=="Masculin")
					{
						{ echo 3; }
					}
					else
					{
						{ echo 4; }
					}
			}
			else if(isset($_POST['age']) AND $_POST['age'] > 20 AND $_POST['age'] <= 50 )
			{
					if(isset($_POST['sexe']) AND $_POST['sexe']=="Masculin")
					{
						{ echo 5; }
					}
					else
					{
						{ echo 6; }
					}
			}
			else if(isset($_POST['age']) AND $_POST['age'] > 50 AND $_POST['age'] <= 140 )
			{
					if(isset($_POST['sexe']) AND $_POST['sexe']=="Masculin")
					{
						{ echo 7; }
					}
					else
					{
						{ echo 8; }
					}
			}	
	}

	else
	{

	}
?>


				
		