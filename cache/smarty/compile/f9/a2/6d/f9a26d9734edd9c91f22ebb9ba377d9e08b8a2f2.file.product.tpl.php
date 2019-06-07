<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18472159225cf558e2c2d865-24151548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a26d9734edd9c91f22ebb9ba377d9e08b8a2f2' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/product.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18472159225cf558e2c2d865-24151548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'priceDisplayPrecision' => 0,
    'priceDisplay' => 0,
    'product' => 0,
    'link' => 0,
    'adminActionDisplay' => 0,
    'confirmation' => 0,
    'productPriceWithoutReduction' => 0,
    'productPrice' => 0,
    'have_image' => 0,
    'cover' => 0,
    'largeDefaultWidth' => 0,
    'largeDefaultHeight' => 0,
    'webp' => 0,
    'jqZoomEnabled' => 0,
    'content_only' => 0,
    'img_prod_dir' => 0,
    'lang_iso' => 0,
    'images' => 0,
    'image' => 0,
    'imageIds' => 0,
    'imageTitle' => 0,
    'cartDefaultHeight' => 0,
    'cartDefaultWidth' => 0,
    'lazy_load' => 0,
    'groups' => 0,
    'show_condition' => 0,
    'display_qties' => 0,
    'PS_CATALOG_MODE' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'allow_oosp' => 0,
    'last_qties' => 0,
    'HOOK_PRODUCT_OOS' => 0,
    'HOOK_EXTRA_RIGHT' => 0,
    'HOOK_EXTRA_LEFT' => 0,
    'restricted_country_mode' => 0,
    'HOOK_PRODUCT_ACTIONS' => 0,
    'static_token' => 0,
    'tax_enabled' => 0,
    'display_tax_label' => 0,
    'currency' => 0,
    'packItems' => 0,
    'ecotax_tax_exc' => 0,
    'ecotax_tax_inc' => 0,
    'unit_price' => 0,
    'quantityBackup' => 0,
    'group' => 0,
    'id_attribute_group' => 0,
    'groupName' => 0,
    'id_attribute' => 0,
    'group_attribute' => 0,
    'col_img_dir' => 0,
    'img_color_exists' => 0,
    'colors' => 0,
    'img_col_dir' => 0,
    'default_colorpicker' => 0,
    'quantity_discounts' => 0,
    'display_discount_price' => 0,
    'quantity_discount' => 0,
    'realDiscountPrice' => 0,
    'discountPrice' => 0,
    'qtyProductPrice' => 0,
    'features' => 0,
    'feature' => 0,
    'HOOK_PRODUCT_TAB_CONTENT' => 0,
    'HOOK_PRODUCT_TAB' => 0,
    'accessories' => 0,
    'HOOK_PRODUCT_FOOTER' => 0,
    'attachments' => 0,
    'attachment' => 0,
    'customizationFormTarget' => 0,
    'customizationFields' => 0,
    'field' => 0,
    'key' => 0,
    'pictures' => 0,
    'pic_dir' => 0,
    'img_dir' => 0,
    'customizationField' => 0,
    'textFields' => 0,
    'img_ps_dir' => 0,
    'base_dir' => 0,
    'attribute_anchor_separator' => 0,
    'attributesCombinations' => 0,
    'combinations' => 0,
    'combinationImages' => 0,
    'id_customization' => 0,
    'ecotaxTax_rate' => 0,
    'no_tax' => 0,
    'customer_group_without_tax' => 0,
    'group_reduction' => 0,
    'tax_rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e34ecb40_18410522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e34ecb40_18410522')) {function content_5cf558e34ecb40_18410522($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_counter')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (empty($_smarty_tpl->tpl_vars['errors']->value)) {?>

  <?php if (!isset($_smarty_tpl->tpl_vars['priceDisplayPrecision']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['priceDisplayPrecision'] = new Smarty_variable(2, null, 0);?>
  <?php }?>
  <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
    <?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL'),6), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
    <?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'),6), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
  <?php }?>
  <?php ob_start();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'cart_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?><?php $_tmp41=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['cartDefaultWidth'] = new Smarty_variable($_tmp41, null, 0);?>
  <?php ob_start();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'cart_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?><?php $_tmp42=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['cartDefaultHeight'] = new Smarty_variable($_tmp42, null, 0);?>
  <?php ob_start();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'large_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?><?php $_tmp43=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['largeDefaultWidth'] = new Smarty_variable($_tmp43, null, 0);?>
  <?php ob_start();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'large_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?><?php $_tmp44=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['largeDefaultHeight'] = new Smarty_variable($_tmp44, null, 0);?>

  <div itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
    <div class="primary_block row">

      <?php if (isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)&&$_smarty_tpl->tpl_vars['adminActionDisplay']->value) {?>
        <div id="admin-action" class="container">
          <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'This product is not visible to your customers.'),$_smarty_tpl);?>

            <input type="hidden" id="admin-action-product-id" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
