<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:30
         compiled from "/home/site/wwwroot/themes/community-theme-default/best-sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10543765325cf55846060827-06513970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e43aaa8f6590a60c230caa22a5d3de49029faf1' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/best-sales.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10543765325cf55846060827-06513970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558460b3c99_76978380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558460b3c99_76978380')) {function content_5cf558460b3c99_76978380($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Top sellers'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading product-listing"><?php echo smartyTranslate(array('s'=>'Top sellers'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
  <div class="content_sortPagiBar">
    <div class="form-inline sortPagiBar clearfix">
      <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="top-pagination-content form-inline clearfix">
      <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>

  <?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


  <div class="content_sortPagiBar">
    <div class="bottom-pagination-content form-inline clearfix">
      <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

    </div>
  </div>
<?php } else { ?>
  <div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No top sellers for the moment.'),$_smarty_tpl);?>
</div>
<?php }?>
<?php }} ?>
