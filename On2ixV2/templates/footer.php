<link rel="stylesheet" href="css/stylefooter.css">
<?php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

?>

<?php
// Si l'utilisateur est connecte, on affiche un lien de deconnexion
if (valider("connecte","SESSION"))
{
	echo "Utilisateur <b>$_SESSION[pseudo]</b> connecté depuis <b>$_SESSION[heureConnexion]</b> &nbsp; ";
	echo "<a href=\"controleur.php?action=Logout\">Se Déconnecter</a>";
}
?>
<!-- fin du content -->


<!-- fin du wrap -->
<footer>
		<div class="footer-top">
			  <div class="container">
			   	 <div class="row">

			   	 	<div class="col-md-3 col-sm-6 col-xs-6 segment-one">
							<h3 class="titre3">Truc</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>

			   	 	</div>
						<div class="col-md-3 col-sm-6 col-xs-6 segment-two">
							<h2 class="titre2">Truc2</h2>
							<ul>
								<li><a href="#"></a>Event</li>
								<li><a href="#"></a>Support</li>
								<li><a href="#"></a>Hosting</li>
								<li><a href="#"></a>Blog</li>
							</ul>

			   	 	</div>
						<div class="col-md-3 col-sm-6 col-xs-6 segment-three">
							<h2 class="titre2">Truc3</h2>
							<p class="para">FOLLOW US</p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>

						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 segment-four">
							<h2 class="titre2">Truc4</h2>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<form class="" action="" method="post">
								<input type="email" name="" value="">
								<input type="submit" name="" value="Abonnez-vous">
							</form>
						</div>

			   	 </div>
			  </div>
			</div>
</footer>
</body>
</html>
