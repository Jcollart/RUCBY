<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ajout photo</title>
    </head>
    <body>

      <a href="gestionarticle.php">>> Gestion des articles</a><br>
      <a href="gestionphoto.php">>> Gestion des galeries photos</a><br><br><br>

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
};

if(isset($_POST['nom_photo']) AND !empty($_POST['nom_photo'])) {

$photo = $_POST['nom_photo'];

  $req = $bdd->prepare("INSERT INTO photo(nom_photo) VALUES(?)");
  $req->execute(array($photo));

  }

?>

<form action="" method="post">

      <label for="photo">photo</label> : <input type="text" name="nom_photo" id="photo"  />


<select name="galerie.id_galerie">
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
  };

     $req = "SELECT id_galerie,nom_galerie FROM galerie";
     $reponse = $bdd->query($req);


    while ($donnees = $reponse->fetch())
    {
    ?>

      <option><?php echo $donnees['nom_galerie']; ?></option>

    <?php
    }
    $reponse->closeCursor();
    ?>
</select>

  <input type="submit" value="Envoyer" />

</form>

  </body>
</html>
