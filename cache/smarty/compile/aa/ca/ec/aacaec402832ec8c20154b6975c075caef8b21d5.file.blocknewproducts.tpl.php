<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:34
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocknewproducts/blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2447741175cf5584adedf65-56561882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aacaec402832ec8c20154b6975c075caef8b21d5' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocknewproducts/blocknewproducts.tpl',
      1 => 1559580869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2447741175cf5584adedf65-56561882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'new_products' => 0,
    'newproduct' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584ae5d0d8_12762714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584ae5d0d8_12762714')) {function content_5cf5584ae5d0d8_12762714($_smarty_tpl) {?><section>
    <div id="new-products_block_right" class="block products_block">
        <h2 class="title_block section-title-column">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
        </h2>
        <div class="block_content products-block">
            <?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false) {?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['newproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newproduct']->key => $_smarty_tpl->tpl_vars['newproduct']->value) {
$_smarty_tpl->tpl_vars['newproduct']->_loop = true;
?>
                        <li class="clearfix">
                            <article>
                                <a class="products-block-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><img
                                            class="replace-2x img-responsive"
                                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['newproduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['newproduct']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
"
                                            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                           title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['newproduct']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </h3>
                                    <p class="product-description"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['description_short']),75,'...');?>
</p>
                                    <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['newproduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])))) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['newproduct']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <div class="price-box">
                    <span class="price">
                      <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                    </span>
                                                <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['newproduct']->value,'type'=>"price"),$_smarty_tpl);?>

                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                            </article>
                        </li>
                    <?php } ?>
                </ul>
                <div>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"
                       class="btn btn-primary"><span><?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
 <i
                                    class="icon icon-chevron-right"></i></span></a>
                </div>
            <?php } else { ?>
                <p>&raquo; <?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
            <?php }?>
        </div>
    </div>
</section>
<?php }} ?>
