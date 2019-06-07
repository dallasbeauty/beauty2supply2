<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:40:08
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19542815875cf60438af8d56-49580567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b14f396db52ff1593b4d7b172b05d2e5959524e' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/homefeatured/homefeatured.tpl',
      1 => 1559580875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19542815875cf60438af8d56-49580567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf60438b2b581_66550392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf60438b2b581_66550392')) {function content_5cf60438b2b581_66550392($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
  <ul id="homefeatured" class="homefeatured tab-pane">
    <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
  </ul>
<?php }?>
<?php }} ?>
