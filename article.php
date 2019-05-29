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

$requete = $bdd->prepare('SELECT * FROM news, image, appartenir WHERE news.id_news=appartenir.id_news AND appartenir.id_image=image.id_image AND news.id_news='.$_GET['id'] );
$requete->execute();
 
 
while  ($donnees = $requete->fetch())
{


?> style="background-image: url(images/<?php echo $donnees['nom_image']; ?>)">
    <div id="cadre_titre">
      <h1><?php echo $donnees['titre_news']; ?></h1>
    </div>
  </div>



  <!--- ARTICLE --->
  <article id=contenu_article>


    <p><?php echo $donnees['description_news']; ?>

    </p>

  </article>
  <?php
  }
 
$requete->closeCursor(); // Termine le traitement de la requête

?>
  
  <div class="boutons_partage">
    <div id="icones_partage"><a class="faa-parent animated-hover"    
        href="https://www.facebook.com/share??url=?=<? $lien ?>&t=<? $titre ?>"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
        <i class="fab fa-facebook-square fa-4x faa-shake"></i>
      </a>
      <a class="faa-parent animated-hover" href="https://twitter.com/share?url=?=<? $titre ?>&via=votre-nom-twitter"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
        <i class="fab fa-twitter-square fa-4x faa-shake"></i>
      </a>
    </div>
  </div>


  <?php include('footer.php'); ?>


</body>

</html>