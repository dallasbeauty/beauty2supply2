<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcart/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15506649445cf5584917b003-10107714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8e588b1adc9b0b56e9db6b1200759162ef99a7' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcart/crossselling.tpl',
      1 => 1559580862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15506649445cf5584917b003-10107714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'orderProduct' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584919fae2_76333085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584919fae2_76333085')) {function content_5cf5584919fae2_76333085($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&is_array($_smarty_tpl->tpl_vars['orderProducts']->value)&&!empty($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
  <div class="crossseling-content">
    <h3><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl);?>
</h3>
    <div id="blockcart_list" class="row">
      <?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img">
              <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
            </a>
          </div>
          <h4 class="product-name">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
              <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],18,'...'), ENT_QUOTES, 'UTF-8', true);?>

            </a>
          </h4>
          <?php if ($_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
            <span class="price_display">
              <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
            </span>
          <?php }?>
        </div>
      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
