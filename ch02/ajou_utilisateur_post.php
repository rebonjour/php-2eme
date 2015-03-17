<!doctype html>
<meta charset= "utf-8" >
<html>
	<head>
		<title>
			Inscris-toi!
		</title>
		<?php 
			$login = $_POST['login'];
			$password = $_POST['password'];
			$majeur = $_POST['majeur'];
			$type = $_POST['genre'];
			$lettre = $_POST['newslettre'];
			$soutien = $_POST['membredesoutien'];
			
		?>
	</head>
	<body>
		<h1>ton conte bro</h1>
			<p>
				Login: <?= $login ?> <br>
				Mot de passe: <?= $password ?> <br>
				Majeur: <?= $majeur ?> <br>
				Type: <?= $type ?> <br>
				News Letter: <?= $lettre ?> <br>
				Membre de soutien: <?= $soutien ?> <br>
			</p>

	</body>
</html> 