<?php
class Users extends Oscar_Front_Controller{  
	
	function pre_action(){
		if ($this->get_param("AJAX") === 'TRUE'){
		    $this->stop_layout();
		}
	    }


	function Enregistrement(){

		
		if( (!empty($this->CPOST_login)) && (!empty($this->CPOST_password))){
			$login = $this->CPOST_login;
			$mdp = $this->CPOST_password;

			$user = new M_users();
			
			$donnee = array("login"=>$login, "mdp"=>$mdp);
			$user->insert($donnee);
			 }
			 
	}

	function identification(){
		//$connection = new Mongo();
		//$db = $connection->testFW;
		//var_dump($db);
		//$this->display("carnet.tpl");
		$this->display("contact.tpl");
		//$user = new M_users();

		$Oident = Oscar_Identification_2::getInstance();
		
		//$refUser    =   $user->findOne( array( "_id"=>new MongoId( $Oident->get_private_data( "id_mongo" ) )  ));
		//var_dump($refUser);

		$this->stop_layout();
		
				
		/*
		  if( ( isset($this->CPOST["login_identitfiant"])) && ( isset ($this->CPOST["password_identifiant"]))){
			echo "il y a bien une valeur";
			$Oident->identify($login);	
			$this = new Smarty_factory();

			  $this->display("carnet.html",array(
					"login"  =>  $login,
					"mot_de_pass"   =>  $mdp,

				    ));
		}
		else {
			var_dump("il n'y a pas d'envoie de donnee");
		}
		*/


	}
}
?>