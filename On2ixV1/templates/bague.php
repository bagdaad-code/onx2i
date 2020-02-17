<?php
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=annonce");
	die("");
}
?>
<h2 id=titre >azert</h2>
<p id="err">Aucune bague disponible avec ces critères </p>
<div class="tri">
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
		Choisissez l'alliage<br>
		<button class="checkalliage" id="or blanc" type="submit">Or blanc</button><br>
		<button class="checkalliage" id="or rose"  type="submit">Or rose</button> <br>
		<button class="checkalliage" id="or jaune" type="submit">Or jaune</button><br>
		<button class="checkalliage" id="platine"  type="submit">Platine</button> <br>
		<button class="checkalliage" id="raz"  type="submit">Remise a zéro</button> <br>
	</div>
	<br>
	<div class="genre">
  	Choisissez un genre <br>
		<input class="checkgenre" type="checkbox" id="F" name="">
		<label for="F">Femme</label><br>
		<input class="checkgenre" type="checkbox" id="M" name="">
		<label for="M">Homme</label><br>
		<input class="checkgenre" type="checkbox" id="U" name="">
		<label for="U">Unisex</label><br>
	</div>
	<br>
	<div class="prix">
		Choisissez le prix <br>
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
	<br>
	<div class="carat">
		 Choisissez le poids en carat  <br>
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
	</div>
</div>
</div>
<br>
<div id="bague"></div>
<script src="js/bague.js"></script>
<style media="screen">
	.tri{
	float:right;
	}
	#bague{
		display: flex;
	}
	.bagues {
		border: 1px solid ;
		width: 25%;
		text-align: center;
		margin-right: 5px;
	}
	img{
		height: 200px;
		width: 200px;
	}
	#triGauche{
float: left;
	}
	#err{
		color:red;
	}
</style>
