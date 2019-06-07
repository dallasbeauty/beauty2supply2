<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:52
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4946180345cf5585cae2b60-74667744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10ce2f8c301a832e0113fe096afa0bb0284eda8a' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1559582119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4946180345cf5585cae2b60-74667744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5585cb17291_36046535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5585cb17291_36046535')) {function content_5cf5585cb17291_36046535($_smarty_tpl) {?><li class="favoriteproducts">
  <a
    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
    title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
    <?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
      <i class="icon icon-heart-empty"></i>
      <span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
    <?php } else { ?>
      <?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

    <?php }?>
  </a>
</li>
<?php }} ?>
