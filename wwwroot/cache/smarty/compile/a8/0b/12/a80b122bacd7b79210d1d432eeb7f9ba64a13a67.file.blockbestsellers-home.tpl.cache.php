<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:36:28
         compiled from "/home/site/wwwroot/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12548907125cf6035c817820-44956793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a80b122bacd7b79210d1d432eeb7f9ba64a13a67' => 
    array (
      0 => '/home/site/wwwroot/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1559581003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12548907125cf6035c817820-44956793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6035c83d380_47998414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6035c83d380_47998414')) {function content_5cf6035c83d380_47998414($_smarty_tpl) {?>

<!-- MODULE Block best sellers -->
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
  <ul id="blockbestsellers" class="blockbestsellers tab-pane">
    <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
  </ul>
<?php }?>
<!-- /MODULE Block best sellers -->
<?php }} ?>
