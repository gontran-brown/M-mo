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