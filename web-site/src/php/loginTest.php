<?php
	//Inintialisation de la session
    session_start();

	//Vérifie si les variables de session ne sont pas vides
	if(isset($_SESSION['userName']))
	{
		$userName = $_SESSION['userName'];
		$userAvatar = $_SESSION['avatar'];
	}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="../resources/style2.css" type="text/css" />
	<!--<meta charset="UTF-8">-->
	<title>ARK</title>
</head>

<body id="bodyMaps">
	<div class="signUpDiv">
		<h2><?php echo $userName ?></h2>
		<form method="POST" action="../php/lib/checkLogin.php">
				<div class="formItem">
					<label for="userName">Nom d'utilisateur</label>
					<input type="text" placeholder="Enter User name" name="userName" id="userName" required>
				</div>
				<div class="formItem">
					<label for="password">Mot de passe</label>
					<input type="password" placeholder="Enter Password" name="password" id="password">
				</div>
				<button type="submit" id="boutonRegistre">S'inscrire</button>
		</form>
			<a href="./lib/logout.php">Se deconnecter</a>
	</div>
</body>
</html>