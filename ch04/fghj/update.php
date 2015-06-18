<?php

    // Constante
    const DB_SERVEUR = "localhost";
    const DB_USER = "root"; 
    const DB_PASSWORD = ""; 
    const DB_BASE = "ch04";

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  

  // True si l'email est valide, False si l'email n'est pas valide
  

  $req = "SELECT email, date_inscription FROM `liste_email` WHERE id = $id;";
  //connexion
  $connect = new mysqli(DB_SERVEUR, DB_USER, DB_PASSWORD, DB_BASE);
  if ($connect->connect_errno) {
    die("problème de connexion ({$connect->connect_errno})" .$connect_errno);
  }
  $resultat = $connect->query($req);
  //email a modifier
  $email_to_update = $resultat->fetch_assoc(['email']);

?>

<!DOCTYPE html>
  <html lang="fr">
      <head>
          <title>  </title>
          <meta charset="utf-8">
      </head>  

  <body>

    <form method="post" action="update_table.php">
      <p>ancien email</p>

      <p>e-mail</p>
      <input type="email" name="new_email" value="<?=$email_to_update?>">
      <input type="hidden" name="id" value="<?=$id?>" >

      <input type="submit" name="envoyer" value"update">
    </form>

    
  </body> 
</html>