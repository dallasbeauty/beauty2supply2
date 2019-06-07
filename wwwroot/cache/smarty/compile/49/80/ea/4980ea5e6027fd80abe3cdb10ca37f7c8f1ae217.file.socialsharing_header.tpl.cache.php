<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 02:34:53
         compiled from "/home/site/wwwroot/modules/socialsharing/views/templates/hook/socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17311624005cf6110de21227-18111217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4980ea5e6027fd80abe3cdb10ca37f7c8f1ae217' => 
    array (
      0 => '/home/site/wwwroot/modules/socialsharing/views/templates/hook/socialsharing_header.tpl',
      1 => 1559581021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17311624005cf6110de21227-18111217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
    'meta_description' => 0,
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
    'pretax_price' => 0,
    'currency' => 0,
    'price' => 0,
    'weight' => 0,
    'weight_unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6110de6bd41_06200637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6110de6bd41_06200637')) {function content_5cf6110de6bd41_06200637($_smarty_tpl) {?>

<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['pretax_price']->value)) {?>
<meta property="product:pretax_price:amount" content="<?php echo $_smarty_tpl->tpl_vars['pretax_price']->value;?>
" />
<?php }?>
<meta property="product:pretax_price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['price']->value)) {?>
<meta property="product:price:amount" content="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" />
<?php }?>
<meta property="product:price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['weight']->value)&&($_smarty_tpl->tpl_vars['weight']->value!=0)) {?>
<meta property="product:weight:value" content="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
<meta property="product:weight:units" content="<?php echo $_smarty_tpl->tpl_vars['weight_unit']->value;?>
" />
<?php }?>
<?php }} ?>
