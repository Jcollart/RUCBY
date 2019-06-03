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
?>

<!DOCTYPE html>
<html>
<head>
   <title>Gestion des galeries photos</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="css/gestionphoto.css">
</head>
<body>

  <a href="gestionarticle.php">>> Gestion des articles</a>

   <div titreajout><center><h1>GESTION DES GALERIES PHOTOS</h1><center></div>

     <div class="les3tableaux">
          <table>
            <tr>
              <th colspan="2" width="35%">Rubrique Tournois</th>
            </tr>
            <tr>
              <td colspan="2"><a href="ajoutphoto.php">Ajouter Photos</a></td>
            </tr>
            <tr>
              <?php
              $req = "SELECT * FROM photo,correspond,galerie WHERE galerie.id_galerie=1 AND photo.id_photo = correspond.id_photo AND galerie.id_galerie = correspond.id_galerie ORDER BY photo.id_photo DESC";
              $reponse = $bdd->query($req);
              while ($donnees = $reponse->fetch()) { ?>
              <td><?php echo $donnees['nom_photo']; ?><img width="50%"src="images/<?php echo $donnees['nom_photo']; ?>"></td>
              <td>Suppr</td>
            </tr><?php } $reponse->closeCursor(); ?>
          </table>

          <table>
            <tr>
              <th colspan="2" width="35%">Rubrique Matchs</th>
            </tr>
            <tr>
              <td colspan="2"><a href="ajoutphoto.php">Ajouter Photos</a></td>
            </tr>
            <tr>
              <?php
              $req = "SELECT * FROM photo,correspond,galerie WHERE galerie.id_galerie=2 AND photo.id_photo = correspond.id_photo AND galerie.id_galerie = correspond.id_galerie ORDER BY photo.id_photo DESC";
              $reponse = $bdd->query($req);
              while ($donnees = $reponse->fetch()) { ?>
              <td><?php echo $donnees['nom_photo']; ?><img width="50%"src="images/<?php echo $donnees['nom_photo']; ?>"></td>
              <td>Supprimer</td>
            </tr><?php } $reponse->closeCursor(); ?>
          </table>

          <table>
            <tr>
              <th colspan="2" width="35%">Rubrique Soirées</th>
            </tr>
            <tr>
              <td colspan="2"><a href="ajoutphoto.php">Ajouter Photos</a></td>
            </tr>
            <tr>
              <?php
              $req = "SELECT * FROM photo,correspond,galerie WHERE galerie.id_galerie=3 AND photo.id_photo = correspond.id_photo AND galerie.id_galerie = correspond.id_galerie ORDER BY photo.id_photo DESC";
              $reponse = $bdd->query($req);
              while ($donnees = $reponse->fetch()) { ?>
              <td><?php echo $donnees['nom_photo']; ?><img width="50%"src="images/<?php echo $donnees['nom_photo']; ?>"></td>
              <td><a href="supprimerphoto.php?id_photo=<?php echo $donnees['id_photo']; ?>">Supprimer</a></td>
            </tr><?php } $reponse->closeCursor(); ?>
          </table>

      </div>

</body>
</html>