">
            <a id="publish_button" class="btn btn-success" href="#"><?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
</a>
            <a id="lnk_view" class="btn btn-warning" href="#"><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</a>
          </div>
          <p id="admin-action-result"></p>
        </div>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>
</div>
      <?php }?>

      <div class="pb-left-column col-xs-12 col-sm-4 col-md-5">

        <div id="image-block" class="thumbnail clearfix">

          <div class="product-label-container">
            <?php if ($_smarty_tpl->tpl_vars['product']->value->online_only) {?>
              <span class="product-label product-label-online"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->new) {?>
              <span class="product-label product-label-new"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
              <span class="product-label product-label-sale"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value) {?>
              <span class="product-label product-label-discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
            <?php }?>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['have_image']->value) {?>
            <a class="fancybox"
                  data-fancybox-group="product"
                  id="view_full_size"
                  href="1"
                  onclick="return false;"
            >
              <noscript>
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                     title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                     alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </noscript>
              <picture id="bigpic">
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                  <source class="img-responsive center-block"
                       itemprop="image"
                       srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                       type="image/webp"
                  >
                <?php }?>
                <!--[if IE 9]></video><![endif]-->
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                     srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                     title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                     alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </picture>
              <?php if (!$_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&!$_smarty_tpl->tpl_vars['content_only']->value) {?>
                <span class="span_link" title="<?php echo smartyTranslate(array('s'=>'Zoom in'),$_smarty_tpl);?>
">
                    <i class="icon icon-search-plus"></i>
                  </span>
              <?php }?>
            </a>
          <?php } else { ?>
            <span id="view_full_size">
              <noscript>
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large_default.jpg"
                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </noscript>
              <picture id="bigpic">
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <?php if ((!empty($_smarty_tpl->tpl_vars['webp']->value))) {?>
                  <source class="img-responsive center-block"
                          itemprop="image"
                          srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large_default.webp"
                          title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                          type="image/webp"
                  >
                <?php }?>
                <!--[if IE 9]></video><![endif]-->
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large_default.jpg"
                     srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large_default.jpg"
                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </picture>
            </span>
          <?php }?>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['images']->value)) {?>
          <div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2) {?>hidden<?php }?>">
            <div id="thumbs_list">
              <ul id="thumbs_list_frame" class="list-unstyled">
                <?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
                  <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['iteration']++;
?>

                    <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                      <?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php } else { ?>
                      <?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php }?>

                    <li data-slide-num="<?php echo intval($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['iteration']);?>
"
                        id="thumbnail_<?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
"
                        style="display: inline-block"
                    >
                      <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&$_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['content_only']->value) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                           class="thumbnail fancybox"
                           title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                           data-fancybox-group="product"
                           style="height: <?php echo $_smarty_tpl->tpl_vars['cartDefaultHeight']->value+8;?>
px; width: <?php echo $_smarty_tpl->tpl_vars['cartDefaultWidth']->value+8;?>
px"
                        >
                          <noscript>
                            <img class="img-responsive"
                                 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 itemprop="image"
                                 width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                 height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                            >
                          </noscript>
                          <picture class="img-responsive" id="thumb_<?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
