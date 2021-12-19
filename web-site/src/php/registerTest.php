<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="../resources/style2.css" type="text/css" />
	<!--<meta charset="UTF-8">-->
	<title>ARK</title>
</head>

<body id="bodyMaps">
	<div class="signUpDiv">
		<h2>S'inscrire</h2>
		<form method="POST" action="../php/lib/register.php">
				<div class="formItem">
					<label for="cliNom">Nom</label>
					<input type="text" placeholder="Enter User name" name="cliNom" id="cliNom" required>
				</div>
				<div class="formItem">
					<label for="cliPrenom">Prénom</label>
					<input type="text" placeholder="Enter User name" name="cliPrenom" id="cliPrenom" required>
				</div>
				<div class="formItem">
					<label for="cliNumTel">Téléphone</label>
					<input type="text" placeholder="Enter User name" name="cliNumTel" id="cliNumTel" required>
				</div>
				<div class="formItem">
					<label for="cliLocalite">Localité</label>
					<input type="text" placeholder="Enter User name" name="cliLocalite" id="cliLocalite" required>
				</div>
				<div class="formItem">
					<label for="cliCp">CP</label>
					<input type="text" placeholder="Enter User name" name="cliCp" id="cliCp" required>
				</div>
				<div class="formItem">
					<label for="cliUsername">Nom d'utilisateur</label>
					<input type="text" placeholder="Enter User name" name="cliUsername" id="cliUsername" required>
				</div>
				<div class="formItem">
					<label for="cliPassword">Mot de passe</label>
					<input type="password" placeholder="Enter Password" name="cliPassword" id="cliPassword">
				</div>
				<div class="formItem">
					<label for="cliAvatar">Choisir un avatar</label>
					<input type="text" name="cliAvatar" id="cliAvatar" placeholder="Lien de l'avatar">
					<!-- <button type="button" id="modalBouton">Avatars</button> -->
				</div>
				<button type="submit" id="boutonRegistre">S'inscrire</button>
		</form>
	</div>
</body>
</html>