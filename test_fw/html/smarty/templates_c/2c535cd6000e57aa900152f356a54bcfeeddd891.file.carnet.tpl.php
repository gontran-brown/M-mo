<?php /* Smarty version Smarty-3.0.4, created on 2011-11-24 14:48:47
         compiled from "../application/test/layouts/carnet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9851865924ece4b3fd595a7-14214187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c535cd6000e57aa900152f356a54bcfeeddd891' => 
    array (
      0 => '../application/test/layouts/carnet.tpl',
      1 => 1322141815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9851865924ece4b3fd595a7-14214187',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>test_FW</title>

</head>
<body>
    <div>
        <form method="POST" name="carnet" action="/Carnet/ajout">
            <label> Carnet d'adresse </label>
	    <div>
		    <label> nom </label>
		    <span>
                            <input type="text" name="nom" id="nom"/>
		    </span>
	    </div>
	    <div>
		    <label> prenom </label>
		    <span>
                            <input type="text" name="prenom" id="prenom"/>
		    </span>
	    </div>
	    <div>
		    <label> num </label>
		    <span>
                            <input type="text" name="num" id="num"/>
		    </span>
	    </div>
	    <div>
		    <label> adresse </label>
		    <span>
                            <input type="text" name="adresse" id="adresse"/>
		    </span>
	    </div>
	    <div>
		    <label> email </label>
		    <span>
		    <input type="text" name="email" id="email"/>
		    </span>
	    </div>
	    <div>
		    <label> compagnie </label>
		    <span>
                            <input type="text" name="compagnie" id="compagnie"/>
		    </span>
	    </div>
	    <div>
		    <span>
                            <input type="submit" name="submit" value="envoyer"/>
		    </span>    
	    </div>
        </form>
    </div>
    	
</body>
</html>