">
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                              <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                      title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                      itemprop="image"
                                      type="image/webp"
                              >
                            <?php }?>
                            <!--[if IE 9]></video><![endif]-->
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 itemprop="image"
                                 width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                 height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                            >
                          </picture>
                        </a>
                      <?php } else { ?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                           class="thumbnail fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']==$_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"
                           title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                           data-fancybox-group="product"
                           style="height: <?php echo $_smarty_tpl->tpl_vars['cartDefaultHeight']->value+8;?>
px; width: <?php echo $_smarty_tpl->tpl_vars['cartDefaultWidth']->value+8;?>
px"
                        >
                          <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                            <noscript>
                              <img class="img-responsive"
                                   src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                   srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                   alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                   title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                   itemprop="image"
                                   width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                   height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                              >
                            </noscript>
                          <?php }?>
                          <picture class="img-responsive" id="thumb_<?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
">
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                              <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                      title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                                      itemprop="image"
                                      type="image/webp"
                              >
                            <?php }?>
                            <!--[if IE 9]></video><![endif]-->
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                                 title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                                 itemprop="image"
                                 width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                 height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                            >
                          </picture>
                        </a>
                      <?php }?>
                    </li>
                  <?php } ?>
                <?php }?>
              </ul>
            </div>
          </div>
        <?php }?>

      </div>

      <div class="pb-center-column col-xs-12 col-sm-4">

        <h1 itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
        <p id="product_reference"<?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference)||!$_smarty_tpl->tpl_vars['product']->value->reference) {?> style="display: none;"<?php }?>>
          <b><?php echo smartyTranslate(array('s'=>'Reference:'),$_smarty_tpl);?>
</b>
          <meta itemprop="sku"<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->reference)&&$_smarty_tpl->tpl_vars['product']->value->reference) {?> content="<?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
"<?php }?>>
          <span class="editable"><?php if (!isset($_smarty_tpl->tpl_vars['groups']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
        </p>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual&&$_smarty_tpl->tpl_vars['product']->value->condition&&$_smarty_tpl->tpl_vars['show_condition']->value) {?>
          <p id="product_condition">
            <b><?php echo smartyTranslate(array('s'=>'Condition:'),$_smarty_tpl);?>
</b>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->condition=='new') {?>
              <link itemprop="itemCondition" href="https://schema.org/NewCondition">
              <span class="editable"><?php echo smartyTranslate(array('s'=>'New product'),$_smarty_tpl);?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition=='used') {?>
              <link itemprop="itemCondition" href="https://schema.org/UsedCondition">
              <span class="editable"><?php echo smartyTranslate(array('s'=>'Used'),$_smarty_tpl);?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition=='refurbished') {?>
              <link itemprop="itemCondition" href="https://schema.org/RefurbishedCondition">
              <span class="editable"><?php echo smartyTranslate(array('s'=>'Refurbished'),$_smarty_tpl);?>
</span>
            <?php }?>
          </p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value->id_manufacturer>0) {?>
          <p itemprop="brand" itemscope itemtype="https://schema.org/Brand">
            <b><?php echo smartyTranslate(array('s'=>'Manufacturer:'),$_smarty_tpl);?>
</b>
            <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product']->value->id_manufacturer);?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
">
              <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
</span>
            </a>
          </p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value->description_short) {?>
          <div id="short_description_block">
            <div id="short_description_content" class="rte" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>
</div>
          </div>
        <?php }?>

        <p id="product-availability">
          <?php if (($_smarty_tpl->tpl_vars['display_qties']->value==1&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)) {?>
            <span id="pQuantityAvailable"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> style="display: none;"<?php }?>>
            <span id="quantityAvailable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value->quantity);?>
</span>
            <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>1) {?> style="display: none;"<?php }?> id="quantityAvailableTxt"><?php echo smartyTranslate(array('s'=>'Item'),$_smarty_tpl);?>
</span>
            <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity==1) {?> style="display: none;"<?php }?> id="quantityAvailableTxtMultiple"><?php echo smartyTranslate(array('s'=>'Items'),$_smarty_tpl);?>
