<?php

//inclusion du front controller
require_once 'oscar/Oscar_Front_Controller.php';

//recupére l'instance du controller frontal
$controller = Oscar_Front_Controller::getInstance();


//définition des chemins des controllers
$dirController = array(
	'../application/test/controllers/'
  );

//Definition des repertoires de controllers , active l'autoload pour les models .
$controller->set_controller_directory($dirController, TRUE, array("models/") );

/*
 * Définition du type d'url avec lequel nous voulons travailler
 * OSCAR_URL_ASSOC     => clef valeur
 * OSCAR_URL_NUM       => valeur sans clef
 */
$controller->set_url_style( OSCAR_URL_NUM );

/*
 * Gestion des exceptions
 *
 */
 Oscar_Exception::getInstance()
     ->attach(Oscar_Exception::factory('Std'))
     ->detach(Oscar_Exception::factory('Mail',array('soumia@creavi.fr','Warning : test_fw')));

//definition des paramétres pour la vue du layout
$Layout	=	array(
	'dir_tpls'=>'smarty/templates/',
	'template'=>'index.tpl',
	'binding'=>
		array(
			"precont"	=>"_pre_content",
			"init"		=>"_init_content",
			"cont"		=>"_content",
			"post"		=>"_post_content",
		),
	'cache'=>false
  );

//Activation du layout
$controller->set_layout($Layout);


/**
 * MongoDb
 *
 */
require_once 'oscar/mongo/Oscar_dbm_manager.php';

$dsn    =   array(
    array(       
	'host'  =>  'localhost',
        'port'  =>  27017,
        'database'  =>  'testFW'
    )
);

$Orm_mongo = new Oscar_dbm_manager($dsn, 'admin','tkf658', array( "persist" => "identifier" ) );

    //Mode plateforme 32b
if( PHP_INT_SIZE == 4 ){
    ini_set('mongo.native_long', 0);
}else{
    //plateforme 64b
    ini_set('mongo.native_long', 1);
}


//$Orm_mongo  =   new Oscar_dbm_manager($dsn, USER_MONGO, PWD_MONGO, array( "persist" => "identifier" ) );
//$Orm_mongo  =   new Oscar_dbm_manager($dsn, 'admin', 'tkf659' );

//lancement du fw
$controller->run()
?>