<?php

    // Constante
    const DB_SERVEUR = "localhost";
    const DB_USER = "root"; 
    const DB_PASSWORD = ""; 
    const DB_BASE = "ch04";
  

  // True si l'email est valide, False si l'email n'est pas valide
  $new_email_valid = filter_input(INPUT_POST, 'new_email', FILTER_VALIDATE_EMAIL);
  $new_email = filter_input(INPUT_POST, 'new_email', FILTER_SANITIZE_EMAIL);
  $id = $_POST['id'];

  $req = "UPDATE ch04.liste_email SET email = '$new_email' WHERE id=$id;";
  //connexion
  $connect = new mysqli(DB_SERVEUR, DB_USER, DB_PASSWORD, DB_BASE);
  if ($connect->connect_errno) {
    die("problème de connexion ({$connect->connect_errno})" .$connect_errno);
  }
  $resultat = $connect->query($req);
  $connect->close();
?>

<!DOCTYPE html>
  <html lang="fr">
      <head>
          <title>  </title>
          <meta charset="utf-8">
      </head>  

  <body>

    <?php
      if ($new_email_valid) {
        echo "tout est bon";
      }else{
        echo "met une vraie adresse email conard";
      }

    ?>

    
  </body> 
</html>