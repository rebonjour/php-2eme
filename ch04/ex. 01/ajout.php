<!doctype html>
<head>
</head>

<body>

<?php
	if($_POST['envoyer']) {
		
		$email = $_POST['email'];
		
		/*Insertion dans la base de donnée */
		//Etape connexion serveur
		
		$dbh = new mysqli( "localhost" , "root", "", "ch04" );
		
		if( $dbh->connect_error ) {
			echo "Erreur de connexion" .$dbh->connect->error;
		}
		
		//Etape préparation et envoi de la requete
		
		$spl = "INSERT INTO liste_email VALUES (NULL, '" . $email . "', NOW() )";
		if( $result = $dbh->query( $sql ) ) {
			echo $result->nom_rows . " lignes ajouté.";
		}
		
		}else{ ?>


?>

<form id="insert" name="insert" action="<?php $_SERVER['PHP_SELF']?>" method="POST">

<p> Entrez votre adresse email : <input type="email" id="email" name="email" required="required"></p>
<input type="submit" id="envoyer" name="envoyer" value="Envoyer">

</form>
<?php
}
?>
</body>