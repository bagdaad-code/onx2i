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
<link href="client.css" rel="stylesheet">
</head>

<body>
	<div class="page-header">
	  <h1 class="titre">Service Client</h1>
	  <div class="au-dessus">
		  <h2 class="sous-titre">Besoin de conseils?</h2>
		  <div class="cadre">
			  <p>SAMI emploie tous les moyens possibles pour 
			  guider ses clients lors de leurs achats. Notre 
			  équipe de conseillers en bijoux en diamants se 
			  fera un plaisir de vous aider dans votre recherche
			   du bijou en diamant parfait.</p>
		  </div>
	  </div>
	  <div class="top">
		  <div class="top-left">
			  <img src="images/mail3.webp">
			  <h2 class="sous-titre">Nous envoyer un mail</h2>
			  <div class="cadre">
				  <p>Démarrez une conversation pour recevoir de 
				  l’assistance concernant votre achat. 
				  Envoyez-nous vos questions.</p>
			  </div>
		  </div>
		  <div class="top-right">
			  <h2 class="sous-titre">Appeler le XXXXXXXXXX</h2>
			  <div class="cadre">
				  <p>Souhaitez-vous parler à quelqu'un directement? 
				  Appelez notre bureau et parlez directement à votre 
				  conseiller personnel de bijoux en diamant.</p>
			  </div>
		  </div>
	  </div>
	  <div class="bot">
		  <div class="bot-left">
			  <h2 class="sous-titre">Support chat</h2>
			  <div class="cadre">
				  <p>Chattez avec nos conseillers en bijoux en 
				  diamant pour un traitement direct de votre demande. 
				  Vous pouvez trouver le bouton de chat dans le coin 
				  inférieur gauche.</p>
			  </div>
		  </div>
		  <div class="bot-right">
			  <h2 class="sous-titre">Contactez-nous sur XXXX</h2>
			  <div class="cadre">
				  <p>Commencez une conversation en chat avec nous 
				  sur WhatsApp pour une réponse rapide à vos questions: 
				  +32474076034.</p>
			  </div>
		  </div>
	  </div>
	</div>

</body>

</html> 
    
