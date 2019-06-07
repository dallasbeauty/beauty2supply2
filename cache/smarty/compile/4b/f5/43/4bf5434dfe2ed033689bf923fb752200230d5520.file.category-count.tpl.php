<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:30
         compiled from "/home/site/wwwroot/themes/community-theme-default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1092552785cf558465ed909-35861329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf5434dfe2ed033689bf923fb752200230d5520' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/category-count.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092552785cf558465ed909-35861329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558466050f0_91105732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558466050f0_91105732')) {function content_5cf558466050f0_91105732($_smarty_tpl) {?><span class="heading-counter badge">
  <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?>
    <?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>

  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?>
      <?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>

    <?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?>
      <?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

    <?php }?>
  <?php }?>
</span>
<?php }} ?>
