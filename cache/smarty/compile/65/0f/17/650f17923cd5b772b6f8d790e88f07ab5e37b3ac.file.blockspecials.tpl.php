<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockspecials/blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3997677945cf5584b845fe6-06097618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650f17923cd5b772b6f8d790e88f07ab5e37b3ac' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockspecials/blockspecials.tpl',
      1 => 1559580871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3997677945cf5584b845fe6-06097618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584b8efbf3_30618542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b8efbf3_30618542')) {function content_5cf5584b8efbf3_30618542($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?><section>
    <div id="special_block_right" class="block">
        <h2 class="title_block section-title-column">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>

            </a>
        </h2>
        <div class="block_content products-block">
            <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>
                <ul>
                    <li class="clearfix">
                        <article>
                            <a class="products-block-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                              <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                                <noscript>
                                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                       alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"
                                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                       width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                       height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                  >
                                </noscript>
                              <?php }?>
                              <picture class="img-responsive<?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?> tb-lazy-image<?php }?>">
                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                                  <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'small_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                          title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                          type="image/webp"
                                  >
                                <?php }?>
                                <!--[if IE 9]></video><![endif]-->
                                <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                     <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"
                                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                     width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                     height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                >
                              </picture>

                            </a>
                            <div class="product-content">
                                <h3 class="product-title">
                                    <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </h3>
                                <?php if (isset($_smarty_tpl->tpl_vars['special']->value['description_short'])&&$_smarty_tpl->tpl_vars['special']->value['description_short']) {?>
                                    <p class="product-description">
                                        <?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['special']->value['description_short']),40);?>

                                    </p>
                                <?php }?>
                                <div class="price-box">
                                    <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                        <span class="price special-price">
                  <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_tax_exc']),$_smarty_tpl);?>

                  <?php }?>
                </span>
                                        <?php if ($_smarty_tpl->tpl_vars['special']->value['specific_prices']) {?>
                                            <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['special']->value['specific_prices'], null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))) {?>
                                                <span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>

                                                    %</span>
                                            <?php }?>
                                        <?php }?>
                                        <span class="old-price">
                  <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_without_reduction']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['priceWithoutReduction_tax_excl']->value),$_smarty_tpl);?>

                  <?php }?>
                </span>
                                        <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['special']->value,'type'=>"price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
                <div>
                    <a
                            class="btn btn-primary"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
"
                            title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
                        <span><?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i></span>
                    </a>
                </div>
            <?php } else { ?>
                <div><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</div>
            <?php }?>
        </div>
    </div>
</section>
<?php }} ?>
