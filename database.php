<?php

try {
	$host='mysql:host=localhost;dbname=klubb;charset=utf8';
	$login='root';
	$mdp='';
	$erreur=array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
	$bdd=new PDO($host,$login,$mdp,$erreur);
	
} catch (Exception $e) {
	die('erreur '.$e->getMessage());
}

?>