<?php
/* Smarty version 3.1.33, created on 2018-12-19 11:17:44
  from '/var/www/html/MonBlog/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a1ac8cd7915_92950913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054f5a52435e8231bf70d8396bcbaa67872ce396' => 
    array (
      0 => '/var/www/html/MonBlog/template/index.tpl',
      1 => 1545214411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a1ac8cd7915_92950913 (Smarty_Internal_Template $_smarty_tpl) {
?><body>


        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="mt-5">Blizzard's fan page</h1>
                    
                </div>
            </div>
            <div class="row">
               
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'i', false, 'value', 'tab_articles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <img class="card-img-top" src="img/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_articles']['jpg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_articles'];?>
"/>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['i']->value['titre'];?>
</h4>
                                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['i']->value['texte'];?>
</p>
                                        <a href="#" class="btn btn-primary">Créé le:<?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
 </a>
                                        <a href="article.php?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id_articles'];?>
" class="btn btn-warning">Modifier</a>
                                    </div>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>

            <div class="row">
                <nav aria-label="Page navigation" class="mx-auto mt-4">
                    <ul class="pagination">
                        
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <li class="page-item">
                                    <a class="page-link" href="?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                                </li>
                          <?php }
}
?>
                    </ul>
                </nav>
            </div>

        </div><?php }
}
