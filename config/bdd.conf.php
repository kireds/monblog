<?php

	try
	{
		$bdd = new PDO ('mysql:host=localhost;dbname=Blog;charset=utf8','root','123456');
		$bdd->exec("set names utf8");
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}
	catch(Exception $e)
	{
		die ('Erreur : '. $e->getMessage());
	}

?>
