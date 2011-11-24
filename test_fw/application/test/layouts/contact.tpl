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
	
	{foreach from=$element item=personne}
	<div>
	    <label> nom </label>
	    <span>
		     {$nom}
	    </span>
	</div>
	<div>
	    <label> prenom </label>
	    <span>
		     {$prenom}
	    </span>
	</div>
	<div>
	    <label> num </label>
	    <span>
		     {$num}
	    </span>
	</div>
	<div>
	    <label> adresse </label>
	    <span>
		     {$adresse}
	    </span>
	</div>
	<div>
	    <label> email </label>
	    <span>
		    {$email}
	    </span>
	</div>
	<div>
	    <label> compagnie </label>
	    <span>
		     {$personne->compagnie}
	    </span>
	</div>
	  {/foreach} 	
</body>
</html>