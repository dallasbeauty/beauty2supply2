<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8184524405cf5584c785735-31699833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d1fcbfe20ff4fdbabf892e597ab00cc95abe1e' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/my-account.tpl',
      1 => 1559580874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8184524405cf5584c785735-31699833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584c7a1c50_53272180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584c7a1c50_53272180')) {function content_5cf5584c7a1c50_53272180($_smarty_tpl) {?><li class="lnk_wishlist">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
    <i class="icon icon-heart"></i>
    <span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
  </a>
</li>
<?php }} ?>