</span>
          </span>
          <?php }?>

          <span id="availability_statut"<?php if (!$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value||($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later&&$_smarty_tpl->tpl_vars['allow_oosp']->value)||($_smarty_tpl->tpl_vars['product']->value->quantity>0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
            
            <span id="availability_value" class="label<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['allow_oosp']->value) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> label-warning<?php } else { ?> label-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?><?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&$_smarty_tpl->tpl_vars['allow_oosp']->value) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_later;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'This product is no longer in stock'),$_smarty_tpl);?>
<?php }?><?php } elseif ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_now;?>
<?php }?></span>
          </span>

          <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
            <span class="label label-warning" id="last_quantities"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>$_smarty_tpl->tpl_vars['last_qties']->value||$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||$_smarty_tpl->tpl_vars['allow_oosp']->value||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none"<?php }?> ><?php echo smartyTranslate(array('s'=>'Warning: Last items in stock!'),$_smarty_tpl);?>
</span>
          <?php }?>
        </p>

        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
          <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual) {?><?php echo smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
        <?php }?>

        <p id="availability_date"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value||!isset($_smarty_tpl->tpl_vars['product']->value->available_date)||$_smarty_tpl->tpl_vars['product']->value->available_date<smarty_modifier_date_format(time(),'%Y-%m-%d')) {?> style="display: none;"<?php }?>>
          <span id="availability_date_label"><b><?php echo smartyTranslate(array('s'=>'Availability date:'),$_smarty_tpl);?>
</b></span>
          <span id="availability_date_value"><?php if (Validate::isDate($_smarty_tpl->tpl_vars['product']->value->available_date)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['product']->value->available_date,'full'=>false),$_smarty_tpl);?>
<?php }?></span>
        </p>

        <div id="oosHook"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0) {?> style="display: none;"<?php }?>>
          <?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_OOS']->value;?>

        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)&&$_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;?>
<?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
          <ul id="usefull_link_block" class="list-unstyled hidden-print">
            <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value;?>
<?php }?>
            <li>
              <a href="javascript:print();" title="<?php echo smartyTranslate(array('s'=>'Print this page'),$_smarty_tpl);?>
">
                <i class="icon icon-fw icon-print"></i> <?php echo smartyTranslate(array('s'=>'Print'),$_smarty_tpl);?>

              </a>
            </li>
          </ul>
        <?php }?>
      </div>

      <div class="pb-right-column col-xs-12 col-sm-4 col-md-3">
        <?php if (($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))||isset($_smarty_tpl->tpl_vars['groups']->value)||$_smarty_tpl->tpl_vars['product']->value->reference||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) {?>

          <form id="buy_block"<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&!isset($_smarty_tpl->tpl_vars['groups']->value)&&$_smarty_tpl->tpl_vars['product']->value->quantity>0) {?> class="hidden"<?php }?> action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">

            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
">
            <input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="id_product_attribute" id="idCombination" value="">

            <div class="box-info-product">
              <div class="content_prices clearfix">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                  <div>
                    <p class="our_price_display" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0) {?><link itemprop="availability" href="https://schema.org/InStock"><?php }?><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2) {?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['productPrice']->value;?>
"><span id="our_price_display" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>
</span><?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value&&((isset($_smarty_tpl->tpl_vars['display_tax_label']->value)&&$_smarty_tpl->tpl_vars['display_tax_label']->value==1)||!isset($_smarty_tpl->tpl_vars['display_tax_label']->value))) {?><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?> <?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
<?php } else { ?> <?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
<?php }?><?php }?><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
"><?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>
<?php }?></p>
                    <p id="reduction_percent" <?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value<=0||!$_smarty_tpl->tpl_vars['product']->value->specificPrice||$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']!='percentage') {?> style="display:none;"<?php }?>><span id="reduction_percent_display"><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage') {?>-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
%<?php }?></span></p>
                    <p id="reduction_amount" <?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value<=0||!$_smarty_tpl->tpl_vars['product']->value->specificPrice||$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']!='amount'||floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])==0) {?> style="display:none"<?php }?>><span id="reduction_amount_display"><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount'&&floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])!=0) {?>-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>
<?php }?></span></p>
                    <p id="old_price"<?php if ((!$_smarty_tpl->tpl_vars['product']->value->specificPrice||!$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])) {?> class="hidden"<?php }?>><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2) {?><?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>
<span id="old_price_display"><span class="price"><?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl);?>
<?php }?></span><?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value&&$_smarty_tpl->tpl_vars['tax_enabled']->value&&$_smarty_tpl->tpl_vars['display_tax_label']->value==1) {?> <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?><?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }?></p>
                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
                      <br>
                      <span id="pretaxe_price"><span id="pretaxe_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'))),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
