<!doctype html>
<meta charset= "utf-8" >
<html>
	<head>
		<title>
			Inscris-toi!
		</title>
		<?php 
			$login = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars($_POST['password']);
			$majeur = $_POST['majeur'];
			$age = (int) $_POST['age'];
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
				Age: <?= $age ?> <br>
				Type: <?= $type ?> <br>
				News Letter: <?= $lettre ?> <br>
				Membre de soutien: <?= $soutien ?> <br>
			</p>

	</body>
</html> 