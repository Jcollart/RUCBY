<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ajout photo</title>
    </head>
    <body>

      <form action="ajoutphoto.php" method="post">

            <label for="photo">photo</label> : <input type="text" name="photo" id="photo"  />
            <input type="submit" value="Envoyer" />

      </form>

      <?php

try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=futsal;charset=UTF8', 'commun', 'commun');

}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$photo = $_POST['nom_photo'];

$bdd->exec("INSERT INTO photo VALUES('$photo')");



?>

  </body>
</html>
