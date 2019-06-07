<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:31
         compiled from "/home/site/wwwroot/themes/community-theme-default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20745316585cf55847ecfde8-47495825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cac05c8a29d9d011d4e845e3b779bbcc0093cdb' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/index.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20745316585cf55847ecfde8-47495825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55847ee4ee4_57941613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55847ee4ee4_57941613')) {function content_5cf55847ee4ee4_57941613($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
  <ul id="home-page-tabs" class="nav nav-tabs">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

  </ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
  <div class="tab-content">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

  </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
  <div class="row">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

  </div>
<?php }?>
<?php }} ?>
