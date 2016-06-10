<?php
 function connex($parametri)
	{
	try
		{
		include($parametri.".inc.php");
		$pdo = new PDO('mysql:host='.MYHOST.';dbname='.BASE, MYUSER, MYPASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		"<h3>Connexion r&eacute;ussie : base " . BASE . "</h3><br />";
		return $pdo;
		}
	catch(Exception $e)
		{
		die("<h3>Connexion impossible à la base " . BASE . "</h3><br />Erreur : " . $e->getMessage());
		}
	}
?>