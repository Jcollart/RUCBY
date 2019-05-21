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

  <div id=conteneur_texte>
    <p>Lorem ipsum dolordrt sit amet consectetur adipisicing elit. Illo ipsa, quas expedita sint, impedit ex earum
      consequatur repudianda nesciunt labore dolore quo suscipit reiciendis, rem debitis sed atque! Quas, et!
    </p>
  </div>


  <!--- ARTICLE NEWS --->
  <article id=news>
  <?php
  
$requete = $bdd->prepare  ("SELECT nom_image, titre_news, SUBSTRING(description_news, 1, 300) as description_news FROM appartenir, news, image WHERE news.id_news = appartenir.id_news AND image.id_image = appartenir.id_image AND news.id_news=image.id_image ORDER BY news.date_news DESC limit 0, 3");
$requete->execute();
 
while  ($donnees = $requete->fetch())
{


?>



        <div id=image_article><a href="article.php?id_news=<?php echo $donnees['$id'];?>"><img src="images/<?php echo $donnees['nom_image']; ?>" ></a></div>
        <div id=contenu_article>
            <h1><?php echo $donnees['titre_news']; ?></h1>

            
            <p><?php echo $donnees['description_news']; ?>...</p>
        </div>
      
        <?php
  }
 
$requete->closeCursor(); // Termine le traitement de la requête

?>
      

      </article>
      
     





  <!--- ARTICLE NEWS --->






  <?php include('footer.php'); ?>

</body>

</html>