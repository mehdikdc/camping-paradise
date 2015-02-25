<?php

	if {
		(!isset($_GET['id']))
		return call('pages', 'error');
	}

	$annonce = Annonces::find($_GET['id']);
	require_once('views/show.php');


?>