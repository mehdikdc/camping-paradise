<?php

// Home
include '../config.php';


	if (!isset($_GET['id'])) {
		require_once('views/error.php');
	} else {
		

	$annonce = $annonces[$_GET['id']];
	require_once('views/annonce.php');

	}
?>