<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/article.css">
    <title>Article</title>
</head>
<body>
  <?php include('php/connectbdd.php');// connexion BDD //
  
  include('header2.php'); ?>
  

<!--HEADER NEWS-->


  <div id="header_article"
  <?php

$requete = $bdd->query ("SELECT * FROM appartenir, news, image where news.id_news = appartenir.id_news AND image.id_image = appartenir.id_image limit 1 ");
 
 
while  ($resultat = $requete->fetch())
{


?>
  style="background-image: url(images/<?php echo $resultat['nom_image']; ?>)">
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






  <!--- ARTICLE NEWS --->






  <?php include('footer.php'); ?>

</body>
</body>
</html>