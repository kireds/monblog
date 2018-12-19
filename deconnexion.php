<?php

   require_once "config/init.conf.php";
    require_once "config/bdd.conf.php";
    include_once "includes/connexion.inc.php";

  $is_connect = TRUE;
  
session_start();
 
// Détruit toutes les variables de session

// On détruit le cookies en mettant sa valeur à -1
 setcookie('sid' , time() + -1); 
 
// Finalement, on détruit la session.
session_destroy();
header("Location: index.php");
?>
