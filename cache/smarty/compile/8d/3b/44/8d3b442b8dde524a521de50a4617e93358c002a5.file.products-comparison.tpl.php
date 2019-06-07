<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:07
         compiled from "/home/site/wwwroot/themes/community-theme-default/products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16559630965cf558e3689b61-66226101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d3b442b8dde524a521de50a4617e93358c002a5' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/products-comparison.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16559630965cf558e3689b61-66226101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'hasProduct' => 0,
    'HOOK_COMPARE_EXTRA_INFORMATION' => 0,
    'products' => 0,
    'link' => 0,
    'product' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'taxes_behavior' => 0,
    'unit_price' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'ordered_features' => 0,
    'feature' => 0,
    'product_id' => 0,
    'product_features' => 0,
    'feature_id' => 0,
    'HOOK_EXTRA_PRODUCT_COMPARISON' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e3803f45_38421959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e3803f45_38421959')) {function content_5cf558e3803f45_38421959($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&(!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2)) {?>
  <?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Product Comparison'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Product Comparison'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['hasProduct']->value) {?>
  <div class="table-responsive">
    <table id="product_comparison" class="table table-hover table-bordered text-center">

      <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['HOOK_COMPARE_EXTRA_INFORMATION']->value;?>
</td>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <td>
            <div class="clearfix">
              <button class="close" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">&times;</button>
            </div>
            <div class="product-image-container">
              <a class="product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                  <noscript>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                         width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                         height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                    >
                  </noscript>
                <?php }?>
                <picture class="img-responsive center-block<?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?> tb-lazy-image<?php }?>">
                  <!--[if IE 9]><video style="display: none;"><![endif]-->
                  <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                    <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                            type="image/webp"
                    >
                  <?php }?>
                  <!--[if IE 9]></video><![endif]-->
                  <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                       <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                       width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                       height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                  >
                </picture>
              </a>
              <div class="product-label-container">
                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price)||(isset($_smarty_tpl->tpl_vars['product']->value->available_for_order)&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)))) {?>
                  <?php if (isset($_smarty_tpl->tpl_vars['product']->value->online_only)&&$_smarty_tpl->tpl_vars['product']->value->online_only) {?>
                    <span class="product-label product-label-online"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span>
                  <?php }?>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value->new)&&$_smarty_tpl->tpl_vars['product']->value->new==1) {?>
                  <span class="product-label product-label-new"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value->on_sale)&&$_smarty_tpl->tpl_vars['product']->value->on_sale&&isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                  <span class="product-label product-label-sale"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value->reduction)&&$_smarty_tpl->tpl_vars['product']->value->reduction&&isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                  <span class="product-label product-label-discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
                <?php }?>
              </div>
            </div>
          </td>
        <?php } ?>
      </tr>

      <tr>
        <td></td>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <td>
            <h4>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

              </a>
            </h4>
          </td>
        <?php } ?>
      </tr>

      <tr>
        <td></td>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <td>
            <?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
              <span class="price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)),$_smarty_tpl);?>
</span>
              <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value->id,'type'=>"price"),$_smarty_tpl);?>

              <?php if (isset($_smarty_tpl->tpl_vars['product']->value->specificPrice)&&$_smarty_tpl->tpl_vars['product']->value->specificPrice) {?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage';?>
<?php $_tmp68=ob_get_clean();?><?php if ($_tmp68) {?>
                  <span class="old-price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,6,null,false,false))),$_smarty_tpl);?>
</span>
                  <span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100);?>
%</span>
                <?php } else { ?>
                  <span class="old-price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>($_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)+$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl);?>
</span>
                  <span class="price-percent-reduction">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']),$_smarty_tpl);?>
</span>
                <?php }?>
                <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

              <?php }?>
              <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
              <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
                <div class="product_discount">
                  <span class="special-price"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
                </div>
              <?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000) {?>
                <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value),'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

                <span class="comparison_unit_price">
                    &nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'per %s','sprintf'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>

                  </span>
                <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

              <?php } else { ?>
              <?php }?>
            <?php }?>
          </td>
        <?php } ?>
      </tr>

      <tr>
        <td></td>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <td class="td-product-description">
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->description_short)) {?>
              <div class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>
</div>
            <?php }?>
          </td>
        <?php } ?>
      </tr>

      <tr>
        <td></td>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <td>
            <?php if (!(($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later)||($_smarty_tpl->tpl_vars['product']->value->quantity!=0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
              <span class="availability_label"><?php echo smartyTranslate(array('s'=>'Availability:'),$_smarty_tpl);?>
</span>
              <span class="availability_value label <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?>label-warning<?php } else { ?>label-success<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value->allow_oosp) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->available_later, ENT_QUOTES, 'UTF-8', true);?>

                  <?php } else { ?>
                    <?php echo smartyTranslate(array('s'=>'This product is no longer in stock.'),$_smarty_tpl);?>

                  <?php }?>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->available_now, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
              </span>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual) {?><?php echo smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
            <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>

          </td>
        <?php } ?>
      </tr>

      <tr>
        <td></td>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <td>
            <?php if ((!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value->minimal_quantity==1&&$_smarty_tpl->tpl_vars['product']->value->customizable!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
              <?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0||$_smarty_tpl->tpl_vars['product']->value->allow_oosp)) {?>
                <a class="ajax_add_to_cart_button btn btn-primary" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".((string)$_smarty_tpl->tpl_vars['product']->value->id)."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
">
                  <?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>

                </a>
              <?php } else { ?>
                <span class="ajax_add_to_cart_button btn btn-primary disabled"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
              <?php }?>
            <?php }?>
            <a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
</a>
          </td>
        <?php } ?>
      </tr>

      <?php if ($_smarty_tpl->tpl_vars['ordered_features']->value) {?>

        <tr class="text-center active">
          <td class="td_empty"><?php echo smartyTranslate(array('s'=>'Features:'),$_smarty_tpl);?>
</td>
          <td colspan="<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
"></td>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordered_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
          <tr>
            <td class="feature-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
              <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->id, null, 0);?>
              <?php $_smarty_tpl->tpl_vars['feature_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['id_feature'], null, 0);?>
              <td class="comparison_infos">
                <?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value])&&isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value][$_smarty_tpl->tpl_vars['feature_id']->value])) {?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value][$_smarty_tpl->tpl_vars['feature_id']->value], ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
              </td>
            <?php } ?>
          </tr>
        <?php } ?>
      <?php } else { ?>
        <tr>
          <td></td>
          <td colspan="<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
" class="text-center"><?php echo smartyTranslate(array('s'=>'No features to compare'),$_smarty_tpl);?>
</td>
        </tr>
      <?php }?>

      <?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_PRODUCT_COMPARISON']->value;?>

    </table>
  </div>
<?php } else { ?>
  <div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'There are no products selected for comparison.'),$_smarty_tpl);?>
</div>
<?php }?>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo smartyTranslate(array('s'=>'Continue Shopping'),$_smarty_tpl);?>

      </a>
    </li>
  </ul>
</nav>
<?php }} ?>
