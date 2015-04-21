
<!doctype html>
<meta charset= "utf-8" >
<html>
	<head>
		<title>
			Jeu de caca!
		</title>
		<?php 
			
			$nbr_max = 5;
			$nbr_min = 1;
			$random = rand($nbr_min, $nbr_max);
			
			
		?>
	</head>
	<body>
		<form action="resultat.php"  method="post">
			<fieldset>
				<p>TOMBOLA entre 1 et 5</p>
				<input type="text" name="utilisateur" />

				<input type="hidden" name="devine" value="<?= $random ?>">

				<input type="submit" name="envoyer">

			</fieldset>
		</form>

	</body>
</html> 
