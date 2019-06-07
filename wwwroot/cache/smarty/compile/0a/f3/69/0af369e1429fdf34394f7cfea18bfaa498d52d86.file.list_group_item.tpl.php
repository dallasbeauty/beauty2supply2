<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/list_group_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12972528135cf55849a9a032-12666519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af369e1429fdf34394f7cfea18bfaa498d52d86' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/list_group_item.tpl',
      1 => 1559580863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12972528135cf55849a9a032-12666519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_item' => 0,
    'currentCategoryId' => 0,
    'level' => 0,
    'list_item_id' => 0,
    'list_item_child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55849ac8894_28586227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55849ac8894_28586227')) {function content_5cf55849ac8894_28586227($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['list_item']->value['children'])) {?>
  <?php $_smarty_tpl->tpl_vars['list_item_id'] = new Smarty_variable(('ct-').($_smarty_tpl->tpl_vars['list_item']->value['id']), null, 0);?>
  <div class="list-group-item-wrapper<?php if ((isset($_smarty_tpl->tpl_vars['currentCategoryId']->value)&&$_smarty_tpl->tpl_vars['list_item']->value['id']==$_smarty_tpl->tpl_vars['currentCategoryId']->value)||(!empty($_smarty_tpl->tpl_vars['list_item']->value['expanded'])&&$_smarty_tpl->tpl_vars['list_item']->value['expanded'])) {?> active<?php }?>">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" class="list-group-item ilvl-<?php echo intval($_smarty_tpl->tpl_vars['level']->value);?>
<?php if (isset($_smarty_tpl->tpl_vars['currentCategoryId']->value)&&$_smarty_tpl->tpl_vars['list_item']->value['id']==$_smarty_tpl->tpl_vars['currentCategoryId']->value) {?> current<?php }?>">
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
    </a>
    <a class="btn-toggle<?php if (empty($_smarty_tpl->tpl_vars['list_item']->value['expanded'])) {?> collapsed<?php }?> ilvl-<?php echo intval($_smarty_tpl->tpl_vars['level']->value);?>
" href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_item_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-toggle="collapse" title="<?php echo smartyTranslate(array('s'=>'Expand/Collapse','mod'=>'blockcategories'),$_smarty_tpl);?>
">
      <i class="icon icon-angle-up"></i>
    </a>
  </div>
  <div <?php if (empty($_smarty_tpl->tpl_vars['list_item']->value['expanded'])) {?> class="list-group collapse" style="height: 0px;"<?php } else { ?> class="list-group collapse in" style="height: auto;"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_item_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php  $_smarty_tpl->tpl_vars['list_item_child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_item_child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_item_child']->key => $_smarty_tpl->tpl_vars['list_item_child']->value) {
$_smarty_tpl->tpl_vars['list_item_child']->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("./list_group_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list_item'=>$_smarty_tpl->tpl_vars['list_item_child']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0);?>

    <?php } ?>
  </div>
<?php } else { ?>
  <a class="list-group-item ilvl-<?php echo intval($_smarty_tpl->tpl_vars['level']->value);?>
<?php if (isset($_smarty_tpl->tpl_vars['currentCategoryId']->value)&&$_smarty_tpl->tpl_vars['list_item']->value['id']==$_smarty_tpl->tpl_vars['currentCategoryId']->value) {?> active current<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
  </a>
<?php }?>
<?php }} ?>
