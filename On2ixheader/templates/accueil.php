<?php

//C'est la propriété php_self qui nous l'indique :
// Quand on vient de index :
// [PHP_SELF] => /chatISIG/index.php
// Quand on vient directement par le répertoire templates
// [PHP_SELF] => /chatISIG/templates/accueil.php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=accueil");
	die("");
}

?>


    <div class="page-header">

    </div>

<!-- LE SLIDER -->

		<div id="slides" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
		    <li data-target="#slides" data-slide-to="0" class="active"></li>
		    <li data-target="#slides" data-slide-to="1"></li>
		    <li data-target="#slides" data-slide-to="2"></li>
		  </ul>

		  <div class="carousel-inner">
			    <div class="carousel-item active">
				      <img src="./ressources/slide2.jpg" class="d-block w-100 maSlide" alt="slide1">
								<div class="carousel-caption">
										<h1 class="display-4">On2ix</h1>
										<button type="button" class="btn btn-outline-light btn-lg">A propos de SAMI</button>
								</div>
			    </div>
			    <div class="carousel-item">
			      	<img src="./ressources/slide4.jpg" class="d-block w-100 maSlide" alt="slide2">
			    </div>
			    <div class="carousel-item">
			      	<img src="./ressources/slide5.jpg" class="d-block w-100 maSlide" alt="slide3">
			    </div>
		  </div>

		  <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
<br>

<!-- AVIS -->

			<div class="container-fluid sectionAvis">

					<h1 class="display-3 avis">AVIS</h1>
						<div class="row espaceavis">
								<article class="col-md-4 divAvis">
									<h2 class="titreAvis">Tomato Gayming</h2>
									<p class="etoiles">★ ★ ★ ★ ★</p>
									<p class="lead">Bijoux d'excellente qualité. Service de livraison premium, à la hauteur de mes attentes !</p>
								</article>

								<article class="col-md-4 divAvis">
									<h2 class="titreAvis">Kevin le Shlag</h2>
									<p class="etoiles">★ ★ ★</p>
									<p class="lead">Elle est enceinte c chaud woulay Bilé</p>
								</article>

								<article class="col-md-4 divAvis">
									<h2 class="titreAvis">Baunat</h2>
									<p class="etoiles">★</p>
									<p class="lead">Bande de fous on va vous poursuivre sale DLB t'es mort</p>
								</article>

								<button type="button" class="btn btn-outline-light btn-lg btnAvis">L'avis de SAMI</button>

								<article class="col-md-12 avisSami">
								<p class="lead">On2xi By SAM est noté 3/5 (Cette note est basée sur + de 500 shlags dont Kevin)
																N°999 pour la joaillierie dans le monde. Trustpilot est une tierce partie indépendante
																qui recueille des critiques et témoignages de consommateurs concernant les entreprises.
																Ainsi, nous vous garantissons une objectivité totale.
								</p>
								</article>
						</div>

			</div>
<br>
<!-- A propos -->

			<div class="container-fluid">

				<div class="container">

						<div class="row">
								<article class="col-md-6">
									<img class="photoWomen" src="./ressources/women1.jpg" alt="">
								</article>

								<article class="col-md-6">
									<h2 class="texte1">A propos de SAMI</h2>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</article>

								<article class="col-md-6">
									<h2 class="texte2">Les talents SAMI</h2>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</article>

								<article class="col-md-6">
									<img class="photoWomen" src="./ressources/women2.jpg" alt="">
								</article>
						</div>

				</div>

			</div>
