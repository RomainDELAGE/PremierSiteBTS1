<script type="text/javascript">

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


	}
	
	else
	{
		$('#infoNom').html(' Parfait ');				
		$('#infoNom').css('background','LightGreen');						
		$('#infoNom').css('border-radius','4px');
		$('#infoNom').css('display','inline-block');
		$('#infoNom').css('margin-top','5px');
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
		$('#infoPrenom').css('background','LightGreen');
		$('#infoPrenom').css('border-radius','4px');
		$('#infoPrenom').css('display','inline-block');
		$('#infoPrenom').css('margin-top','5px');	
	}
}	

function surveilleAge(){
	var name = $('#age').val();
	if (name <5 || name > 140 )
	{
		$('#infoAge').html('L\'age ne correspond pas  ');		// affecte ce message au statut
		$('#infoAge').css('border','1px solid black');						// change bordure formulaire
		$('#infoAge').css('background','white');	
	}
	else
	{
		$('#infoAge').html('super');	
		$('#infoAge').css('border','1px solid black');						// change bordure formulaire
		$('#infoAge').css('background','white');		
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

function surveilleAvatar(){
	var name = $('#avatar').val();
	
	if (name== empty() )	// Si username moins de 5 caractères
	{        
		$.post("avatar_predefini.php", { age : number sexe : name },		// appel la fonction vérification pseudo
			 function(msg){
				if(msg== 1){		// Si le login est déjà dans la base
						$('#infoAvatar').html('<img src="photo/avatars/mec0-10.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				} else  if(msg== 2){	// Si le login n'est pas dans la base
						$('#infoAvatar').html('<img src="photo/avatars/fille0-10.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				}
				} else  if(msg== 3){	//
						$('#infoAvatar').html('<img src="photo/avatars/mec11-20.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				}
				} else  if(msg== 4){	// 
						$('#infoAvatar').html('<img src="photo/avatars/fille11-20.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				}
				} else  if(msg== 5){	// 
						$('#infoAvatar').html('<img src="photo/avatars/mec21-50.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				}
				} else  if(msg== 6){
						$('#infoAvatar').html('<img src="photo/avatars/fille21-50.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
						
				}
				} else  if(msg== 7){
						$('#infoAvatar').html('<img src="photo/avatars/mec50-140.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				}
				} else  if(msg== 8){
						$('#infoAvatar').html('<img src="photo/avatars/fille50-140.png" width="150"  />');
						$('#infoAvatar').css('border','1px solid black');				
						$('#infoAvatar').css('border-radius','4px');
						$('#infoAvatar').css('display','inline-block');
						$('#infoAvatar').css('margin-top','5px');
				}
		 	});	 
	}
	else	// Sinon
	{  
		
	} 
}
	
	