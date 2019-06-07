<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:36:29
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/footer_list_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8138271675cf6035d30c4b4-41408129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b195b3f3000ebbbc9a5b2b53ac645d3469edf44' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/footer_list_item.tpl',
      1 => 1559580863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8138271675cf6035d30c4b4-41408129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6035d319249_81786479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6035d319249_81786479')) {function content_5cf6035d319249_81786479($_smarty_tpl) {?><li>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

  </a>
  <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ('./footer_list_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

      <?php } ?>
    </ul>
  <?php }?>
</li>
<?php }} ?>
