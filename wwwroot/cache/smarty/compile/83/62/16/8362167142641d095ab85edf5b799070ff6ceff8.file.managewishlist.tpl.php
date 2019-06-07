<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/views/templates/front/managewishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16472166875cf5584c8a14d7-07137245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8362167142641d095ab85edf5b799070ff6ceff8' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/views/templates/front/managewishlist.tpl',
      1 => 1559582116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16472166875cf5584c8a14d7-07137245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'refresh' => 0,
    'productsBoughts' => 0,
    'token_wish' => 0,
    'link' => 0,
    'product' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'id_wishlist' => 0,
    'wishlists' => 0,
    'wishlist' => 0,
    'bought' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584c9aa423_01136127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584c9aa423_01136127')) {function content_5cf5584c9aa423_01136127($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
  <?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
    <div class="wishlistLinkTop">
      <a id="hideWishlist" class="button_account pull-right" href="#" onclick="WishlistVisibility('wishlistLinkTop', 'Wishlist'); return false;" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Close this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
        <i class="icon icon-remove"></i>
      </a>
      <ul class="clearfix display_list">
        <li>
          <a id="hideBoughtProducts" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo smartyTranslate(array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl);?>

          </a>
          <a id="showBoughtProducts" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo smartyTranslate(array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl);?>

          </a>
        </li>
        <?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
          <li>
            <a id="hideBoughtProductsInfos" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo smartyTranslate(array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
              <?php echo smartyTranslate(array('s'=>"Hide bought products' info",'mod'=>'blockwishlist'),$_smarty_tpl);?>

            </a>
            <a id="showBoughtProductsInfos" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo smartyTranslate(array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
              <?php echo smartyTranslate(array('s'=>"Show bought products' info",'mod'=>'blockwishlist'),$_smarty_tpl);?>

            </a>
          </li>
        <?php }?>
      </ul>
      <div class="wishlisturl form-group">
        <label><?php echo smartyTranslate(array('s'=>'Permalink','mod'=>'blockwishlist'),$_smarty_tpl);?>
:</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','view',array('token'=>$_smarty_tpl->tpl_vars['token_wish']->value)), ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly">
      </div>
      <div class="submit">
        <div id="showSendWishlist">
          <a class="btn btn-success" href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="<?php echo smartyTranslate(array('s'=>'Send this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
            <span><?php echo smartyTranslate(array('s'=>'Send this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
          </a>
        </div>
      </div>
    </div>
  <?php }?>
  <div class="wlp_bought">
    <ul class="row wlp_bought_list">
      <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <li id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
            class="col-xs-12 col-sm-4 col-md-3">
          <div class="row">
            <div class="col-xs-6 col-sm-12">
              <div class="product_image">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
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
                  <picture class="replace-2x img-responsive<?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?> tb-lazy-image<?php }?>">
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
                <a class="lnkdel" href="javascript:;" onclick="WishlistProductManage('wlp_bought', 'delete', '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', $('#quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val(), $('#priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val());" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                  <i class="icon icon-remove-sign"></i>
                </a>

                <p id="s_title" class="product-name">
                  <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>

                  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                    <small>
                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>

                      </a>
                    </small>
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
                    <input type="text" class="form-control" id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3">
                  </div>

                  <div class="form-group">
                    <label for="priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
                      <?php echo smartyTranslate(array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl);?>
:
                    </label>
                    <select id="priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" class="form-control">
                      <option value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==0) {?> selected="selected"<?php }?>>
                        <?php echo smartyTranslate(array('s'=>'High','mod'=>'blockwishlist'),$_smarty_tpl);?>

                      </option>
                      <option value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==1) {?> selected="selected"<?php }?>>
                        <?php echo smartyTranslate(array('s'=>'Medium','mod'=>'blockwishlist'),$_smarty_tpl);?>

                      </option>
                      <option value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==2) {?> selected="selected"<?php }?>>
                        <?php echo smartyTranslate(array('s'=>'Low','mod'=>'blockwishlist'),$_smarty_tpl);?>

                      </option>
                    </select>
                  </div>
                </div>
                <div class="btn_action">
                  <a class="btn btn-success"  href="javascript:;" onclick="WishlistProductManage('wlp_bought_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', 'update', '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', $('#quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val(), $('#priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val());" title="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                    <span><?php echo smartyTranslate(array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                  </a>
                  <?php if (count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
                    <?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['wishlist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->index++;
 $_smarty_tpl->tpl_vars['wishlist']->first = $_smarty_tpl->tpl_vars['wishlist']->index === 0;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['first'] = $_smarty_tpl->tpl_vars['wishlist']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
                      <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['first']) {?>
                        <a class="btn btn-default wishlist_change_button" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Move to a wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" data-placement="top">
                          <span><?php echo smartyTranslate(array('s'=>'Move','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                        </a>
                        <div hidden class="popover-content">
                        <table class="table" border="1">
                        <tbody>
                      <?php }?>
                      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
<?php $_tmp19=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['id_wishlist']->value!=$_tmp19) {?>
                        <tr title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
" onclick="wishlistProductChange(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
, <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
, '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
');">
                          <td>
                            <?php echo smartyTranslate(array('s'=>sprintf('Move to %s',$_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'blockwishlist'),$_smarty_tpl);?>

                          </td>
                        </tr>
                      <?php }?>
                      <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['last']) {?>
                        </tbody>
                        </table>
                        </div>
                      <?php }?>
                    <?php } ?>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
  <?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
    <form method="post" class="wl_send box unvisible" onsubmit="return (false);">
      <a id="hideSendWishlist" class="button_account btn"  href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Close this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
        <i class="icon icon-remove"></i>
      </a>
      <fieldset>
        <div class="required form-group">
          <label for="email1"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'blockwishlist'),$_smarty_tpl);?>
