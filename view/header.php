<?php
$aPage = array(
	'home'=> array(
		'Title' => 'Titre de la page',
		'Description' => 'Description de la page',
		'Keywords' => 'mots clés',
	),
	'portfolio'=> array(
		'Title' => 'Titre de la page',
		'Description' => 'Description de la page',
		'Keywords' => 'mots clés',
	),
	'contact'=> array(
		'Title' => 'Titre de la page',
		'Description' => 'Description de la page',
		'Keywords' => 'mots clés',
	),
);

?>
<html>
	<head>
		<title><?php echo $aPage[$page]['Title']; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="header">
			<h1>HEADER DE LA PAGE</h1>
		</div>
		<nav>
			<ul>
				<li><a href="index.php" >Accueil - </a></li>
				<li><a href="" >- Déposez les annonces - </a></li>
				<li><a href="" >- Voir les offres</a></li>
			</ul>
		</nav>


