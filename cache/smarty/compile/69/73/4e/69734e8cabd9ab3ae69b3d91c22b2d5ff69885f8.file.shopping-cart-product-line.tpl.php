<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:08
         compiled from "/home/site/wwwroot/themes/community-theme-default/shopping-cart-product-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19309865765cf558e43cede3-78338609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69734e8cabd9ab3ae69b3d91c22b2d5ff69885f8' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/shopping-cart-product-line.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19309865765cf558e43cede3-78338609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'quantityDisplayed' => 0,
    'odd' => 0,
    'link' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'symbol' => 0,
    'priceReduction' => 0,
    'cannotModify' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'token_cart' => 0,
    'noDeleteButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e467f4e9_12097394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e467f4e9_12097394')) {function content_5cf558e467f4e9_12097394($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php';
?><tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>" class="cart_item address_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
 <?php if ($_smarty_tpl->tpl_vars['odd']->value) {?>odd<?php } else { ?>even<?php }?>">
  <td class="cart_product">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],false,false,true), ENT_QUOTES, 'UTF-8', true);?>
">
      <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
        <noscript>
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
               alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
               width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
               height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
          >
        </noscript>
      <?php }?>
      <picture <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>class="tb-lazy-image"<?php }?>>
        <!--[if IE 9]><video style="display: none;"><![endif]-->
        <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
          <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                  type="image/webp"
          >
        <?php }?>
        <!--[if IE 9]></video><![endif]-->
        <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
             <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
             alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
             width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
             height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
        >
      </picture>
    </a>
  </td>
  <td class="cart_description">
    <?php $_smarty_tpl->_capture_stack[0][] = array('sep', null, null); ob_start(); ?> : <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>' : '),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <p class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],false,false,true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></p>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?><small class="cart_ref"><?php echo smartyTranslate(array('s'=>'SKU'),$_smarty_tpl);?>
<?php echo Smarty::$_smarty_vars['capture']['default'];?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
</small><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><small><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],false,false,true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['attributes'],Smarty::$_smarty_vars['capture']['sep'],Smarty::$_smarty_vars['capture']['default']), ENT_QUOTES, 'UTF-8', true);?>
</a></small><?php }?>
  </td>
  <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
    <td class="cart_avail"><span class="label<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available']<=0&&isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])&&!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity_available']<=0) {?> label-warning<?php } else { ?> label-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available']<=0) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])&&$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?></span><?php if (!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {?><?php echo smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?></td>
  <?php }?>
  <td class="cart_unit" data-title="<?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
">
    <ul class="price text-right" id="product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
      <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
        <li class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift!'),$_smarty_tpl);?>
</li>
      <?php } else { ?>
        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
          <li class="price<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?> special-price<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>
</li>
        <?php } else { ?>
          <li class="price<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?> special-price<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?>
          <li class="price-percent-reduction small">
            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
              <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price_wt']-$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
              <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']-$_smarty_tpl->tpl_vars['product']->value['price_wt'])/$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price'])*100*-1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
              <?php }?>
            <?php } else { ?>
              <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
              <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']-$_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price'])*-100, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
              <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['symbol']->value=='%') {?>
              &nbsp;<?php echo smarty_modifier_regex_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['priceReduction']->value),"/[^\d]0+"."$"."/",'');?>
<?php echo $_smarty_tpl->tpl_vars['symbol']->value;?>
&nbsp;
            <?php } else { ?>
              &nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['priceReduction']->value),$_smarty_tpl);?>
&nbsp;
            <?php }?>
          </li>
          <li class="old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']),$_smarty_tpl);?>
</li>
        <?php }?>
      <?php }?>
    </ul>
  </td>

  <td class="cart_quantity text-center" data-title="<?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['cannotModify']->value)&&$_smarty_tpl->tpl_vars['cannotModify']->value==1)) {?>
      <span>
        <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
          <?php echo $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'];?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>

        <?php }?>
      </span>
    <?php } else { ?>
      <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])&&$_smarty_tpl->tpl_vars['quantityDisplayed']->value==0) {?>
        <span id="cart_quantity_custom_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" ><?php echo $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'];?>
</span>
      <?php }?>
      <?php if (!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>

        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>
<?php }?>" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden">
        <input size="2" type="text" autocomplete="off" class="cart_quantity_input form-control text-center" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>
<?php }?>"  name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
">
        <div class="cart_quantity_button clearfix">
          <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value)||$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1) {?>
            <a rel="nofollow" class="cart_quantity_down btn btn-default button-minus" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp50=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php $_tmp51=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php $_tmp52=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"add=1&amp;id_product=".$_tmp50."&amp;ipa=".$_tmp51."&amp;id_address_delivery=".$_tmp52."&amp;op=down&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Subtract'),$_smarty_tpl);?>
">
              <i class="icon icon-fw icon-minus"></i>
            </a>
          <?php } else { ?>
            <a class="cart_quantity_down btn btn-default button-minus disabled" href="#" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" title="<?php echo smartyTranslate(array('s'=>'You must purchase a minimum of %d of this product.','sprintf'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']),$_smarty_tpl);?>
">
              <i class="icon icon-fw icon-minus"></i>
            </a>
          <?php }?>
          <a rel="nofollow" class="cart_quantity_up btn btn-default button-plus" id="cart_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php $_tmp54=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php $_tmp55=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"add=1&amp;id_product=".$_tmp53."&amp;ipa=".$_tmp54."&amp;id_address_delivery=".$_tmp55."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
"><i class="icon icon-fw icon-plus"></i></a>
        </div>
      <?php }?>
    <?php }?>
  </td>

  <?php if (!isset($_smarty_tpl->tpl_vars['noDeleteButton']->value)||!$_smarty_tpl->tpl_vars['noDeleteButton']->value) {?>
    <td class="cart_delete text-center" data-title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
">
      <?php if ((!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0)&&empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
        <div>
          <a rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="cart_quantity_delete" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp56=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php $_tmp57=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php $_tmp58=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"delete=1&amp;id_product=".$_tmp56."&amp;ipa=".$_tmp57."&amp;id_address_delivery=".$_tmp58."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon icon-trash"></i></a>
        </div>
      <?php } else { ?>

      <?php }?>
    </td>
  <?php }?>
  <td class="cart_total" data-title="<?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
">
    <span class="price" id="total_product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
      <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
        <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift!'),$_smarty_tpl);?>
</span>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
          <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization']),$_smarty_tpl);?>
<?php }?>
        <?php } else { ?>
          <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php }?>
        <?php }?>
      <?php }?>
    </span>
  </td>

</tr>
<?php }} ?>
