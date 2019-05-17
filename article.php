<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
  




    <link rel="stylesheet" href="css/article.css">

  <title>Article</title>
</head>

<body>
  <?php include('php/connectbdd.php');// connexion BDD //
  
  include('header2.php'); ?>


  <!--HEADER NEWS-->


  <div id="header_article" <?php

$requete = $bdd->query ("SELECT * FROM appartenir, news, image WHERE news.id_news = appartenir.id_news AND image.id_image = appartenir.id_image limit 1 ");
 
 
while  ($resultat = $requete->fetch())
{


?> style="background-image: url(images/<?php echo $resultat['nom_image']; ?>)">
    <div id="cadre_titre">
      <h1><?php echo $resultat['titre_news']; ?></h1>
    </div>
  </div>


  <!-- ARTICLE -->



  <!--- ARTICLE --->
  <article id=news>




    <div id=contenu_article>

      <p><?php echo $resultat['description_news']; ?>

      </p>
    </div>

  </article>
  <?php
  }
 
$requete->closeCursor(); // Termine le traitement de la requête

?>

  <div class=boutons_partage>
    <div id=partage_fb ><a class="faa-parent animated-hover" href="https://www.facebook.com/sharer.php?u=<?= $lien ?>&t=<?= $titre ?>"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
        <i class="fab fa-facebook-square fa-5x faa-shake"></i>
      </a>
    </div>

  </div>






  <?php include('footer.php'); ?>


</body>

</html>