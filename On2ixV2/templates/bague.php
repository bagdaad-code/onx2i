<?php
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=annonce");
	die("");
}
?>
<div class="mapagedebague">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h2 id=titre >404 error </h2>
	<p id="err">Aucune bague disponible avec ces critères </p>
	<div class="triEncour"></div>
		<div class="tri" style="font-size: 22px;">
			Trier par:<select  id="tri">
				<option class="option" id="POP">Popularité</option>
				<option class="option" id="PASC">Prix dans l'ordre croissant</option>
				<option class="option" id="PDESC">Prix dans l'ordre decroissant</option>
				<option class="option" id="CASC">Carat par ordre croissant</option>
				<option class="option" id="CDESC">Carat par ordre decroissant</option>
			</select>
		</div>
		<div id="triGauche">
		<div class="alliage">
			<span class="Filter-title" >Choisissez l'alliage</span>
			<br>
			<button class="checkalliage" id="or blanc" type="submit">Or blanc</button><br>
			<button class="checkalliage" id="or rose"  type="submit">Or rose</button> <br>
			<button class="checkalliage" id="or jaune" type="submit">Or jaune</button><br>
			<button class="checkalliage" id="platine"  type="submit">Platine</button> <br>
			<button class="checkalliage" id="raz"  type="submit">Remise a zéro</button> <br>
		</div>
		<br>
		<div class="genre">
			<span class="Filter-title" >Choisissez un genre</span>
	  	 <br>
			<input class="checkgenre" type="checkbox" id="F" name="">
			<label for="F" style="font-size: 18px;">Femme</label><br>
			<input class="checkgenre" type="checkbox" id="M" name="">
			<label for="M" style="font-size: 18px;">Homme</label><br>
			<input class="checkgenre" type="checkbox" id="U" name="">
			<label for="U" style="font-size: 18px;">Unisex</label><br>
		</div>
		<br>
		<div class="prix">
			<span class="Filter-title">Choisissez le prix </span><br>
			À partir de <br>
			<select class="selectPrix" id="selectPrixMin" name="" data-selected="">
				<option value="0" selected>0</option>
				<option value="500">500</option>
				<option value="1000">1000</option>
				<option value="1500">1500</option>
				<option value="2000">2000</option>
				<option value="2500">2500</option>
				<option value="3000">3000</option>
				<option value="3500">3500</option>
				<option value="4000">4000</option>
				<option value="4500">4500</option>
				<option value="5000">5000</option>
				<option value="6000">6000</option>
				<option value="7000">7000</option>
				<option value="8000">8000</option>
				<option value="9000">9000</option>
				<option value="10000">10000</option>
				<option value="15000">15000</option>
				<option value="20000">20000</option>
				<option value="30000">30000</option>
				<option value="40000">40000</option>
				<option value="50000">50000</option>
			</select><br>
				jusqu'à <br>
			<select class="selectPrix" id="selectPrixMax" name="" data-selected="false">
				<option value="0" >0</option>
				<option value="500">500</option>
				<option value="1000">1000</option>
				<option value="1500">1500</option>
				<option value="2000">2000</option>
				<option value="2500">2500</option>
				<option value="3000">3000</option>
				<option value="3500">3500</option>
				<option value="4000">4000</option>
				<option value="4500">4500</option>
				<option value="5000">5000</option>
				<option value="6000">6000</option>
				<option value="7000">7000</option>
				<option value="8000">8000</option>
				<option value="9000">9000</option>
				<option value="10000">10000</option>
				<option value="15000">15000</option>
				<option value="20000">20000</option>
				<option value="30000">30000</option>
				<option value="40000">40000</option>
				<option value="50000"selected>50000</option>
			</select><br>
		</div>
		<br>
		<div class="carat">
	<span class="Filter-title" > Choisissez le poids en carat</span>
			  <br>
			 À partir de <br>
			<select class="selectCarat" id="selectCaratMin" name="" data-selected="false">
				<option value="1.00" selected>1.00</option>
				<option value="1.25">1.25</option>
				<option value="1.50">1.50</option>
				<option value="1.75">1.75</option>
				<option value="2.00">2.00</option>
				<option value="2.25">2.25</option>
				<option value="2.50">2.50</option>
				<option value="2.75">2.75</option>
				<option value="3.00">3.00</option>
				<option value="3.25">3.25</option>
				<option value="3.50">3.50</option>
				<option value="3.75">3.75</option>
				<option value="4.00">4.00</option>
				<option value="4.25">4.25</option>
				<option value="4.50">4.50</option>
				<option value="4.75">4.75</option>
				<option value="5.00">5.00</option>
			</select><br>
						 jusqu'à <br>
			<select class="selectCarat" id="selectCaratMax" name="" data-selected="false">
				<option value="2.00">2.00</option>
				<option value="2.25">2.25</option>
				<option value="2.50">2.50</option>
				<option value="2.75">2.75</option>
				<option value="3.00">3.00</option>
				<option value="3.25">3.25</option>
				<option value="3.50">3.50</option>
				<option value="3.75">3.75</option>
				<option value="4.00">4.00</option>
				<option value="4.25">4.25</option>
				<option value="4.50">4.50</option>
				<option value="4.75">4.75</option>
				<option value="5.00" selected>5.00</option>
			</select>
		</div><br>
	</div>
	<br>
	<div id="bague"></div>

</div>
<script src="js/bague.js"></script>
<style media="screen">
/*	.tri{
	float:right;
	}
	.bagues {
		border: 1px solid ;
		width: 25%;
		text-align: center;
		margin-right: 5px;
	}
	.bagues > img{
		height: 200px;
		width: 200px;
	}
	#triGauche{
float: left;
	}
*/	#err{
		color:red;
	}
.tri{
	float:right;
	padding-right: 200px;
}
#triGauche{
	float: left;
	padding-left:50px;
	padding-top:50px;
}
#triGauche:hover{
	border: 1px solid #b6a573; /* Green */
 border-radius: 12px;
}
#bague{
	padding-left:350px;
	padding-top:50px;
	height: 800px;
}
.bagues {
	display: inline-block;
	width: 21%;
	text-align: center;
	margin-right: 5px;

}
.bagues:hover{
	background-color:    #f9fafa   ;transform: scale(1.05);
}

.bagues > img{
	height: 200px;
	width: 200px;
}
#titre {
	padding-left: 100px;
	padding-top: 40px;
	 font-size: 3em;
	   font-weight: lighter;
		  text-shadow: 0 1px 0 ;
}

.Filter-title{
font-size: 22px;
}

.buttonFav{
	position: relative;
	top:-50px;
	width: 40px;
  height: 40px;
	float: right;
}

.buttonShop{
	position: relative;
	top:-50px;
	float: left;
	width: 40px;
	height: 40px;
}

	.checkalliage{
		font-size: 18px;
	background-color:  white	;
 color: black;
 border: 1px solid #b6a573; /* Green */
border-radius: 12px;
}

</style>
