<div id="vignette">

	<h1> Me contacter </h1>	
		<?php
		if (isset($_POST['boutonSubmit']))                                         
		{
			$mail=mysqli_real_escape_string($connexion,$_POST['mail']);
			$contenu=mysqli_real_escape_string($connexion,$_POST['contenu']);
			$req="insert into newsletter values('$mail','$contenu')";
			$res=mysqli_query($connexion, $req);
			if($res==TRUE)
			{
				echo 'Votre message a bien été envoyé ';
			}
			else
			{
				echo 'Votre message ne peut être envoyé';
			}
		}
		else
		{ ?>
			<form method="post" action="#">
				<table id="formulaire_newsletter">
					<tr>
						<td>
							<label for="Mail">Saisissez votre adresse mail </label>
						</td>
						<td>
							<input type="mail" name="mail" id="Mail" /> <br/>
						</td>
					</tr>
					<tr>
						<td>
							<label for="Contenu">Saisissez le contenu de votre mail </label>
						</td>
						<td>
							<textarea name="contenu" id="Contenu" > </textarea><br/>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<input type="submit" name="boutonSubmit" value="Envoyez le mail" />
						</td>
					</tr>
				</table>	
			</form>		
		<?php 
		} ?>
</div>