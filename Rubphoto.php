<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="css/rubphotos.css">
  <title>rubrique photo</title>
</head>

<body>
  <?php include('header.php');?>
  <div id="bloc_rubphotos">
    <div id="cadre_titre">
      <h1>RUBRIQUE PHOTOS </h1>
    </div>
  </div>

  <div id="choix_rubphoto">

    <div id="cotegauche"><a href="galerie.php"><h1>RUBRIQUE TOURNOI</h1><img  src="images/mondial2019.jpg" width="500px" height="400px" class="arrondie" alt=""></a></div>
    <div id="cotemilieu"><a href="galerie.php"><h1>RUBRIQUE MATCH</h1><img  src="images/futsal.jpg" width="500px" height="450px" alt=""></a></div>
    <div id="cotedroit"><a href="galerie.php"><h1>RUBRIQUE SOIREE</h1><img  src="images/soireefutsal.jpg" width="500px" height="400px" alt=""></a></div>

  </div>
 
  <?php include('footer.php'); ?>

 

</body>

</html>
