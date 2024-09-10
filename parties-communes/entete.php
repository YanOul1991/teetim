<?php
	// Determiner le choix de langue de l'utilisateur

	// Test :cookie jar
	// print_r($_COOKIE);

	// Creer un tableau des langues disponibles
	$languesDispo = [];
	// Remplir le tableau avec les codes obtenus des noms des fichiers JSON 
	// presents dans le dossier i18n
	$contenui18n = scandir("i18n");

	for ($i=0; $i < count($contenui18n); $i++) { 
		$fichier = $contenui18n[$i];

		// Si le fichier n'est pas "." ou ".."
		if ($fichier != '.' && $fichier != '..') {

			$languesDispo[] = substr($fichier, 0, 2);
		}
	}

	// 1. Langue par default
	$langue = "fr";

	// 2. Langue memorise dans un temoin HTTP
	// Si le cookie "choixLangue" a une valeur
	if (isset($_COOKIE["choixLangue"])) {
		// Assigne la valeur de ce cookie a la variable langue
		// Sinon "fr" est la valeur de langue par defaut
		$langue = $_COOKIE["choixLangue"];
	}

	// 3. Lanugue specifiee dans l'URL (utilisateur a clique un bouton de choix de langue)
	if (isset($_GET["lan"])) {
		$langue = $_GET["lan"];

		// Memorise le choix de langue
		// Donc :stocker la valeur du code de langue dans un temoin HTTP
		setcookie("choixLangue", $langue, time() + 60*60*24*30);
	}

	// A) Lire le fichier JSON contenant les textes
	// Etape 1 :"lire" le fichier "i18n/lan.json"
	// et placer son contenu a une variable PHP
	$textesJSON = file_get_contents("i18n/".$langue.".json");

	// Etape 2 : Converir le contenu JSON du fichier en variable PHP
	// pour remettre les textes dans la page web aux bons endroits
	$textes = json_decode($textesJSON);

	// Raccourcis pour les parties communes
	$_ent = $textes->entete;
	$_pp = $textes->pp;

	// Raccourci pour les pages specefiques
	$_ = $textes->$page;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;900&family=Noto+Serif:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>teeTIM // fibre naturelle ... conception artificielle</title>
	<meta name="description" content="Page d'accueil du concepteur de vêtements 100% fait au Québec, conçus par les étudiants du TIM à l'aide de designs produits par intelligence artificielle, et fabriqués avec des fibres 100% naturelles et biologiques.">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
	<div class="conteneur">
		<header>
			<nav class="barre-haut">
				<!-- 
					Generer un bouton (lien HTML) pour chaque code de langue 
					dans le tableau $langueDispo 
				-->
				<a 
					
					class="<?php if($langue == "fr") {echo "actif";}?>" 
					href="?lan=fr"
				>
					fr

				</a>
			</nav>
			<nav class="barre-logo">
				<label for="cc-btn-responsive" class="material-icons burger">menu</label>
				<a class="logo" href="index.php"><img src="images/logo.png" alt="<?php echo $_ent->altLogo;?>"></a>
				<a class="material-icons panier" href="panier.php">shopping_cart</a>
				<input class="recherche" type="search" name="motscles" placeholder="<?php echo $_ent->placeholderRecherche;?>">
			</nav>
			<input type="checkbox" id="cc-btn-responsive">
			<nav class="principale">
				<label for="cc-btn-responsive" class="menu-controle material-icons">close</label>
				<a href="teeshirts.php" class="<?php if ($page =="teeshirts") {echo("actif");}?> "><?= $_ent->menuTeeshirts;?></a>
				<a href="casquettes.php"><?=$_ent->menuCasquettes?></a>
				<a href="hoodies.php"><?=$_ent->menuHoodies?></a>
				<span class="separateur"></span>
				<a href="aide.php"><?=$_ent->menuAide?></a>
				<a href="apropos.php"><?=$_ent->menuNous?></a>
			</nav>
		</header>