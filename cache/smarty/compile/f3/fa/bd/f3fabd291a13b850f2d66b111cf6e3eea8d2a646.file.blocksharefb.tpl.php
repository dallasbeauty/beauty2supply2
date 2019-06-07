<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18796430395cf5584b591086-14567945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3fabd291a13b850f2d66b111cf6e3eea8d2a646' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocksharefb/blocksharefb.tpl',
      1 => 1559580870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18796430395cf5584b591086-14567945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584b59ff30_44672988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b59ff30_44672988')) {function content_5cf5584b59ff30_44672988($_smarty_tpl) {?><li>
  <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank">
    <i class="icon icon-fw icon-facebook"></i> <?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>

  </a>
</li>
<?php }} ?>
