<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:37
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/crossselling/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16709209305cf5584d5e0535-75519406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b46d7a12f70db545db6e70b02ba342c4eb03b6fc' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/crossselling/crossselling.tpl',
      1 => 1559580875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16709209305cf5584d5e0535-75519406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
    'orderProduct' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584d619ec6_76053827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584d619ec6_76053827')) {function content_5cf5584d619ec6_76053827($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&is_array($_smarty_tpl->tpl_vars['orderProducts']->value)&&!empty($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
    <section id="crossselling" class="page-product-box">
        <h2 class="productscategory_h2 page-product-heading">
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling'),$_smarty_tpl);?>

            <?php }?>
        </h2>
        <div id="crossselling_list">
            <ul id="crossselling_list_car" class="clearfix">
                <?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
                    <li class="product-box" itemprop="isRelatedTo" itemscope itemtype="https://schema.org/Product">
                        <article>
                            <a class="lnk_img product-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
                                <img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
"
                                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
"
                                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
                            </a>
                            <div class="s_title_block">
                                <h3 itemprop="name" class="product-name">
                                    <a itemprop="url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
                                        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </h3>

                                <?php if (isset($_smarty_tpl->tpl_vars['orderProduct']->value['description_short'])) {?>
                                    <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['orderProduct']->value['description_short']),50,'...');?>
</p><?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value&&$_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <p class="price_display">
                                    <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                                </p>
                            <?php }?>
                            <div class="clearfix" style="margin-top:5px">
                                <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&($_smarty_tpl->tpl_vars['orderProduct']->value['allow_oosp']||$_smarty_tpl->tpl_vars['orderProduct']->value['quantity']>0)) {?>
                                    <div class="no-print">
                                        <a class="button ajax_add_to_cart_button"
                                           href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['orderProduct']->value['id_product']);?>
<?php $_tmp20=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp20."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
"
                                           data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['orderProduct']->value['id_product']);?>
"
                                           title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'crossselling'),$_smarty_tpl);?>
">
                                            <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'crossselling'),$_smarty_tpl);?>
</span>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                        </article>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php }?>
<?php }} ?>
