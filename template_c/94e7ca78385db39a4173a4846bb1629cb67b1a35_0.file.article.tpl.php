<?php
/* Smarty version 3.1.33, created on 2018-12-19 13:21:57
  from '/var/www/html/MonBlog/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a37e5bb3e32_54297619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94e7ca78385db39a4173a4846bb1629cb67b1a35' => 
    array (
      0 => '/var/www/html/MonBlog/template/article.tpl',
      1 => 1545222114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a37e5bb3e32_54297619 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"><?php echo $_smarty_tpl->tpl_vars['Action']->value;?>
 un article</h1>
            
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <form action="article.php" method="post" enctype="multipart/form-data" id="form_article">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_articles']->value;?>
" name="id"/>
                <div class="form-group">
                    <label for"titre" class="col-from-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de votre article" value="<?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
" required/>
                </div>
                <div class="form-group">
                    <label for"texte">Texte</label>
                    <textarea class="form-control" id="texte" name="texte" rows="3" required> <?php echo $_smarty_tpl->tpl_vars['texte']->value;?>
</textarea>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" id="image" name="image" class="custom-file-input">
                        <label class="custom-file-label" for="image">Choisir un fichier</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label for="publie" class="form-check-label">
                            <input class="form-check-input" name="publie" id="publie" type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['publie']->value) {
echo $_smarty_tpl->tpl_vars['checked']->value;
}?> >Publier ?
                        </label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['Action']->value;?>
 l'article</button>
            </form>
        </div>
    </div>
</div>
<?php }
}
