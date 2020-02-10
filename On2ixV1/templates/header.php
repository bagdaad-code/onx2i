<?php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

// Pose qq soucis avec certains serveurs...
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- **** H E A D **** -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>On2ix</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<!-- Liaisons aux fichiers css de Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="css/sticky-footer.css" rel="stylesheet"/>

	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<link href="css/style.css" rel="stylesheet"/>

</head>
<!-- **** F I N **** H E A D **** -->


<!-- **** B O D Y **** -->
<body>

<!-- style inspiré de http://www.bootstrapzero.com/bootstrap-template/sticky-footer -->

<!-- Wrap all page content here -->

	<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light maNav">
			<a class="navbar-brand" href="index.php?view=accueil"><img src="./ressources/diamond.png" alt="diamond" width="70" height="70" class="d-inline-block align-top"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>


			<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Accueil</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Bagues</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="#">Boucles d'oreilles</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Colliers</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="#">Bracelets</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Montres</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="#">Nous Contacter</a>
			      </li>

			    </ul>
			</div>


			<div class="col-sm-3 col-md-3">
		        <form class="navbar-form" role="search">
		        <div class="input-group barreSearch">
		            <input type="text" class="form-control" placeholder="Search" name="q">
								<div class="input-group-append butLoupe">
									 <button class="btn btn-outline-secondary" type="button">
											 <i class="fa fa-search"><img id="loupe" src="./ressources/loupe.png" alt=""> </i>
									 </button>
							 </div>
		        </div>
		        </form>
		    </div>

			<button class="btn btn-lg"><span class="fa fa-shopping-cart"></span><br>Boutique</button>


		</nav>
  <!-- Begin page content -->
  <div class="container">
