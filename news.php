<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/news.css">
  <title>Les News</title>
</head>

<body>
  <?php include('php/connectbdd.php');// connexion BDD //

  include('header2.php'); ?>


<!--HEADER NEWS-->


  <div id="header_news">
    <div id="cadre_titre">
      <h1>LES NEWS</h1>
    </div>
  </div>



  <!---TEXTE PRESENTATION DE LA RUBRIQUE NEWS ---->

  <div id="conteneur_texte">
    <p>Bienvenue sur notre page articles ! Toutes les dernières nouveautés du club ici !
    </p>
  </div>
  <?php

  $requete = $bdd->prepare("SELECT nom_image, titre_news, news.id_news, SUBSTRING(description_news, 1, 300) as description_news FROM appartenir, news, image WHERE news.id_news = appartenir.id_news AND image.id_image = appartenir.id_image ORDER BY id_news DESC limit 0, 3");
  $requete->execute();

  while($donnees = $requete->fetch())
  {
  ?>

  <!--- ARTICLE NEWS --->
  <article class="news">
    <a href="article.php?id=<?php echo $donnees['id_news'];?>">
      <div class="image_article"><img src="images/<?php echo $donnees['nom_image']; ?>" ></div>
      <div class="contenu_article">
          <h1><?php echo $donnees['titre_news']; ?></h1>
          <p><?php echo $donnees['description_news']; ?>...</p>
      </div>
    </a>
  </article>
      <?php
  }

$requete->closeCursor(); // Termine le traitement de la requête

?>



  <?php include('footer.php'); ?>

</body>

</html>
