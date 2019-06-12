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


    if(isset($_POST['newphoto'],$_POST['gallery'])){
      if(!empty($_POST['newphoto'])) {
        $req = $bdd->prepare("INSERT INTO photo(nom_photo) VALUES(?)");
        $req->execute(array($_POST['newphoto']));

        $req = "SELECT id_photo FROM photo ORDER BY id_photo DESC LIMIT 1";
        $reponse = $bdd->query($req);
        $donnees = $reponse->fetch();

        $req = $bdd->prepare("INSERT INTO correspond(id_photo,id_galerie) VALUES(?,?)");
        $req->execute(array($donnees['id_photo'],$_POST['gallery']));
        $erreur = "Votre photo est bien ajoutée !";
      } else {
         $erreur = "Vous n'avez pas ajoutez de photo !";
      }
    }
      ?>

      <form action="" method="post">
        <label for="photo">Ajoutez ici</label> : <input type="text" name="newphoto" id="photo" />
        <select name="gallery">
        <?php
        //req pour faire le select en bdd
         $req = "SELECT id_galerie,nom_galerie FROM galerie";
         $reponse = $bdd->query($req);
        while ($donnees = $reponse->fetch())
        {

          echo '<option value="'.$donnees['id_galerie'].'">'.$donnees['nom_galerie'].'</option>';

        }
        $reponse->closeCursor();
        ?>
        </select>
        <input type="submit" value="Envoyer"/>
      </form>
<br />
      <?php
      if(isset($erreur)) {
         echo $erreur;
      }
      ?>

  </body>
</html>
