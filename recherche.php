
<?php

    session_start();

    require_once "config/init.conf.php";
    require_once "config/bdd.conf.php";
    include_once "includes/connexion.inc.php";
    include_once "includes/head.inc.php";

    $nom_page = "recherchearticles";

    include "includes/menu.inc.php";
    include_once "includes/fonctions.inc.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"> rechercher un article</h1>
            <?php
             if(isset($_POST['submit'])) {
            //Affichage des articles par page (pagination)
               $page_courante = empty($_GET['p']) ? 1 : $_GET['p'];

                $index = getIndex($page_courante, _NB_ART_PAR_PAGE);

                $nb_articles = nbTotalArticlesPublierecherche($_GET['recherche'] , $bdd);
                $nb_pages = ceil($nb_articles / _NB_ART_PAR_PAGE); //ceil() arrondit au nombre entier supérieur


                //Requête de sélection des articles
                $rechercher = "SELECT id_articles, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date FROM articles WHERE (titre LIKE :recherche OR texte LIKE :recherche) LIMIT :index, :nb_article_par_page";
                /* @var $bdd PDO */

                //Préparation de la requête
                $sth = $bdd->prepare($rechercher);

                //Sécuriser les paramètres, qui a comme valeur 1, et doit être un booléen
                $sth->bindValue(":publie", 1, PDO::PARAM_BOOL);
                $sth->bindValue(":nb_article_par_page", _NB_ART_PAR_PAGE, PDO::PARAM_INT);
                $sth->bindValue(":index", $index, PDO::PARAM_INT);
                $sth->bindValue(":recherche" , '%' . $_GET['recherche'] . '%', PDO::PARAM_STR);

                //Exécution de la requête
                $sth->execute();

                //Association des enregistrements
                $tab_articles = $sth->fetchAll(PDO::FETCH_ASSOC); //fetAll récupère toutes les entrées de la BDD d'un coup
                //print_r2($tab_articles);
                //Affichage du titre du 2ème articles
                //echo $tab_articles[0]['titre'];
                $nb_result = nbTotalArticlesPublieRecherche($bdd, "%" . $_GET['recherche'] . "%");



?>
</div>


<div class="row">
                <?php
                 if($nb_result > 0)
                {
                    foreach ($tab_articles as $key => $value) {
                        ?>
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <img class="card-img-top" src="img/<?php echo $value['id_articles']; ?>.jpg" alt="<?php echo $value['id_articles']; ?>"/>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $value['titre']; ?></h4>
                                        <p class="card-text"><?php echo $value['texte']; ?></p>
                                        <a href="#" class="btn btn-primary">Créé le: <?php echo $value['date']; ?></a>
                                        <a href="article.php?action=modifier&id=<?php echo $value['id_articles']; ?>" class="btn btn-warning">Modifier</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                else {
                ?>
                <div class="col-md-6">
                    Aucun resultat ne correspond à votre recherche
            </div>
            <?php
        }
        ?>
    
    </div>
    <div class="row">
        <nav arial-label="page navigation" class = "mx_auto mt-4">
            <ul class ="pagination">
                <?php
                    for ($i = 1 ; $i <= $nb_pages ; $i++)
                    {
                ?>
                
                    <a class="page-link" href = "?p=<?= $i ?> &recherche=<?=$_GET['recherche'] ?>"><= $i ;?></a>
                
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</div>

<?php include 'includes/footer.inc.php' ;
}
else{    

?>

<div class="container">
    <div class="row">
        <h1 class = "mt-5"> Rechercher un articles </h1>
    </div>
</div>

<div class = "row">
    <div class ="col-lg-12 text-center">
        <form action = "recherche.php" method = "get" enctype="multipart/from-data" id="form_recherche">
            <div class "form-group">
                <label for="recherche" class="col-form-label"> Recherche : </label>
                <input type="text" class="form-control" id="recherche" name="recherche" placeholder="" value="" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value = "rechercher"> Rechercher l'article </button>
        </form>
    </div>
</div>
</div>
<?php

}
 ?>