</span>
                    <?php }?>
                  </div>
                  <?php if (count($_smarty_tpl->tpl_vars['packItems']->value)&&$_smarty_tpl->tpl_vars['productPrice']->value<$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()) {?>
                    <p class="pack_price"><?php echo smartyTranslate(array('s'=>'Instead of'),$_smarty_tpl);?>
 <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()),$_smarty_tpl);?>
</span></p>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value->ecotax!=0) {?>
                    <p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'Including'),$_smarty_tpl);?>
 <span id="ecotax_price_display"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_exc']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_inc']->value);?>
<?php }?></span> <?php echo smartyTranslate(array('s'=>'for ecotax'),$_smarty_tpl);?>

                      <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
                        <br><?php echo smartyTranslate(array('s'=>'(not impacted by the discount)'),$_smarty_tpl);?>

                      <?php }?>
                    </p>
                  <?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000) {?>
                    <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['productPrice']->value,'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

                    <p class="unit-price"><span id="unit_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'per'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true);?>
</p>
                    <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                  <?php }?>
                <?php }?> 
                <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl);?>

                <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl);?>

              </div>

              <div class="product_attributes clearfix">

                <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                  <div id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                    <label for="quantity_wanted"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</label>
                    <div class="input-group">
                      <div class="input-group-btn">
                        <a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down" title="Decrease" aria-label="Decrease">
                          <i class="icon icon-fw icon-minus"></i>
                        </a>
                      </div>
                      <input type="tel" min="1" name="qty" id="quantity_wanted" class="text text-center form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['quantityBackup']->value)) {?><?php echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
<?php } else { ?>1<?php }?><?php }?>">
                      <div class="input-group-btn">
                        <a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up" title="Increase" aria-label="Increase">
                          <i class="icon icon-fw icon-plus"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php }?>

                <p id="minimal_quantity_wanted_p"<?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity<=1||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                  <?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is'),$_smarty_tpl);?>
 <b id="minimal_quantity_label"><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
</b>
                </p>

                <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
                  <div id="attributes">
                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                      <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
                        <fieldset class="attribute_fieldset form-group">
                          <label class="attribute_label" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type']!='color'&&$_smarty_tpl->tpl_vars['group']->value['group_type']!='radio') {?>for="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</label>
                          <?php $_smarty_tpl->tpl_vars["groupName"] = new Smarty_variable("group_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value), null, 0);?>
                          <div class="attribute_list">
                            <?php if (($_smarty_tpl->tpl_vars['group']->value['group_type']=='select')) {?>
                              <select name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" id="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
" class="form-control attribute_select no-print">
                                <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
                                  <option value="<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
"<?php if ((isset($_GET[$_smarty_tpl->tpl_vars['groupName']->value])&&intval($_GET[$_smarty_tpl->tpl_vars['groupName']->value])==$_smarty_tpl->tpl_vars['id_attribute']->value)||$_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value) {?> selected="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                              </select>
                            <?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type']=='color')) {?>
                              <ul id="color_to_pick_list">
                                <?php $_smarty_tpl->tpl_vars["default_colorpicker"] = new Smarty_variable('', null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
                                  <?php $_smarty_tpl->tpl_vars['img_color_exists'] = new Smarty_variable(file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['id_attribute']->value)).('.jpg')), null, 0);?>
                                  <li<?php if ($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value) {?> class="selected"<?php }?>>
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" id="color_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
" class="color_pick<?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?> selected<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['img_color_exists']->value&&isset($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value'])&&$_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value']) {?> style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                      <?php if ($_smarty_tpl->tpl_vars['img_color_exists']->value) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;?>
<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="20" height="20">
                                      <?php }?>
                                    </a>
                                  </li>
                                  <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?>
                                    <?php $_smarty_tpl->tpl_vars['default_colorpicker'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_attribute']->value, null, 0);?>
                                  <?php }?>
                                <?php } ?>
                              </ul>
                              <input type="hidden" class="color_pick_hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupName']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['default_colorpicker']->value);?>
