<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/index.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Accueil</title>

</head>

<body>
	<?php include('header.php');?>
	<!--SLIDER-->
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/sport1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
          <h5>1 slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/sport2.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
          <h5>2 slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/sport3.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
          <h5>3 slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!--FIN SLIDER-->

	<!--MOT DU PRESIDENT-->

	<div class="presentation">
		<div class="pImg">
			<img src="images/logo_villers.png" alt="Président">
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
		<div class="aPimg">
			<img src="images/apropos.jpg" alt="" width="400px">
		</div>
	</div>

	<!--FIN A PROPOS-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
	<?php include('footer.php'); ?>

</body>

</html>
