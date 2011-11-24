<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Carnet extends Oscar_Front_Controller{  
	function pre_action(){
		if ($this->get_param("AJAX") === 'TRUE'){
		    $this->stop_layout();
		}
	    }
	    
	function ajout(){
				
		$contact = new M_carnet();
				
		if( (!empty($this->CPOST_nom)) && (!empty($this->CPOST_prenom)) && (!empty($this->CPOST_adresse)) && (!empty($this->CPOST_email)) && (!empty($this->CPOST_num))){
			$nom = $this->CPOST_nom;
			$prenom = $this->CPOST_prenom;
			$adress = $this->CPOST_adresse;
			$email = $this->CPOST_email;
			$num = $this->CPOST_num;
			if(!empty($this->CPOST_compagnie)){
				$compagnie = $this->CPOST_compagnie;
				$donnee = array("nom"=>$nom, "prenom"=>$prenom, "adresse"=>$adress, "email"=>$email, "num"=>$num, "compagnie"=>$compagnie);
			}
			
			else 
				$donnee = array("nom"=>$nom, "prenom"=>$prenom, "adresse"=>$adress, "email"=>$email, "num"=>$num);
				$contact->insert($donnee);
							 
		}
		else {
			error_log("il y a un champs vide");
		}
					
	}
	
	function liste_contact(){
		$this->stop_layout();
		$contact = new M_carnet();
		$Oident = Oscar_Identification_2::getInstance();
		//$personne = $contact->findOne( array( "_id"=>new MongoId( $Oident->get_private_data( "id_mongo" ) )  ));
		//$personne = $contact->find(array(), array("nom" => 1, "prenom" => 1));
		if ($this->CPOST_option2){
			$element = $contact->find(array(), array("nom" => 1, "prenom" => 1, 'adresse'=> 1, 'email'=> 1, 'num'=> 1, 'compagnie'=> 1));
			foreach($element as $curso){
//				$message = "error log : ".$curso["nom"]." et ".$curso["prenom"]." ".$curso['adresse']." ".$curso['email']." ".$curso['num'];
//				error_log($message);
				$tab =  array(
				    "nom"	=>	$curso['nom'],
				    "prenom"	=>	$curso['prenom'],
				    "adresse"	=>	$curso['adresse'],
				    "email"	=>	$curso['email'],
				    "num"	=>	$curso['num'],
				    "compagnie"	=>	$curso['compagnie']
				);
				
				return $this->display('contact.tpl', $tab);
			}
			
			
		}
		else {
			error_log("je suis dans le else");
		}
//		$personne = $contact->findOne(array(),
//			array("nom", "prenom"));
//		echo $personne;
//		foreach( $personne as $donnee){
//			echo $donnee;
//			//error_log($donnee["nom"],$donnee["prenom"], $donnee["num"],$donnee["adresse"] );			
//		}
//		
//		
//		error_log("erreur due a :");
		
		/*
		 * $this->display('contact.tpl', array(
		    "nom"	=>	$contact['nom'],
		    "prenom"	=>	$contact['prenom'],
		    "adresse"	=>	$contact['adresse'],
		    "email"	=>	$contact['email'],
		    "num"	=>	$contact['num'],
		    "compagnie"	=>	$contact['compagnie']
		));
		 
		//$template->assign('contact', $fiche);
		//$template->display('contact.tpl');
		 *
		 */
		 
		}
	
	function supprimer(){
		var_dump("je suis ici");
		echo "Ici";
	}
}
?>
