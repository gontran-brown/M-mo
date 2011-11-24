<?php /* Smarty version Smarty-3.0.4, created on 2011-11-24 10:39:47
         compiled from "smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19826161474ece10e3d16809-22013714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b06d19c646272078c10cfc04a699bd60ab3df33' => 
    array (
      0 => 'smarty/templates/index.tpl',
      1 => 1322127579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19826161474ece10e3d16809-22013714',
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
	<form method="POST" name="logger" action="/Users/Enregistrement">
                    <div>
                        <label>Login</label>
                        <span>
                            <input type="text" name="login" id="login"/>
                        </span>
                    </div>
                    <div>
                        <label>Mot de passe</label>
                        <span>
                            <input type="password" name="password" id="pwd"/>
                        </span>
                    </div>
                    <div>
                       <span>
                            <input type="submit" name="submit" value="submit"/>
                        </span>
                    </div>
	</form>
	</div>
	
	<br/>
	<div>
		<form method="POST" name="identification" action="/Users/Identification">
			<div>
                        <label>Login</label>
                        <span>
                            <input type="text" name="login_identifiant" id="login"/>
                        </span>
                    </div>
                    <div>
                        <label>Mot de passe</label>
                        <span>
                            <input type="password" name="password_identifiant" id="pwd"/>
                        </span>
                    </div>
			<input type="submit" value="identification"/>
		</form>
	</div>
	
	<br/>
	
	
</body>
</html>