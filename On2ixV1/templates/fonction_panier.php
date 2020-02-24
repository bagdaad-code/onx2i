<?php

//C'est la propriété php_self qui nous l'indique : 
// Quand on vient de index : 
// [PHP_SELF] => /chatISIG/index.php 
// Quand on vient directement par le répertoire templates
// [PHP_SELF] => /chatISIG/templates/accueil.php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans  le cas où on appelle directement la page sans son contexte

	function createPanier(){

		try {
			
			$db = new PDO('mysql:host=127.0.0.1;dbname=on2ix', 'root' , '');
			$db->setArticle(PDO::ATTR_CASE, PDO::CASE_LOWER); // les noms de champs seront en caractéres minuscules
			$db->setArticle(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); //les erreurs lanceront des exceptions 

		} catch (Exception $e) {

			die("Une erreur est survenue");
		}

		// condition si un panier existe

		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']= array();
			$_SESSION['panier']['refProduit']= array();
			$_SESSION['panier']['qteProduit']= array();
			$_SESSION['panier']['prixProduit']= array();
			$_SESSION['panier']['verrou']= false;

		}
		return true;
	}


	// cette fonction comporte trois paramettre 
	function ajouterArticle($refProduit,$qteProduit,$prixProduit){

		// voir si le panier a été créer et s'il est verrouiller
		// voir s'il est verrouillé servira lors des coocies 
		if(createPanier() && !isVerrouille()){

			$position_Produit= array_search($refProduit, $_SESSION['panier']['refProduit']);
			
			// voir si le produit a été deja ajouter 
			if ($position_Produit !== false) {
			
				$_SESSION['panier']['refProduit'][$position_Produit] += $qteProduit;

			}else{

				array_push($_SESSION['panier']['refProduit'], $refProduit);
				array_push($_SESSION['panier']['qteProduit'], $qteProduit);
				array_push($_SESSION['panier']['prixProduit'], $prixProduit);

			}
		}
		else{
			
			echo "Erreur, veuillez contacter l'administrateur ";
		}
	}


	function ModifierQTeProduit($refProduit,$qteProduit){

		
		if(createPanier() && !isVerrouille()){

			// voir si la contitée est positive 
			if ($qteProduit > 0) {

				// rechercher la position du produit dans le panier

				$position_Produit = array_search($_SESSION['panier']['refProduit'],$refProduit);

				if($position_Produit !== false){

					$_SESSION['panier']['refProduit'][$position_Produit] = $qteProduit;
				}
				
			}else{

				supprimerProduit($refProduit);
			}

		}else{

			echo "veuillez contacter un administrateur";
		}
	}


	function supprimerArticle($refProduit){

		if (createPanier() && !isVerrouille()) {
			
			// tableau temporaire pour enregistrer notre panier avant de faire la suppression 

			$tmp = array();
			$tmp['refProduit'] = array();
			$tmp['qteProduit']= array();
			$tmp['prixProduit']= array();
			$tmp['verrou']= array();

			// boucle  
			for ($i = 0; $i < count($_SESSION['panier']['refProduit']) ; $i++) { 
				if($_SESSION['panier']['refProduit'][$i] !== $refProduit){

				array_push($_SESSION['panier']['refProduit'], $_SESSION['panier']['refProduit'][$i]);
				array_push($_SESSION['panier']['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
				array_push($_SESSION['panier']['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
				
				}
			}

			// le panier egale au panier temporaire 

			$_SESSION['panier'] = $tmp;

			unset($tmp);

		}else{

			echo "veuillez contacter un administrateur";
		}
	}


	function supprimerPanier(){

		// tester s'il existe 
		//if(isset($_SESSION['panier'])){

			unset($_SESSION['panier']);

		}
	


	function montantGlobal(){

		$total = 0;

		for ($i = 0; $i < count($_SESSION['panier']['refProduit']) ; $i++){

			$total += $_SESSION['panier']['qteProduit'][$i]*$_SESSION['panier']['prixProduit'];
		}

		return $total;
	}


	function isVerrouille(){

		if(isset($_SESSION['panier']) && $_SESSION['isVerrouille']){

			return true;

		}else{

			return false 
		}
	}


	function compterArticle(){

		if(isset($_SESSION['panier'])){

			return count($_SESSION['panier']['refProduit']);

		}else{
			return 0;
		}
	}
?>