1 <sup>*</sup></label>
          <input type="text" name="email1" id="email1" class="form-control">
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) 2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
          <div class="form-group">
            <label for="email<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'blockwishlist'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</label>
            <input type="text" name="email<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" id="email<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"
                   class="form-control">
          </div>
        <?php endfor; endif; ?>
        <div class="submit">
          <button class="btn btn-success" type="submit" name="submitWishlist"
                  onclick="WishlistSend('wl_send', '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', 'email');">
            <span><?php echo smartyTranslate(array('s'=>'Send','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
          </button>
        </div>
        <p class="required">
          <sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required field','mod'=>'blockwishlist'),$_smarty_tpl);?>

        </p>
      </fieldset>
    </form>
    <?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
      <div class="table-responsive">
        <table class="wlp_bought_infos unvisible table table-bordered">
          <thead>
          <tr>
            <th><?php echo smartyTranslate(array('s'=>'Product','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Offered by','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Date','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
          </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsBoughts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['bought'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bought']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['bought']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bought']->key => $_smarty_tpl->tpl_vars['bought']->value) {
$_smarty_tpl->tpl_vars['bought']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['bought']->value['quantity']>0) {?>
                <tr>
                  <td>
                    <span style="float:left;">
                      <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                        <noscript>
                          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
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
                          <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'small_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                  type="image/webp"
                          >
                        <?php }?>
                        <!--[if IE 9]></video><![endif]-->
                        <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
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
                    </span>
                    <span style="float:left;">
                      <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],40,'...'), ENT_QUOTES, 'UTF-8', true);?>

                      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                        <br>
                        <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</i>
                      <?php }?>
                    </span>
                  </td>
                  <td class="align_center">
                    <?php echo intval($_smarty_tpl->tpl_vars['bought']->value['quantity']);?>

                  </td>
                  <td class="align_center">
                    <?php echo $_smarty_tpl->tpl_vars['bought']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['bought']->value['lastname'];?>

                  </td>
                  <td class="align_center">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bought']->value['date_add'],"%Y-%m-%d");?>

                  </td>
                </tr>
              <?php }?>
            <?php } ?>
          <?php } ?>
          </tbody>
        </table>
      </div>
    <?php }?>
  <?php }?>
<?php } else { ?>
  <div class="alert alert-warning">
    <?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl);?>

  </div>
<?php }?>
<?php }} ?>
