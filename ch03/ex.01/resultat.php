<!DOCTYPE html>	
<?php 
$argent_utilisateur = $_POST['fond'];
$prix_maison = $_POST['prix'];

$montant_min = $prix_maison * 20 / 100;
$moitie = $prix_maison * 50/100;


?>
<html>
	<head>
        <meta charset="utf-8" >

		<title>
			DONZEY EST POSEY
		</title>
		
	</head>
	<body>
		<h1>DONZEY EST POSEY</h1>
			<p>
				<?php

				if ($argent_utilisateur != $montant_min) {

					echo 'Cambriole une banque many';

				}else{

					echo 'Ta déjà 20% de ta maison gars! Ce qui correspond au chiotte HAHAHAHAHA';

				}
                if ($argent_utilisateur == $moitie) {

					echo 'Trop de tune NIGGA';

				}else{

					echo 'JUIF DE MERDE DONNE DE L ARGENT AU PAUVRE Henry je te vois';

				}

				?>
				
				
			</p>

	</body>
</html> 
