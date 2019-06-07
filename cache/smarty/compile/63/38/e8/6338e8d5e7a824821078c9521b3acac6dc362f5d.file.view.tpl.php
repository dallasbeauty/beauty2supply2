<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/views/templates/front/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19095008155cf5584cb442e1-57136308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6338e8d5e7a824821078c9521b3acac6dc362f5d' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/views/templates/front/view.tpl',
      1 => 1559582116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19095008155cf5584cb442e1-57136308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'current_wishlist' => 0,
    'wishlists' => 0,
    'wishlist' => 0,
    'products' => 0,
    'product' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'ajax' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584cbafd16_35221188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584cbafd16_35221188')) {function content_5cf5584cbafd16_35221188($_smarty_tpl) {?><div id="view_wishlist">
  <?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current_wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

  <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

  <h1 class="page-heading">
    <?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

  </h1>
  <?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
    <p>
      <strong>
        <?php echo smartyTranslate(array('s'=>'Other wishlists of %1s %2s:','sprintf'=>array($_smarty_tpl->tpl_vars['current_wishlist']->value['firstname'],$_smarty_tpl->tpl_vars['current_wishlist']->value['lastname']),'mod'=>'blockwishlist'),$_smarty_tpl);?>

      </strong>
      <?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
        <?php if ($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist']!=$_smarty_tpl->tpl_vars['current_wishlist']->value['id_wishlist']) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','view',array('token'=>$_smarty_tpl->tpl_vars['wishlist']->value['token'])), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

          </a>
          <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']) {?>
            /
          <?php }?>
        <?php }?>
      <?php } ?>
    </p>
  <?php }?>

  <div class="wlp_bought">
    <ul class="row wlp_bought_list">
      <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
        <li
          id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
          class="ajax_block_product col-xs-12 col-sm-6 col-md-4">
          <div class="row">
            <div class="col-xs-6 col-sm-12">
              <div class="product_image">
                <a
                  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                  title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
"
                >
                  <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                    <noscript>
                      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                           alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                           width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                           height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                      >
                    </noscript>
                  <?php }?>
                  <picture class="img-responsive<?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?> tb-lazy-image<?php }?>">
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                    <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                      <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                              type="image/webp"
                      >
                    <?php }?>
                    <!--[if IE 9]></video><![endif]-->
                    <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                         <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                         alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                         width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                         height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                    >
                  </picture>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-12">
              <div class="product_infos">
                <p id="s_title" class="product-name">
                  <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>

                  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                    <a
                      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                      title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                      <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</small>
                    </a>
                  <?php }?>
                </p>
                <div class="wishlist_product_detail">
                  <div class="form-group">
                    <label for="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
                      <?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl);?>
:
                    </label>
                    <input class="form-control" type="text"
                           id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
                           value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3">
                  </div>

                  <div class="form-group selector1">
                    <span><strong><?php echo smartyTranslate(array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['product']->value['priority_name'];?>
</span>
                  </div>
                  <div class="btn_action">
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['attribute_quantity']>=1)||(!isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_quantity']>=1)||(isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])&&$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
                      <?php if (!$_smarty_tpl->tpl_vars['ajax']->value) {?>
                        <form id="addtocart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"
                              action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
"
                              method="post">
                          <p class="hidden">
                            <input type="hidden" name="id_product"
                                   value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
                                   id="product_page_product_id">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
                            <input type="hidden" name="id_product_attribute"
                                   id="idCombination"
                                   value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
">
                          </p>
                        </form>
                      <?php }?>
                      <a
                        href="javascript:void(0);"
                        class="button ajax_add_to_cart_button btn btn-default"
                        onclick="WishlistBuyProduct('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', this, <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
);"
                        title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
"
                        rel="nofollow">
                        <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                      </a>
                    <?php } else { ?>
                      <span class="button ajax_add_to_cart_button btn btn-default disabled">
                        <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                      </span>
                    <?php }?>
                    <a
                      class="btn btn-default"
                      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                      title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
"
                      rel="nofollow">
                      <span><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>
<?php }} ?>
