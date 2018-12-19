<?php
/* Smarty version 3.1.33, created on 2018-12-19 10:36:57
  from '/var/www/html/MonBlog/template/connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a11395ba524_08005019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7484d98bb918d61337da64c65897435cdabc3bd0' => 
    array (
      0 => '/var/www/html/MonBlog/template/connexion.tpl',
      1 => 1545211947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a11395ba524_08005019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Se connecter</h1>
          
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article">
                <div class="form-group">
                    <label for"login" class="col-from-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" value="" required/>
                </div>
                <div class="form-group">
                    <label for"mdp" class="col-from-label">Mot de passe:</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" value="" required/>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="connecter">Se connecter</button>
            </form>
        </div>
    </div>
</div>
<?php }
}