">
                            <?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type']=='radio')) {?>
                              <ul>
                                <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
                                  <li>
                                    <input type="radio" class="attribute_radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupName']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?> checked="checked"<?php }?>>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                  </li>
                                <?php } ?>
                              </ul>
                            <?php }?>
                          </div>
                        </fieldset>
                      <?php }?>
                    <?php } ?>
                  </div>
                <?php }?>
              </div>

              <div class="box-cart-bottom">
                <div<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value)||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> class="unvisible"<?php }?>>
                  <p id="add_to_cart" class="buttons_bottom_block no-print">
                    <button type="submit" name="Submit" class="btn btn-block btn-lg btn-success btn-add-to-cart">
                      <i class="icon icon-cart-plus"></i>
                      <span><?php if ($_smarty_tpl->tpl_vars['content_only']->value&&(isset($_smarty_tpl->tpl_vars['product']->value->customization_required)&&$_smarty_tpl->tpl_vars['product']->value->customization_required)) {?><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
<?php }?></span>
                    </button>
                  </p>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value;?>
<?php }?>
              </div>

            </div>
          </form>
        <?php }?>
      </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
      <?php if (!empty($_smarty_tpl->tpl_vars['quantity_discounts']->value)) {?>
        <section id="product-volume-discounts" class="page-product-box">
          <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Volume discounts'),$_smarty_tpl);?>
</h3>
          <div id="quantityDiscount" class="table-responsive">
            <table class="table-product-discounts table table-condensed table-bordered table-hover">
              <thead>
              <tr>
                <th><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
                <th><?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?><?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Discount'),$_smarty_tpl);?>
<?php }?></th>
                <th><?php echo smartyTranslate(array('s'=>'You Save'),$_smarty_tpl);?>
</th>
              </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quantity_discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
                  <?php $_smarty_tpl->tpl_vars['realDiscountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']), null, 0);?>
                <?php } else { ?>
                  <?php $_smarty_tpl->tpl_vars['realDiscountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])), null, 0);?>
                <?php }?>
                <tr id="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" class="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" data-real-discount-value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['realDiscountPrice']->value),$_smarty_tpl);?>
" data-discount-type="<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'];?>
" data-discount="<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
" data-discount-quantity="<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
">
                  <td>
                    <?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>

                  </td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
                      <?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax']==0&&!$_smarty_tpl->tpl_vars['quantity_discount']->value['price']) {?>
                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl);?>

                        <?php } else { ?>
                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

                        <?php }?>
                      <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

                      <?php }?>
                    <?php } else { ?>
                      <?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax']==0) {?>
                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl);?>

                        <?php } else { ?>
                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl);?>

                        <?php }?>
                      <?php } else { ?>
                        <?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
                      <?php }?>
                    <?php }?>
                  </td>
                  <td>
                    <span><?php echo smartyTranslate(array('s'=>'Up to'),$_smarty_tpl);?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
                      <?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']), null, 0);?>
                    <?php } else { ?>
                      <?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])), null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['discountPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['qtyProductPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], null, 0);?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['qtyProductPrice']->value-$_smarty_tpl->tpl_vars['discountPrice']->value),$_smarty_tpl);?>

                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </section>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['features']->value)) {?>
        <section id="product-features" class="page-product-box">
          <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Data sheet'),$_smarty_tpl);?>
</h3>
          <div class="table-responsive">
            <table class="table table-bordered table-condensed table-hover table-data-sheet">
              <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                  <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['value'])) {?>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  <?php }?>
                </tr>
              <?php } ?>
            </table>
          </div>
        </section>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description) {?>
        <section id="product-description" class="page-product-box">
          <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'More info'),$_smarty_tpl);?>
