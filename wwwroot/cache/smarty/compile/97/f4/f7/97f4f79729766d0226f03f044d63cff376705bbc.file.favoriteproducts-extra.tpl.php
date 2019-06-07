<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:37
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20492513995cf5584d7b0305-03339126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f4f79729766d0226f03f044d63cff376705bbc' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl',
      1 => 1559582119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20492513995cf5584d7b0305-03339126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584d7c1e23_60667727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584d7c1e23_60667727')) {function content_5cf5584d7c1e23_60667727($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
  <li id="favoriteproducts_block_extra_add" class="add">
    <i class="icon icon-fw icon-star-o"></i> <?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

  </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
  <li id="favoriteproducts_block_extra_remove">
    <i class="icon icon-fw icon-star"></i> <?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

  </li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
  <i class="icon icon-fw icon-star"></i> <?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
  <i class="icon icon-fw icon-star-o"></i> <?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }} ?>
