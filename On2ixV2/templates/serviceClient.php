<?php

if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=serviceClient");
	die("");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Service Client</title>
<meta charset="UTF-8">
<link href="css/serviceClient.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
	<div class="container">
	  <h1 class="titre">Service Client</h1>
	  <div class="imgCover" style="background-image:url(ressources/qSN_sC_sM/besoinConseils.jpg)">
			<div class="au-dessus">


			<h2 class="sous-titre">Besoin de conseils?</h2>
		  <div class="cadre">
			  <p class="parag">SAMI emploie tous les moyens possibles pour
			  guider ses clients lors de leurs achats. Notre
			  équipe de conseillers en bijoux en diamants se
			  fera un plaisir de vous aider dans votre recherche
			   du bijou en diamant parfait.</p>
		  </div>
			</div>
	  </div>
		<div class="row">

		  <div class="col-xs-12 col-sm-6 col-md-3 lead">
				<div class="divImg">
					<img class="img-responsive image_sC" src="ressources/qSN_sC_sM/mail.png">
				</div>
			  <h2 class="sous-titre">Nous envoyer un mail</h2>
			  <div class="cadre">
				  <p class="parag">Démarrez une conversation pour recevoir de
				  l’assistance concernant votre achat.
				  Envoyez-nous vos questions.</p>
			  </div>
		  </div>

		  <div class="col-xs-12 col-sm-6 col-md-3 lead">
				<div class="divImg">
					<img class="img-responsive image_sC" src="ressources/qSN_sC_sM/tel.png">
				</div>
				<h2 class="sous-titre">Appeler le XXXXXXXXXX</h2>
			  <div class="cadre">
				  <p class="parag" >Souhaitez-vous parler à quelqu'un directement?
				  Appelez notre bureau et parlez directement à votre
				  conseiller personnel de bijoux en diamant.</p>
			  </div>
		  </div>

		  <div class="col-xs-12 col-sm-6 col-md-3 lead">
				<div class="divImg">
					<img class="img-responsive image_sC" src="ressources/qSN_sC_sM/tchat.png">
				</div>
				<h2 class="sous-titre">Support chat</h2>
			  <div class="cadre">
				  <p class="parag">Chattez avec nos conseillers en bijoux en
				  diamant pour un traitement direct de votre demande.
				  Vous pouvez trouver le bouton de chat dans le coin
				  inférieur gauche.</p>
			  </div>
		  </div>

		  <div class="col-xs-12 col-sm-6 col-md-3 lead">
				<div class="divImg">
					<img class="img-responsive image_sC" src="ressources/qSN_sC_sM/whatsapp.png">
				</div>
				<h2 class="sous-titre">Contactez-nous sur XXXX</h2>
			  <div class="cadre">
				  <p class="parag">Commencez une conversation en chat avec nous
				  sur WhatsApp pour une réponse rapide à vos questions:
				  +32474076034.</p>
			  </div>
		  </div>
	</div>
</div>
</body>

</html>
