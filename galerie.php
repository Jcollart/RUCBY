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

	<div id="bloc_galerie">
		<div id="cadre_titre">
			<h1>GALERIE PHOTO</h1>
		</div>
	</div>

	<div class="galerie">
		<div class="ligne1">
				<div class="photol1">
					<ul id="photol1">
						<li>
							<a href="images/fullscreen/1.jpg" rel="prettyPhoto[pp_gal]"><img src="images/1.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/2.jpg" rel="prettyPhoto[pp_gal]"><img src="images/2.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/3.jpg" rel="prettyPhoto[pp_gal]"><img src="images/3.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/4.jpg" rel="prettyPhoto[pp_gal]"><img src="images/4.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="ligne2">
				<div class="photol2">
					<ul id="photol2">
						<li>
						<a href="images/fullscreen/5.jpg" rel="prettyPhoto[pp_gal]"><img src="images/5.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/6.jpg" rel="prettyPhoto[pp_gal]"><img src="images/6.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/7.jpg" rel="prettyPhoto[pp_gal]"><img src="images/7.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/8.jpg" rel="prettyPhoto[pp_gal]"><img src="images/8.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="ligne3">
				<div class="photol3">
					<ul id="photol3">
						<li>
						<a href="images/fullscreen/9.jpg" rel="prettyPhoto[pp_gal]"><img src="images/9.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/10.jpg" rel="prettyPhoto[pp_gal]"><img src="images/10.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/12.jpg" rel="prettyPhoto[pp_gal]"><img src="images/12.jpg" alt=""></a>
						</li>
						<li>
						<a href="images/fullscreen/13.jpg" rel="prettyPhoto[pp_gal]"><img src="images/13.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include('footer1.php'); ?>
<?php include('footer2.php'); ?>

			<script type="text/javascript" charset="utf-8">
			  $(document).ready(function(){
			    $("a[rel^='prettyPhoto']").prettyPhoto();
			  });
			</script>
		</body>

</html>
