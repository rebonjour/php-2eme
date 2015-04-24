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
			$presentation = nl2br($_POST['presentation']);
			
		?>
	</head>
	<body>
        
        <?php
        if (mb_strlen ($login) <3) {
                echo"<h4>Ton login est trop court brow</h4>";
        }
        if (mb_strlen($password) < 5) {
            echo"<h4>Ton mot de passe est trop court many</h4>";
        }
        if ($type != 'F' AND $type != 'H') {
            echo"<h4>T'es quoi man? Un hornytoringue NIGGA?</h4>";
        }
        if (empty($presentation)){
            echo"<h4>Ta présentation man</h4>";
        }
        ?>
        
        
        
		<h1>ton compte brow           </h1>
			<p>
				Login: <?= $login ?> <br>
				Mot de passe: <?= $password ?> <br>
				Majeur: <?= $majeur ?> <br>
				Age: <?= $age ?> <br>
				Type: <?= $type ?> <br>
				News Letter: <?= $lettre ?> <br>
				Membre de soutien: <?= $soutien ?> <br>
				Présentation <br><?= $presentation ?> <br>
			</p>

	</body>
</html> 
