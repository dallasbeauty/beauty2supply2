<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:53
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15633367475cf5585d57ca68-17165851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db980acee5d36d6ade42bbedcda938dae4f677b5' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1559582121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15633367475cf5585d57ca68-17165851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5585d58db86_00917231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5585d58db86_00917231')) {function content_5cf5585d58db86_00917231($_smarty_tpl) {?><li class="mailalerts">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    <i class="icon icon-envelope"></i>
    <span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
  </a>
</li>
<?php }} ?>
