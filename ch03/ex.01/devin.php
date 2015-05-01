
<!DOCTYPE html>
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
				<p>Prix de ta maison du turfu brow</p>
				<input type="text" name="prix" />
                
                <p>ta tune à dispo</p>
				<input type="text" name="fond" />

				

				<input type="submit" name="envoyer">

			</fieldset>
		</form>

	</body>
</html> 
