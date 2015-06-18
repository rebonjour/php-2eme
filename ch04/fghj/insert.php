<?php

    // Constante
    const DB_SERVEUR = "localhost";
    const DB_USER = "root"; 
    const DB_PASSWORD = ""; 
    const DB_BASE = "ch04";

    $insert = "";

  // True si l'email est valide, False si l'email n'est pas valide
  $email_valid = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  $req = "INSERT INTO liste_email(email, date_inscription) VALUES ('$email', now());";
//connexion
  $connect = new mysqli(DB_SERVEUR, DB_USER, DB_PASSWORD, DB_BASE);
  if ($connect->connect_errno) {
    die("problème de connexion ({$connect->connect_errno})" .$connect_errno);
  }
  $insert = $connect->query($req);

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
    if ($email_valid) {
      
      echo "sa marche gros";
      
    } else {
      
      echo "sa a merder";
      
      
    }
  ?>
    
  </body> 
</html>
