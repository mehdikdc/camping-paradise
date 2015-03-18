<?php
include 'config.php';

$_pages = array('home', 'annonces, 'annonce');

if($_GET['page']){
	if(in_array($_GET['page'], $_pages)){
		include 'controller/'.$_GET['page'].'.php';
	} else {
		include 'controller/error.php';
	}
} else {
	include 'controller/error.php';
}
