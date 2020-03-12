<!--
   quiSommesNous.html

   Copyright 2020 afacqueu <afacqueu@b2-IG-201PC20.domaine.lan>

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.


-->

<?php

if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=quiSommesNous");
	die("");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Qui Sommes Nous?</title>
	<meta charset="UTF-8">
	<link href="css/serviceClient.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	      [class*="col"] { margin-top: 20px; }
	      img { width: 70%;
				text-align:center; }
	    </style>
</head>

<body>
	<div class="container">
	  <h1 class="titre">Qui Sommes Nous?</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 lead">
				<img class="img-responsive" src="ressources/qSN_sC_sM/mail.png">
			</div>
		  <div class="col-xs-12 col-sm-6 col-md-6 lead">
			  <h2 class="sous-titre">La différence Sami DeLaBarre</h2>
			  <div class="cadre">
				  <p>Découvrez les bagues de fiançailles de luxe et les
				  bijoux en diamant de Sami. Dans notre bijouterie à
				  Anvers, en Belgique, nous utilisons toujours des matériaux
				  durables afin de fabriquer une joaillerie de haute qualité.
				   Nous pouvons garantir le meilleur prix parce que nous vendons
				    nos bijoux en ligne et gérons efficacement nos stocks. De
				    plus, nos fondateurs – des diamantaires de 4ème génération
				    - achètent eux-mêmes les diamants de votre bague à la source.
				    </p>
				    <p>Vous désirez admirer votre bijou de vos propres yeux ?
				    Prenez rendez-vous dans nos showrooms. Nos bijouteries en
				    Belgique (à Anvers), en France (à Paris, à Nice), en Suisse
				    (à Zürich, à Genève), à Halluin binks et à l'international se
				    situent dans des quartiers diamantaires distingués. Lors de
				    votre achat d’un bijou en diamant, vous recevrez des conseils
				     professionnels. Notre service est toujours personnel et
				     discret.</p>
			  </div>
		  </div>
 		</div>
			<!--  -->
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6 lead">
			  <h2 class="sous-titre">A propos de Sami DLB</h2>
			  <div class="cadre">
				  <p>BAU euh SAMI DLB, la bijouterie en ligne fondée en 2008 en Belgique,
				   est connue pour ses bagues serties de diamants, boucles d’oreilles
				    et bague de fiançailles de luxe. Nous pouvons offrir des prix
				    attractifs grâce à notre modèle économique efficace. Notre marque
				    est née en ligne, ce qui nous a permis de rapidement acquérir une
				    place à l’échelle mondiale.</p>
				    <p>Nous vendons des bijoux en diamant en ligne ou dans nos
				    bijouteries physiques (à Paris et à Nice en France). Grâce à
				     un système de production efficace, géré par des diamantaires
				     et des orfèvres expérimentés, nous sommes en mesure de livrer
				     la plupart de nos bijoux en diamant sous 7 jours, toujours dans
				      le respect d’une qualité supérieure. </p>
			  </div>
		  </div>
			<div class="col-xs-12 col-sm-6 col-md-6 lead">
				<img class="img-responsive" src="ressources/qSN_sC_sM/mail.png">
			</div>
		</div>
	<!--  -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 lead">
				<img class="img-responsive" src="ressources/qSN_sC_sM/mail.png">
			</div>
		  <div class="col-xs-12 col-sm-6 col-md-6 lead">
			  <h2 class="sous-titre">Pourquoi choisir Sami DLB ?</h2>
			  <div class="cadre">
				  <p>Notre engagement est d'offrir des bijoux en ligne au
				  meilleur rapport qualité-prix. Chaque bijou en diamant
				  de notre vaste collection est fabriqué avec le plus grand
				  soin à Anvers pour satisfaire nos clients dans le monde
				   entier. Nous voulons toujours dépasser vos attentes,
				   comme en témoignent plus de 2500 de nos clients.</p>
				   <p>Nos bagues de fiançailles abordables, nos livraisons
				   rapides et notre excellent service sont énormément appréciés
				   par notre clientèle. Chez BAUNAT, vous trouverez votre bague
				   sertie d’un diamant solitaire parfaite, ou vos bijoux en
				    diamant intemporels. Et si vous n'êtes pas satisfait à
				    100%, vous avez 30 jours pour changer d'avis. Que dire
				    de plus ? A part que SAMIIIIIII. </p>
			  </div>
		  </div>
		</div>
	</div>

</body>

</html>
