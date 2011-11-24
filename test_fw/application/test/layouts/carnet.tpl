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