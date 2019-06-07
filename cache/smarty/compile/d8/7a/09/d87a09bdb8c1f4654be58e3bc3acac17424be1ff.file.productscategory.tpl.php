<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:01
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21391874605cf558dd35bba4-66845978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87a09bdb8c1f4654be58e3bc3acac17424be1ff' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/productscategory/productscategory.tpl',
      1 => 1559580878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21391874605cf558dd35bba4-66845978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'ProdDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558dd3ce5b1_69161740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558dd3ce5b1_69161740')) {function content_5cf558dd3ce5b1_69161740($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
  <section class="page-product-box blockproductscategory">
    <h3 class="productscategory_h3 page-product-heading">
      <?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)==1) {?>
        <?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

      <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

      <?php }?>
    </h3>
    <div id="productscategory_list" class="clearfix">
      <ul id="bxslider1" class="bxslider clearfix">
        <?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value) {
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
          <li class="product-box">
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
"
               class="lnk_img product-image"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"
            >
              <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                <noscript>
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                       alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"
                       width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                       height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                  >
                </noscript>
              <?php }?>
              <picture <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>class="tb-lazy-image"<?php }?>>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                  <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                          alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"
                          type="image/webp"
                  >
                <?php }?>
                <!--[if IE 9]></video><![endif]-->
                <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                     <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"
                     width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                     height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                >
              </picture>
            </a>
            <h5 class="product-name">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],14,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a>
            </h5>
            <?php if ($_smarty_tpl->tpl_vars['ProdDisplayPrice']->value&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
              <p class="price_display">
                <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']&&(number_format($_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price'],2)!==number_format($_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction'],2))) {?>

                  <span class="price special-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                  <?php if ($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction_type']=='percentage') {?>
                    <span class="price-percent-reduction small">-<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']*100;?>
%</span>
                  <?php }?>
                  <span class="old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction']),$_smarty_tpl);?>
</span>

                <?php } else { ?>
                  <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                <?php }?>
              </p>
            <?php } else { ?>
              <br>
            <?php }?>
            <div class="clearfix" style="margin-top:5px">
              <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&($_smarty_tpl->tpl_vars['categoryProduct']->value['allow_oosp']||$_smarty_tpl->tpl_vars['categoryProduct']->value['quantity']>0)) {?>
                <div class="no-print">
                  <a class="button ajax_add_to_cart_button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product']);?>
<?php $_tmp21=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp21."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl);?>
">
                    <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl);?>
</span>
                  </a>
                </div>
              <?php }?>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php }?>
<?php }} ?>
