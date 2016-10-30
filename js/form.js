var verif = {};

function surveilleNom(){
	var name = $('#nom').val();
	if (name.length < 3)	// Si username moins de 3 caractères
	{        
		$('#infoNom').html(' Vous devez entrer au moins 3 caractères ');		// affecte ce message au statut
		$('#infoNom').css('border','1px solid black');				// change bordure formulaire
		$('#infoNom').css('background','LightPink');							// change background formulaire
		$('#infoNom').css('border-radius','4px');
		$('#infoNom').css('display','inline-block');
		$('#infoNom').css('margin-top','5px');
		verif['nom'] = false;


	}
	
	else
	{
		$('#infoNom').html(' Parfait ');
		$('#infoNom').css('border','1px solid black');				
		$('#infoNom').css('background','LightGreen');						
		$('#infoNom').css('border-radius','4px');
		$('#infoNom').css('display','inline-block');
		$('#infoNom').css('margin-top','5px');
		verif['nom'] = true;
	}
	// else
	
}

function surveillePrenom(){
	var name = $('#prenom').val();
	if (name.length < 3)	// Si username moins de 3 caractères
	{        
		$('#infoPrenom').html(' Vous devez entrer au moins 3 caractères ');		// affecte ce message au statut
		$('#infoPrenom').css('border','1px solid black');				// change bordure formulaire
		$('#infoPrenom').css('background','LightPink');							// change background formulaire
		$('#infoPrenom').css('border-radius','4px');
		$('#infoPrenom').css('display','inline-block');
		$('#infoPrenom').css('margin-top','5px');

	}
	else
	{
		$('#infoPrenom').html('Parfait');
		$('#infoPrenom').css('border','1px solid black');
		$('#infoPrenom').css('background','LightGreen');
		$('#infoPrenom').css('border-radius','4px');
		$('#infoPrenom').css('display','inline-block');
		$('#infoPrenom').css('margin-top','5px');	
	}
}	

function surveilleAge(){
	var name = $('#age').val();
	if (name > 5 && name < 140)
	{
		
		$('#infoAge').html(' Parfait ');	
		$('#infoAge').css('border','1px solid black');
		$('#infoAge').css('background','LightGreen');
		$('#infoAge').css('border-radius','4px');
		$('#infoAge').css('display','inline-block');
		$('#infoAge').css('margin-top','5px');	
	}
	else
	{
		$('#infoAge').html(' L\'age ne correspond pas ');		// affecte ce message au statut
		$('#infoAge').css('border','1px solid black');				// change bordure formulaire
		$('#infoAge').css('background','LightPink');							// change background formulaire
		$('#infoAge').css('border-radius','4px');
		$('#infoAge').css('display','inline-block');
		$('#infoAge').css('margin-top','5px');
						
	}
}

function surveilleUtilisateur(){
	var name = $('#utilisateur').val();
	if (name.length < 5)	// Si username moins de 5 caractères
	{        
		$('#infoUtilisateur').html(' Vous devez entrer au moins 5 caractères ');		// affecte ce message au statut
		$('#infoUtilisateur').css('border','1px solid black');				// change bordure formulaire
		$('#infoUtilisateur').css('background','LightPink');							// change background formulaire
		$('#infoUtilisateur').css('border-radius','4px');
		$('#infoUtilisateur').css('display','inline-block');
		$('#infoUtilisateur').css('margin-top','5px');
	}
	else	// Sinon
	{  
		$.post("verif-pseudo.php", { utilisateur : name },		// appel la fonction vérification pseudo
			 function(msg){
				if(msg== 1){		// Si le login est déjà dans la base
					$('#infoUtilisateur').html('<img src="js/cancel.png" /> Ce nom est déjà pris.');  
					$('#infoUtilisateur').css('border','1px solid red');
					$('#infoUtilisateur').css('background','LightPink');
					$('#infoUtilisateur').css('border-radius','4px');
					$('#infoUtilisateur').css('display','inline-block');
				} else  if(msg== 2){	// Si le login n'est pas dans la base
					$('#infoUtilisateur').html('<img src="js/accept.png" /> Ce pseudo est libre.'); 
					$('#infoUtilisateur').css('border','1px solid green');
					$('#infoUtilisateur').css('background','lightgreen');
					$('#infoUtilisateur').css('border-radius','4px');
					$('#infoUtilisateur').css('display','inline-block');
				}
		 	});	 
	} 
}

function surveilleMdp(){
	var name = $('#pass').val();
	if (name.length < 6)	// Si mot de passe moins de 6 caractères
	{        
		$('#infoMdp').html('Vous devez entrer au moins 5 caractères');		// affecte ce message au statut
		$('#infoMdp').css('border','1px solid black');				// change bordure formulaire
		$('#infoMdp').css('background','LightPink');							// change background formulaire
		$('#infoMdp').css('border-radius','4px');
		$('#infoMdp').css('display','inline-block');
		$('#infoMdp').css('margin-top','5px');	
	}
	else
	{
		$('#infoMdp').html('Parfait');
		$('#infoMdp').css('border','1px solid black');
		$('#infoMdp').css('background','LightGreen');
		$('#infoMdp').css('border-radius','4px');
		$('#infoMdp').css('display','inline-block');
		$('#infoMdp').css('margin-top','5px');		
	}
	// else
	
}

function surveilleMdp2(){
	var name = $('#pass2').val();
	var name2 = $('#pass').val();
	if (name2 != name )	// Si les deux mots de passe sont différents 
	{        
		$('#infoMdp2').html('Les mots de passe ne correspondent pas ');		// affecte ce message au statut
		$('#infoMdp2').css('border','1px solid black');				// change bordure formulaire
		$('#infoMdp2').css('background','LightPink');							// change background formulaire
		$('#infoMdp2').css('border-radius','4px');
		$('#infoMdp2').css('display','inline-block');
		$('#infoMdp2').css('margin-top','5px');							// change background formulaire
	}
	else
	{
		$('#infoMdp2').html('Parfait');	
		$('#infoMdp2').css('border','1px solid black');
		$('#infoMdp2').css('background','LightGreen');
		$('#infoMdp2').css('border-radius','4px');
		$('#infoMdp2').css('display','inline-block');
		$('#infoMdp2').css('margin-top','5px');		
	}
	// else
	
}



/*

function surveilleAvatarPropose(){
	var name = $('#choix_avatar option:selected').text();
	
	if( name !== "" )
	{
					$('#infoAvatarPropose').html('<img src="+name+" alt="avatar proposé" />');
					$('#infoAvatarPropose').css('border','1px solid black');				
					$('#infoAvatarPropose').css('border-radius','4px');
					$('#infoAvatarPropose').css('display','inline-block');
					$('#infoAvatarPropose').css('margin-top','5px');
	}		 


function surveilleAvatar(){
	var name = $('#avatar').val();
	
	if( name !== "" )
	{
					$('#infoAvatar').html('<img src="<?php echo $_POST['avatar']; ?>" alt="avatar proposé" />');
					$('#infoAvatar').css('border','1px solid black');				
					$('#infoAvatar').css('border-radius','4px');
					$('#infoAvatar').css('display','inline-block');
					$('#infoAvatar').css('margin-top','5px');
	}		 
*/

/*
function verifGlobale(){

        var result = true;

		result = verif['nom'] && verif['prenom'] ; //todo

        if (result) {
            alert('Le formulaire est bien rempli.'); // doit conditionner l'envoi du bouton
        }


}
*/
