<?php


$nombre = $_POST['chiffre'];
//verification si c'est bien un nombre
if (is_numeric($nombre)) {
	$nbr = (int)$nombre;
	$message ="Tu as choisi la base ".$nbr." brow";
} else {
	$message = "T'es fou toi met un nombre!";
}


$i = 0;
$j = 0;
$r = 0;

$c = 0;
$b = 0;
$n = 0;

//table mupltiplication
?>
<html>
	<head>
		<title>Mise en place des deux tables </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<p><?= $message ?></p>
		<h2> la table du turfu n°1 vertion multiplication maggle </h2>
			<table>
				<?php
					echo '<tr>'.'<td>X</td>';
					for ($r=0; $r < $nbr; $r=$r+1){
						echo '<td>'.$r.'</td>';
						}
					echo '</tr>';
					for ($i=0; $i < $nbr; $i=$i+1) {
						
						echo '<tr>';
						echo '<td>'.$i.'</td>';
						for ($j=0; $j < $nbr; $j=$j+1) {
							//calcul qui dit que si c'est plus petit que nbr ou lui ajoute 1
							$cal = $i*$j;
							$tutu = base_convert($cal, 10, $nbr);
							//affichage du calcul
							
							echo '<td>'.$tutu.'</td>';
						}
						echo '</tr>';


					}
			?>



			</table>
			
			<h2> la table du turfu n°2 vertion adition maggle</h2>
				<table>
				<?php
				//addition
					echo '<tr>'.'<td>+</td>';
					for ($c=0; $c < $nbr; $c=$c+1){
						echo '<td>'.$c.'</td>';
						}
					echo '</tr>';
					for ($b=0; $b < $nbr; $b=$b+1) {
						
						echo '<tr>';
						echo '<td>'.$b.'</td>';
						for ($n=0; $n < $nbr; $n=$n+1) {
							//calcul
							$cal = $b+$n;
							$tutu = base_convert($cal, 10, $nbr);
							//affichage
							
							echo '<td>'.$tutu.'</td>';
						}
						echo '</tr>';


					}
				?>

		</table>
	</body>
</html>
