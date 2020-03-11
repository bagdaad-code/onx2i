<?php
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=admin");
	die("");
}
?>

<style>
.form-group>input[type="text"]{
				margin-left:1%;
				width:80%;
}

</style>
<form  action="controleur.php" method="POST">
<!-- ******************************************** Ajout d'un bijoux **********************************************************************************-->
<div id="Ajouter">
<h2>Ajouter un bijoux</h2>

<!--Titre du bijoux-->
 <div class="form-group" >
<label for="aTitre">Titre:</label>
<br/>
<input type="text" name="aTitre" id="aTitre" required>
 </div>

<!--Popularité-->
<div class="form-group">
<label for="aPopularite">Popularité:</label>
<br/>
<input type="text" name="aPopularite" id="aPopularite" required>
</div>
<!--Prix-->
<div class="form-group">
<label for="aPrix">Prix:</label>
<br/>
<input type="text" name="aPrix" id="aPrix" required>
</div>
<!--Poids-->
<div class="form-group">
<label for="aPoids">Poids:</label>
<br/>
<input type="text" name="aPoids" id="aPoids" required>
</div>
<!--Alliage-->
<div class="form-group">
<label for="aAlliage">Alliage:</label>
<br/>
<input type="text" name="aAlliage" id="aAlliage" required>
</div>
<!--Pierre-->
<div class="form-group">
<label for="aPierre">Pierre:</label>
<br/>
<input type="text" name="aPierre" id="aPierre" required>
</div>
<!--Genre-->
<div class="form-group">
<label for="aGenre">Genre:</label>
<br/>
<input type="text" name="aGenre" id="aGenre" required>
</div>
<!--Taille-->
<div class="form-group">
<label for="aTaille">Taille:</label>
<br/>
<input type="text" name="aTaille" id="aTaille" required>
</div>
<!--Source de l'image-->
<div class="form-group">
<label for="aImage">Source de l'image:</label>
<br/>
<input type="file" name="aImage" id="aImage" required>
</div>
<!--Pureté-->
<div class="form-group">
<label for="aPurete">Pureté:</label>
<br/>
<input type="text" name="aPurete" id="aPurete" required>
</div>

</div>

<!-- ******************************************** Suppression d'un bijoux **********************************************************************************-->
<div id="Supprimer">
<h2>Supprimer un bijoux</h2>
</div>


<!-- ******************************************** Modification d'un bijoux **********************************************************************************-->
<div id="Modifier">
<h2>Modifier un bijoux</h2>
</div>

</form>
