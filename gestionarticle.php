<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=futsal;charset=UTF8', 'root', '');
  
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer


$news = $bdd->query('SELECT * FROM news ORDER BY id_news DESC');
?>
<!DOCTYPE html>
<html>

<head>
  <title>GESTION DES NEWS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/gestionarticle.css">
</head>

<body>

  <a href="gestionphoto.php">>> Gestion des photos
    <<</a> <br /><br />
    <a href="index.php">>> Retour à l'index <<</a>
      <div titreajout>
        <center>
          <h1> AJOUTER UNE NEWS </h1>
          <center>
      </div>
            <center>
              <div class="bouton">
                <p>
                  <a href="redaction.php">AJOUTER</a>
                </p>
              </div>
            <center><br /><br /><br />

      <div titrenews>
                  <center>
                    <h1> GESTION DES NEWS </h1>
                  </center>
      </div>
                <div class="tableau">
                  <center>
                    <table>
                      <tr>
                        <th width="35%">Titre News</th>
                        <th width="35%">Modification News</th>
                        <th width="35%">Suppression News</th>
                      </tr>
                      <tr>

                        <?php while($a = $news->fetch()) { ?>

                        <td><a href="article.php?id_news=<?= $a['id_news'] ?>"><?= $a['titre_news'] ?></a></td>
                        <td><a href="redaction.php?edit=<?= $a['id_news'] ?>">Modifier</a></td>
                        <td><a href="supprimer.php?id_news=<?= $a['id_news'] ?>">Supprimer</a>
                      </tr>
                      <?php } ?>

                      </tr>
                    </table>
                  </center>
                </div>


</body>

</html>