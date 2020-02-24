
<?php
//C'est la propriété php_self qui nous l'indique : 
// Quand on vient de index : 
// [PHP_SELF] => /chatISIG/index.php 
// Quand on vient directement par le répertoire templates
// [PHP_SELF] => /chatISIG/templates/accueil.php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte

// Bouton ajouter panier 
/*<a href="panier.php?action=ajout&amp;1=<?php echo $s->title; ?>&amp;q=1&amp;p=<?php echo $s->price; ?>"> ajouter panier</a>*/


require_once('include/header.php');
require_once('include/fonction_panier.php');

$erreur = false;

$action = (isset($_POST['action'])?$_POST['action']:(isset($_GET['action'])?$_GET['action']:null));

if($action !== null){

	if(!in_array($action, array('ajout','suppression','refresh')))

		$erreur = true;

		$r = (isset($_POST['r'])?$_POST['r']:(isset($_GET['r'])?$_GET['r']:null));
		$q = (isset($_POST['q'])?$_POST['q']:(isset($_GET['q'])?$_GET['q']:null));
		$p = (isset($_POST['p'])?$_POST['p']:(isset($_GET['p'])?$_GET['p']:null));

		$r = preg_replace('#\v#', '', $r);

		$p = floatval($p);

		if(is_array($q)){

			$qteProduit = array();

			$r = 0;

			foreach ($q as $contenu) {
				
				$qteProduit[$i++] = intval($contenu);
			}

		}else{

			$q = intval($q);
		}


	
}

if (!$erreur) {
	
	switch ($action) {

		Case "ajout":
			
			ajouterArticle($r,$q,$p);

			break;

		Case "suppression":

			supprimerArticle($r):

			break;

		Case "refresh":

			for ($i=0; $i <count($qteProduit) ; $i++) { 
			
				ModifierQTeProduit($_SESSION['panier']['refProduit'][$i], round($qteProduit));
			}

			break;

		Default:
			
			break;
	}
}

?>

<form method ="post" action ="">
	<table width="400">
		<tr>
			<td colspan="4"> Votre panier </td>
		</tr>
		<tr>
			<td> Référence Produit </td>
			<td> Prix unitaire </td>
			<td> Quantité </td>
			<td> Action </td>
		</tr>

		<?php

			if (isset($_GET['deletepanier']) && $_GET['deletepanier'] == true ) {
				
				SupprimerPanier();
			}

			if (creationPanier()) {
				
			

			$nbProduit = count($_SESSION['panier']['refProduit']);

			if($nbProduit <= 0){

				echo '<br/><p style="font-size:22px; color:Red;">Panier Vide !';

			}else{

				for ($i=0; $i <$nbProduit ; $i++) { 
					
						?>

						<tr>

							<td></br><?php echo $_SESSION['panier']['refProduit'][$i]; ?></td>

							<td></br><input name="q[]" value="<?php echo $_SESSION['panier']['qteProduixt'][$i];?>"
							size = "5" /></td>
							<td></br><?php echo $_SESSION['panier']['prixProduit'][$i];
							?></td>
							<td></br><a href="panier.php?action=suppression&amp;1=<?php echo rawurldecode($_SESSION['panier']['refProduit'][$i]); ?>">X</a></td>

							

						</tr>

						<?php 
					}
						?>

						<tr>
							
							<td colspan="2"><br/>
								<p> Total : <?php echo MontantGlobal(). " euros"; ?></p><br/>
						</tr>

						<tr>
							
							<td colspan="4"><br/>
								<input type="submit" name="rafraichir"/>
								<input type="hidden" name="action" value="refresh"/>
								<a href="?deletepanier=true">Supprimer panier</a>

								
							</td>

						</tr>


						<?php
				}

			

		}

		?>	
	</table>
	

</form>

<?php

	require_once('includes/footer.php');
	
?>


 



 
