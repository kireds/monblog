<?php

session_start();
require_once "config/init.conf.php";
require_once "config/bdd.conf.php";
include_once "includes/connexion.inc.php";
include_once "includes/fonctions.inc.php";

require_once('libs/Smarty.class.php');

$prenom = 'Romain';
$smarty = new Smarty();
$smarty->setTemplateDir('template/');
$smarty->setcompileDir('template_c/');
$smarty->assign('name', $prenom);
$smarty->debugging = true;
include_once 'includes/head.inc.php';
include_once 'includes/menu.inc.php';

$smarty->display('smarty-test.tpl');
include_once 'includes/footer.inc.php';