<?php

session_start();

	include_once "libs/maLibUtils.php";
	include_once "libs/maLibSQL.pdo.php";
	include_once "libs/maLibSecurisation.php";
	include_once "libs/modele.php";

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: *");
	header("Access-Control-Allow-Headers: *");
	$addArgs = "";

	if ($action = valider("action"))
	{
		ob_start ();
		echo "Action = '$action' <br />";
		// ATTENTION : le codage des caractères peut poser PB si on utilise des actions comportant des accents...
		// A EVITER si on ne maitrise pas ce type de problématiques

		/* TODO: A REVOIR !!
		// Dans tous les cas, il faut etre logue...
		// Sauf si on veut se connecter (action == Connexion)

		if ($action != "Connexion")
			securiser("login");
		*/

		// Un paramètre action a été soumis, on fait le boulot...
		switch($action)
		{
			//Mail pour le sur mesure/////////////////////////////////
			case 'Mail sur mesure' :
				// Le message

				$style = $_POST["selStyle"];
				$alliage = $_POST["selAlliage"];
				$purete = $_POST["selPurete"];
				$pierre = $_POST["selPierre"];
				$taille = $_POST["selTaille"];
				$mail = $_POST["mailEnvoyeur"];
				$message = "Commande de $mail\r\nStyle de la bague : $style\r\n Alliage : $alliage\r\n Pureté : $purete\r\n Pierre : $pierre\r\n Taille : $taille";

				// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
				$message = wordwrap($message, 70, "\r\n");

				// Envoi du mail
				mail('super-marsien@hotmail.fr', 'Commande sur mesure ', $message);
				//une fois le mail envoyé on est redirigé vers la vue index.php
			break;

			// Connexion //////////////////////////////////////////////////
			case 'Connexion' :
				// On verifie la presence des champs login et passe
				if ($login = valider("login"))
				if ($passe = valider("passe"))
				{
					// On verifie l'utilisateur,
					// et on crée des variables de session si tout est OK
					// Cf. maLibSecurisation
					if (verifUser($login,$passe)) {
						// tout s'est bien passé, doit-on se souvenir de la personne ?
						if (valider("remember")) {
							setcookie("login",$login , time()+60*60*24*30);
							setcookie("passe",$password, time()+60*60*24*30);
							setcookie("remember",true, time()+60*60*24*30);
						} else {
							setcookie("login","", time()-3600);
							setcookie("passe","", time()-3600);
							setcookie("remember",false, time()-3600);
						}

					}
				}

				// On redirigera vers la page index automatiquement
			break;

			case 'Logout' :
				session_destroy();
			break;




		}

	}

	// On redirige toujours vers la page index, mais on ne connait pas le répertoire de base
	// On l'extrait donc du chemin du script courant : $_SERVER["PHP_SELF"]
	// Par exemple, si $_SERVER["PHP_SELF"] vaut /chat/data.php, dirname($_SERVER["PHP_SELF"]) contient /chat

	$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
	// On redirige vers la page index avec les bons arguments

	header("Location:" . $urlBase . $addArgs);

	// On écrit seulement après cette entête
	ob_end_flush();

?>
