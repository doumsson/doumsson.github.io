<!DOCTYPE html>
<html>
	<heade>
		<title>Page d'accueil</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="assets/style.css"/>
	</head>
	<body>
		<h1>Formulaire d'inscription</h1>
		<div class="div_formulaire">
			<form method="post" action="traitement.php">
				<label for="name">votre nom</label>
				<input type="text" name="name" id="name"/><br><br>
				<label for="password">Mot de passe</label>
				<input type="password" name="password" id="password"/><br><br>
				<input type="submit" value="Inscription" name="submit"/>
			</form>
		</div>
	</body>
</html>