<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:02
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2629495235cf558de0f2d50-59764034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3fae454a803a0dda341e0de5e49177ca023d693' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook.tpl',
      1 => 1559582123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2629495235cf558de0f2d50-59764034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558de111400_86988187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558de111400_86988187')) {function content_5cf558de111400_86988187($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['htmlitems']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['hook']->value=='top') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='home') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='left') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='right') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['hook']->value=='footer') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./hook_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['htmlitems']->value), 0);?>

  <?php }?>
<?php }?>
<?php }} ?>
