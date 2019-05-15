<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/galerie.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<title>Galerie</title>
</head>

<body>

	<?php include('header2.php'); ?>
	<?php include('php/connectbdd.php'); ?>

	<div id="bloc_galerie">
		<div id="cadre_titre">
			<h1>GALERIE PHOTO</h1>
		</div>
	</div>

	<div class="galerie">

				<?php


				 $id = $_GET['id'];
         $req = "SELECT * FROM photo,correspond,galerie WHERE galerie.id_galerie=$id AND photo.id_photo = correspond.id_photo AND galerie.id_galerie = correspond.id_galerie ORDER BY photo.id_photo DESC";
         $reponse = $bdd->query($req);

      // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
        ?>

						<a href="images/fullscreen/<?php echo $donnees['nom_photo']; ?>" rel="prettyPhoto[pp_gal]">
							<img src="images/<?php echo $donnees['nom_photo']; ?>" alt="">
						</a>

        <?php
        }
        $reponse->closeCursor(); // Termine le traitement de la requête
        ?>

	</div>

		<?php include('footer.php'); ?>

			<script type="text/javascript" charset="utf-8">
			  $(document).ready(function(){
			    $("a[rel^='prettyPhoto']").prettyPhoto();
			  });
			</script>
		</body>

</html>