</h3>
          <div  class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
        </section>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['packItems']->value)&&count($_smarty_tpl->tpl_vars['packItems']->value)>0) {?>
        <section id="blockpack" class="page-product-box">
          <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>
</h3>
          <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0);?>

        </section>
      <?php }?>

      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>
<?php $_tmp45=ob_get_clean();?><?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)||!empty($_tmp45)) {?>
        <section id="product-hook-tab" class="page-product-box">
          <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>
<?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;?>
<?php }?>
        </section>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['accessories']->value)) {?>
        <section id="product-accessories" class="page-product-box">
          <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Accessories'),$_smarty_tpl);?>
</h3>
          <div class="accessories-block">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['accessories']->value), 0);?>

          </div>
        </section>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;?>
<?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description)||(isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value)||(isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value)||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)||(isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value)||isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value) {?>
          <section id="product-attachments" class="page-product-box">
            <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Download'),$_smarty_tpl);?>
</h3>
            <div class="row">
              <?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
                <div class="col-xs-12 col-sm-4 col-lg-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                      </a>
                    </div>
                    <div class="panel-body">
                      <?php if (!empty($_smarty_tpl->tpl_vars['attachment']->value['description'])) {?>
                        <p class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                      <?php }?>
                      <a class="btn btn-default btn-block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
                        <i class="icon icon-download"></i> <?php echo smartyTranslate(array('s'=>"Download"),$_smarty_tpl);?>
 (<?php echo Tools::formatBytes($_smarty_tpl->tpl_vars['attachment']->value['file_size'],2);?>
)
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </section>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable) {?>
          <section id="product-customization" class="page-product-box">
            <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Product customization'),$_smarty_tpl);?>
</h3>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
              <p class="infoCustomizable">
                <?php echo smartyTranslate(array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files) {?>
                  <br> <?php echo smartyTranslate(array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl);?>

                <?php }?>
              </p>

              <?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)) {?>
                <div class="customizableProductsFile">
                  <h3><?php echo smartyTranslate(array('s'=>'Pictures'),$_smarty_tpl);?>
</h3>
                  <ul id="uploadable_files" class="list-unstyled clearfix">
                    <?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']==0) {?>
                        <li class="customizationUploadLine form-group<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>"><?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
                          <?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                            <div class="customizationUploadBrowse">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="">
                              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" >
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="customization_delete_icon" width="11" height="13">
                              </a>
                            </div>
                          <?php }?>
                          <div class="customizationUploadBrowse form-group">
                            <label class="customizationUploadBrowseDescription">
                              <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

                              <?php } else { ?>
                                <?php echo smartyTranslate(array('s'=>'Please select an image file from your computer'),$_smarty_tpl);?>

                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
                            </label>
                            <input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="form-control customization_block_input <?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>filled<?php }?>">
                          </div>
                        </li>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                      <?php }?>
                    <?php } ?>
                  </ul>
                </div>
              <?php }?>

              <?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)) {?>
                <div class="customizableProductsText">
                  <h3><?php echo smartyTranslate(array('s'=>'Text'),$_smarty_tpl);?>
</h3>
                  <ul id="text_fields" class="list-unstyled">
                    <?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']==1) {?>
                        <li class="customizationUploadLine form-group<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
                          <label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
">
                            <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
                              <?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
                          </label>
                          <textarea name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" class="form-control customization_block_input" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="3" cols="20"><?php if (isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value])) {?><?php echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
<?php }?></textarea>
                        </li>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                      <?php }?>
                    <?php } ?>
                  </ul>
                </div>
              <?php }?>
              <div id="customizedDatas" class="form-group">
                <input type="hidden" name="quantityBackup" id="quantityBackup" value="">
                <input type="hidden" name="submitCustomizedDatas" value="1">
                <button class="btn btn-lg btn-success" name="saveCustomization">
                  <span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</span>
                </button>
                <span id="ajax-loader" class="unvisible">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader">
                </span>
              </div>
            </form>
            <div class="form-group">
              <div class="help-block">
                <sup>*</sup> <?php echo smartyTranslate(array('s'=>'required fields'),$_smarty_tpl);?>

              </div>
            </div>
          </section>
        <?php }?>

      <?php }?>
    <?php }?>
  </div>

  <?php if (isset($_GET['ad'])&&$_GET['ad']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ad')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_GET['adtoken'])&&$_GET['adtoken']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'adtoken')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('allowBuyWhenOutOfStock'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['allow_oosp']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('availableNowValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_now)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('availableLaterValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_later)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('attribute_anchor_separator'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['attribute_anchor_separator']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('attributesCombinations'=>$_smarty_tpl->tpl_vars['attributesCombinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currentDate'=>smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['combinations']->value)&&$_smarty_tpl->tpl_vars['combinations']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinationsFromController'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayDiscountPrice'=>$_smarty_tpl->tpl_vars['display_discount_price']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'upToTxt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'upToTxt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Up to','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'upToTxt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['combinationImages']->value)&&$_smarty_tpl->tpl_vars['combinationImages']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinationImages'=>$_smarty_tpl->tpl_vars['combinationImages']->value),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customizationId'=>$_smarty_tpl->tpl_vars['id_customization']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customizationFields'=>$_smarty_tpl->tpl_vars['customizationFields']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('default_eco_tax'=>floatval($_smarty_tpl->tpl_vars['product']->value->ecotax)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayPrice'=>intval($_smarty_tpl->tpl_vars['priceDisplay']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('ecotaxTax_rate'=>floatval($_smarty_tpl->tpl_vars['ecotaxTax_rate']->value)),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idDefaultImage'=>intval($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idDefaultImage'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_prod_dir'=>$_smarty_tpl->tpl_vars['img_prod_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('jqZoomEnabled'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['jqZoomEnabled']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('maxQuantityToAllowDisplayOfLastQuantityMessage'=>intval($_smarty_tpl->tpl_vars['last_qties']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('minimalQuantity'=>intval($_smarty_tpl->tpl_vars['product']->value->minimal_quantity)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('noTaxForThisProduct'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['no_tax']->value)),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['customer_group_without_tax']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customerGroupWithoutTax'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['customer_group_without_tax']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customerGroupWithoutTax'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['group_reduction']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('groupReduction'=>floatval($_smarty_tpl->tpl_vars['group_reduction']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('groupReduction'=>false),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('oosHookJsCodeFunctions'=>Array()),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productHasAttributes'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval(isset($_smarty_tpl->tpl_vars['groups']->value))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceTaxExcluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceTaxIncluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax*(1+$_smarty_tpl->tpl_vars['ecotaxTax_rate']->value/100)))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxExcluded'=>floatval(($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxExcl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxIncl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,6,null,false,false)))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productReference'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productAvailableForOrder'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['product']->value->available_for_order)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceWithoutReduction'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPrice'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productUnitPriceRatio'=>floatval($_smarty_tpl->tpl_vars['product']->value->unit_price_ratio)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productShowPrice'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['product']->value->show_price))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('PS_CATALOG_MODE'=>$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&count($_smarty_tpl->tpl_vars['product']->value->specificPrice)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_specific_price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_specific_price'=>array()),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['display_qties']->value==1&&$_smarty_tpl->tpl_vars['product']->value->quantity) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantityAvailable'=>$_smarty_tpl->tpl_vars['product']->value->quantity),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantityAvailable'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantitiesDisplayAllowed'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['display_qties']->value)),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_percent'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_percent'=>0),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_price'=>0),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['price']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['price'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_price'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_currency'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval(($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']))),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('stock_management'=>intval($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('taxRate'=>floatval($_smarty_tpl->tpl_vars['tax_rate']->value)),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExist')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExist'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExist'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExistNoMore')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMore'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMore'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExistNoMoreBut')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMoreBut'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMoreBut'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'fieldRequired')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'fieldRequired'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'fieldRequired'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'uploading_in_progress')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'uploading_in_progress'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'uploading_in_progress'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'product_fileDefaultHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No file selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileDefaultHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'product_fileButtonHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Choose File','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileButtonHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
