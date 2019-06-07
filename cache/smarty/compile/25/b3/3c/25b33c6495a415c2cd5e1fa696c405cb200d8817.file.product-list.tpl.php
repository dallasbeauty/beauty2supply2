<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17694005285cf558e2a50131-84099506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25b33c6495a415c2cd5e1fa696c405cb200d8817' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/product-list.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17694005285cf558e2a50131-84099506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'page_name' => 0,
    'id' => 0,
    'class' => 0,
    'product_block_size_class' => 0,
    'product' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e2a6c499_68871939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e2a6c499_68871939')) {function content_5cf558e2a6c499_68871939($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'||$_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
    <?php $_smarty_tpl->tpl_vars['product_block_size_class'] = new Smarty_variable('col-xs-12 col-sm-4 col-md-3', null, 0);?>
  <?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['product_block_size_class'] = new Smarty_variable('col-xs-12 col-sm-6 col-md-4', null, 0);?>
  <?php }?>

  <?php $_smarty_tpl->tpl_vars['show_functional_buttons'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_name']->value!='index', null, 0);?>

  <ul<?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list grid list-grid row<?php if (!empty($_smarty_tpl->tpl_vars['class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">

    
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?><li class="ajax_block_product <?php echo $_smarty_tpl->tpl_vars['product_block_size_class']->value;?>
">
      <?php echo $_smarty_tpl->getSubTemplate ('./product-list-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    </li><?php } ?>
    

  </ul>

  <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
