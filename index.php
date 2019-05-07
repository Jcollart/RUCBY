<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <title>Accueil</title>

</head>

<body>
<?php include('header.php');?>
	<!--SLIDER-->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/sport1.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="images/sport2.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="images/sport3.jpg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!--FIN SLIDER-->

	<!--MOT DU PRESIDENT-->
	<div class="presentation">
		<div class="pImg">
			<img src="images/president.jpeg" alt="Président">
		</div>
		<div class="pTexte">
			<h2>Un mot du président</h2><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
				pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
				laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
				commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
				pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
				laborum.</p>
		</div>
	</div>
	<!--FIN MOT DU PRESIDENT-->

	<!--PARRALAX-->
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/parallax.jpg" alt=""></div>
	<!--FIN PARRALAX-->

	<!--A PROPOS-->
	<div class="aPropos">
		<div class="aPimg">
			<img src="images/apropos.jpg" alt="">
		</div>
		<div class="aPtexte">
			<h2>A Propos</h2><br>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis illum error, molestias soluta numquam possimus,
				saepe quia voluptas explicabo repudiandae, blanditiis corrupti distinctio repellendus nemo doloremque assumenda
				earum perspiciatis eius. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore consequatur ipsa
				magni nulla incidunt quo blanditiis aliquid illo! Sequi quia cumque recusandae adipisci ratione id natus error
				earum optio molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores exercitationem
				itaque ut eum explicabo officiis rerum sed mollitia. Repudiandae commodi quaerat, corporis expedita nostrum ab
				architecto sit impedit optio.</p>
		</div>
	</div>
	<!--FIN A PROPOS-->
<?php include('footer.php'); ?>

</body>

</html>
