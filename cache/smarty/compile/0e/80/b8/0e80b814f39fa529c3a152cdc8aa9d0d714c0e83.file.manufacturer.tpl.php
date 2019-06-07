<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:32
         compiled from "/home/site/wwwroot/themes/community-theme-default/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6288553385cf55848827447-16332428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e80b814f39fa529c3a152cdc8aa9d0d714c0e83' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/manufacturer.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6288553385cf55848827447-16332428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55848854674_30902476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55848854674_30902476')) {function content_5cf55848854674_30902476($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <section>
    <h1 class="page-heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)) {?>
      <div class="rte"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</div>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>
      <div class="rte"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>
</div>
    <?php }?>
  </section>

  <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
    <section>
      <h2 class="page-heading">
        <?php echo smartyTranslate(array('s'=>'List of products by manufacturer'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true);?>

      </h2>

      <div class="content_sortPagiBar clearfix">
        <div class="form-inline sortPagiBar clearfix">
          <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="top-pagination-content form-inline clearfix">
          <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1), 0);?>

        </div>
      </div>

      <?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


      <div class="content_sortPagiBar">
        <div class="bottom-pagination-content form-inline clearfix">
          <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

        </div>
      </div>

    </section>
  <?php } else { ?>
    <div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</div>
  <?php }?>
<?php }?>
<?php }} ?>
