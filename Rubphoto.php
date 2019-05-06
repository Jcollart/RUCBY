<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/rubphotos.css">
    <title>Document</title>
</head>
<body>

    <!---
    -                                HEADER                                               -
    --------------------------------------------------------------------------------->

<?php include('header.php');?>



    <!---
    -                        HEADER RUBRIQUE PHOTOS                                 -
    --------------------------------------------------------------------------------->

    <div id="bloc_rubphotos">
        <div id="cadre_titre">
            <h1>RUBRIQUE PHOTOS </h1>
        </div>
    </div>

    <div id="choix_rubphoto">

        <div id="col1evenement"><a href="galerie.php"><img  src="images/nfutsal.jpg" width="500px" height="400px">
                    <p>IMAGES EVENEMENTS</p>
            </a>
        </div>
        <div id="col2match"><a href="galerie.php"><img  src="images/futsal.jpg" width="500px" height="400px" >
                    <p>IMAGES MATCHS</p>
            </a>
        </div>
        <div id="col3soiree"><a href="galerie.php"><img  src="images/soireefutsal.jpg" width="500px" height="400px">
                    <p>IMAGES SOIREES</p>
            </a>
        </div>


    </div>

    <?php include('footer2.php');?>
</body>
</html>
