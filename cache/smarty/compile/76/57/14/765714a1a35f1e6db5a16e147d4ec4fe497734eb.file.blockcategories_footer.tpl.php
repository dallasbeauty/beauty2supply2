<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/blockcategories_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8953805cf558497f6789-39101960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765714a1a35f1e6db5a16e147d4ec4fe497734eb' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/blockcategories_footer.tpl',
      1 => 1559580863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8953805cf558497f6789-39101960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55849823261_35916437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55849823261_35916437')) {function content_5cf55849823261_35916437($_smarty_tpl) {?><section id="blockcategories-footer" class="blockcategories col-xs-12 col-sm-3">
  <h1 class="footer-title"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>
</h1>
  <ul class="list-unstyled">
    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ('./footer_list_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

    <?php } ?>
  </ul>
</section>
<?php }} ?>
