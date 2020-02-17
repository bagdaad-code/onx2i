<?php
include_once("libs/maLibUtils.php");
include_once("libs/modele.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

$data = array("version"=>1.1);
// Notes de version 1.1
// envoi de l'id de l'utilisateur lorsqu'il se connecte
// route GET /users
// détection des catégories inexistantes dans les routes correspondantes
// détection des images inexistantes dans les routes correspondantes
// interdiction de l'ajout d'image dans une catégorie coup de coeur
// interdiction de changement de nom de la catégorie coup de coeur
// interdiction de suppression de la catégorie coupdecoeur
// suppression de la route GET_categories_images

// Routes : /api/...

$method = $_SERVER["REQUEST_METHOD"];
debug("method",$method);

if ($method == "OPTIONS") die("ok - OPTIONS");

$data["success"] = false;
$data["status"] = 400;



if (valider("request")) {
	$requestParts = explode('/',$_REQUEST["request"]);

	debug("rewrite-request" ,$_REQUEST["request"] );
	debug("#parts", count($requestParts) );

	$entite1 = false;
	$idEntite1 = false;
	$entite2 = false;
	$idEntite2 = false;

	if (count($requestParts) >0) {
		$entite1 = $requestParts[0];
		debug("entite1",$entite1);
	}

	if (count($requestParts) >1) {
		if (is_id($requestParts[1])) {
			$idEntite1 = intval($requestParts[1]);
			debug("idEntite1",$idEntite1);
		} else {
			// erreur !
			$method = "error";
			$data["status"] = 400;
		}
	}

	if (count($requestParts) >2) {
		$entite2 = $requestParts[2];
		debug("entite2",$entite2);
	}

	if (count($requestParts) >3) {
		if (is_id($requestParts[3])) {
			$idEntite2 = intval($requestParts[3]);
			debug("idEntite2",$idEntite2);
		} else {
			// erreur !
			$method = "error";
			$data["status"] = 400;
		}

	}

// TODO: en cas d'erreur : changer $method pour préparer un case 'erreur'

	$action = $method;
	if ($entite1) $action .= "_$entite1";
	if ($entite2) $action .= "_$entite2";

	debug("action", $action);

		// On connaît $connectedId
		switch ($action) {

			case 'GET_bijoux' :
					// GET /api/bijoux/
					$data["bijoux"] = listerBagues();
					$data["success"] = true;
					$data["status"] = 200;
			break;
			case 'GET_select' :
				// GET /api/bijoux/tri?titre=...
					if (($tri = valider("tri")) !== false) {
						if ($tri==="POP") {
							$data["bijoux"] = triPopularite();
							$data["success"] = true;
							$data["status"] = 201;
						}
						if ($tri==="PASC") {
							$data["bijoux"] = triPrixASC();
							$data["success"] = true;
							$data["status"] = 201;
						}
						if ($tri==="PDESC") {
							$data["bijoux"] = triPrixDESC();
							$data["success"] = true;
							$data["status"] = 201;
						}
						if ($tri==="CASC") {
							$data["bijoux"] = triCaratASC();
							$data["success"] = true;
							$data["status"] = 201;
						}
						if ($tri==="CDESC") {
							$data["bijoux"] = triCaratDESC();
							$data["success"] = true;
							$data["status"] = 201;
						}
						}
						break;
			case 'GET_button' :
				// GET /api/button?tri=...
					if (($tri = valider("tri")) !== false) {
							$data["bijoux"] = triCheckbox($tri);
							$data["success"] = true;
							$data["status"] = 201;
						}
						break;

/*
				case 'POST_users_categories' :
				// POST /api/users/<id>/categories?titre=...
				if ($idEntite1)
				if (($titre = valider("titre")) !== false) {
				if ($connectedId != $idEntite1) {
					$data["status"] = 403;
				} else {
					$id = mkCategorie($idEntite1, $titre);
					$data["categorie"] = getCategorie($id);
					$data["success"] = true;
					$data["status"] = 201;
				}
				}
				break;
			case 'GET_users_categories' :
				if ($idEntite1)
				if ($idEntite2) {
					// GET /api/users/<id>/categories/<id>
					$data["categorie"] = getCategorie($idEntite2, $idEntite1);
					$data["success"] = true;
					$data["status"] = 200;
				} else {
					// GET /api/users/<id>/categories
					$data["categories"] = getCategoriesUser($idEntite1);
					$data["success"] = true;
					$data["status"] = 200;
				}
			break;

			case 'GET_categories' :
				if ($idEntite1){
					// GET /api/categories/<id>
					// TODO : vérifier user ?
					$data["categorie"] = getCategorie($idEntite1);
					$data["success"] = true;
					$data["status"] = 200;
				} else {
					// GET /api/categories
					// Les categories de tous
					$data["categories"] = getCategories($connectedId);
					$data["success"] = true;
					$data["status"] = 200;
				}
			break;
*/}
}
switch($data["status"]) {
	case 200: header("HTTP/1.0 200 OK");	break;
	case 201: header("HTTP/1.0 201 Created");	break;
	case 202: header("HTTP/1.0 202 Accepted");	break;
	case 204: header("HTTP/1.0 204 No Content");	break;
	case 400: header("HTTP/1.0 400 Bad Request");	break;
	case 401: header("HTTP/1.0 401 Unauthorized");	break;
	case 403: header("HTTP/1.0 403 Forbidden");	break;
	case 404: header("HTTP/1.0 404 Not Found");		break;
	default: header("HTTP/1.0 200 OK");

}

echo json_encode($data);

?>
