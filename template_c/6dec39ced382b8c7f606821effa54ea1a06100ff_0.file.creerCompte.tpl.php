<?php
/* Smarty version 3.1.33, created on 2018-12-19 10:25:37
  from '/var/www/html/MonBlog/template/creerCompte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a0e9177b213_91682797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dec39ced382b8c7f606821effa54ea1a06100ff' => 
    array (
      0 => '/var/www/html/MonBlog/template/creerCompte.tpl',
      1 => 1545211412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a0e9177b213_91682797 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Créer un compte</h1>
            <?php echo '<?php ';?>include "includes/notification.inc.php"; <?php echo '?>';?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <form action="creerCompte.php" method="post" enctype="multipart/form-data" id="form_article">
                <div class="form-group">
                    <label for"nom" class="col-from-label">Nom:</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="" value="" required/>
                </div>
                <div class="form-group">
                    <label for"prenom" class="col-from-label">Prénom:</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="" value="" required/>
                </div>
                <div class="form-group">
                    <label for"email" class="col-from-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" value="" required/>
                </div>
                <div class="form-group">
                    <label for"mdp" class="col-from-label">Mot de passe:</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="" value="" required/>
                </div>
                <div class="form-group">
                    <label for"sid" class="col-from-label">SID:</label>
                    <input type="text" class="form-control" id="sid" name="sid" placeholder="" value="" readonly/>
                </div>

                <button type="submit" class="btn btn-primary" name="submit" value="creerCompte">Valider l'inscription</button>
            </form>
        </div>
    </div>
</div><?php }
}
