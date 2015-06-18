<?php

    // Constante
    const DB_SERVEUR = "localhost";
    const DB_USER = "cpnv"; 
    const DB_PASSWORD = "cpnv1234"; 
    const DB_BASE = "ch04"; 

// True si l'email est valide, False si l'email n'est pas valide
//$email_valid = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $requete = "SELECT id, email, date_inscription FROM liste_email";
  $user = "";
  $resultat = "";



  //connexion
  $connect = new mysqli(DB_SERVEUR, DB_USER, DB_PASSWORD, DB_BASE);
  if ($connect->connect_errno) {
    die("problème de connexion ({$connect->connect_errno})" .$connect_errno);
  }
  $resultat = $connect->query($requete);




?>

<!DOCTYPE html>
  <html lang="fr">
      <head>
          <title>  </title>
          <meta charset="utf-8">
      </head>  

  <body>
    <h1>liste des emails</h1>

    <?php
      echo "<table><tr><th>date d'inscription</th><th>email</th></tr>";
      foreach ($resultat as $email_recup) {
    ?>
        <tr>
          <td> <?=$email_recup['date_inscription']?></td>
          <td> <?=$email_recup['email']?></td>
          <td> <a href="update.php?id=<?=$email_recup['id']?>" >update</a></td>
        </tr>

       
    <?php
      }
      echo "</table>";

      $connect->close();
    ?>
    
  </body>
</html>
