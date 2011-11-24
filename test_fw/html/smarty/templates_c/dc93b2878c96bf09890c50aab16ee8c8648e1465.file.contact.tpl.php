<?php /* Smarty version Smarty-3.0.4, created on 2011-11-24 17:01:21
         compiled from "../application/test/layouts/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10265469824ece6a51aeecf2-38478005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc93b2878c96bf09890c50aab16ee8c8648e1465' => 
    array (
      0 => '../application/test/layouts/contact.tpl',
      1 => 1322150477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10265469824ece6a51aeecf2-38478005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>tListe contact</title>

</head>
<body>
	<form method="POST" name="contact" action="/Carnet/liste_contact">
		<label>Voulez-vous consulter votre carnet d'adresse?
		</label>
			
		<div>			
			<input type="checkbox" name="option1" value="non"/> 
			<label>non</label>
		</div>
		<div>
			<input type="checkbox" name="option2" value="oui" checked/> 
			<label> oui</label>
		</div>
		<input type="Submit" value="OK"/>
	</form>
	
	<?php  $_smarty_tpl->tpl_vars['personne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('element')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['personne']->key => $_smarty_tpl->tpl_vars['personne']->value){
?>
	<div>
	    <label> nom </label>
	    <span>
		     <?php echo (isset($_smarty_tpl->tpl_vars['personne']->value['nom']) ? $_smarty_tpl->tpl_vars['personne']->value['nom'] : null);?>

	    </span>
	</div>
	<div>
	    <label> prenom </label>
	    <span>
		     <?php echo (isset($_smarty_tpl->tpl_vars['personne']->value['prenom']) ? $_smarty_tpl->tpl_vars['personne']->value['prenom'] : null);?>

	    </span>
	</div>
	<div>
	    <label> num </label>
	    <span>
		     <?php echo (isset($_smarty_tpl->tpl_vars['personne']->value['num']) ? $_smarty_tpl->tpl_vars['personne']->value['num'] : null);?>

	    </span>
	</div>
	<div>
	    <label> adresse </label>
	    <span>
		     <?php echo (isset($_smarty_tpl->tpl_vars['personne']->value['adresse']) ? $_smarty_tpl->tpl_vars['personne']->value['adresse'] : null);?>

	    </span>
	</div>
	<div>
	    <label> email </label>
	    <span>
		    <?php echo (isset($_smarty_tpl->tpl_vars['personne']->value['email']) ? $_smarty_tpl->tpl_vars['personne']->value['email'] : null);?>

	    </span>
	</div>
	<div>
	    <label> compagnie </label>
	    <span>
		     <?php echo (isset($_smarty_tpl->tpl_vars['personne']->value['compagnie']) ? $_smarty_tpl->tpl_vars['personne']->value['compagnie'] : null);?>

	    </span>
	</div>
	  <?php }} ?> 	
</body>
</html>