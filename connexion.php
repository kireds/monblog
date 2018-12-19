<?php

    session_start();

    require_once "config/init.conf.php";
    require_once "config/bdd.conf.php";
    include_once "includes/connexion.inc.php";
    require_once('libs/Smarty.class.php');
    include_once "includes/fonctions.inc.php";

    $nom_page = "connexion";
    

    if($is_connect == TRUE) {
        $_SESSION['notifications']['message'] = "Vous êtes déjà connecté.";
        $_SESSION['notifications']['result'] = true;
        header("Location: index.php");
        exit();
    }

    if(isset($_POST['submit'])) {
        print_r2($_POST);
        print_r2($_FILES);

        //Requête d'insertion de l'utilisateur
        $select_utilisateur_count = "SELECT count(*) as total FROM utilisateur WHERE (email=:email AND mdp=:mdp)";
        /* @var $bdd PDO */

        //Préparation de la requête
        $sth = $bdd->prepare($select_utilisateur_count);

        //Sécuriser les paramètres
        $sth->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
        $sth->bindValue(":mdp", cryptPassword($_POST['mdp']), PDO::PARAM_STR);

        //Exécution de la requête
        $result = $sth->execute(); //on stocke dans $result le resultat de la requete, pour savoir si elle a fonctionné

        $nb_result = $sth->fetch(PDO::FETCH_ASSOC);

        echo "Nombre résultats: ".$nb_result['total']."<br/>";

        if($nb_result['total'] > 0) {
            $sid = sid($_POST['email']);
            //echo $sid."<br/>";
            $sql_update = "UPDATE utilisateur SET sid=:sid WHERE email=:email";
            $sth_update = $bdd->prepare($sql_update);
            $sth_update->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
            $sth_update->bindValue(":sid", $sid, PDO::PARAM_STR);

            $result_update = $sth_update->execute();
            //var_dump($result_update);

            //créer un cookie dans le navigateur
            //setcookie(nomCookie, valeurCookie, tempsConservation);
            setcookie("sid", $sid, time()+600);

            $notification = "Vous êtes maintenant connecté.";
            $succes_notification = true;
        }
        else {
            $notification = "Erreur d'authentification.";
            $succes_notification = false;
        }

        //Variables de session
        $_SESSION['notifications']['message'] = $notification;
        $_SESSION['notifications']['result'] = $succes_notification;

        echo $notification;

        //exit();

        $succes_notification == TRUE ? header("Location: index.php") : header("Location: connexion.php");

        //Redirection vers la page d'Accueil
        //header('Location: index.php');
        exit(); //arrêter l'exécution à cet endroit, le reste de la page ne sera pas traité

    }

    if(isset($_SESSION['notifications'])) {
        $color_notification = $_SESSION['notifications']['result'] == true ? "success" : "danger";
    }

    $smarty = new Smarty();
$smarty->setTemplateDir('template/');
$smarty->setcompileDir('template_c/');
$smarty->debugging = true;
include_once 'includes/head.inc.php';
include_once 'includes/menu.inc.php';

$smarty->display('connexion.tpl');
include "includes/notification.inc.php"; 
include 'includes/footer.inc.php' ;



?>
  