<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751105395cf5584c25fa55-13627945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '940ac8d2d458aeaa15e647d7de6e950100f77dc8' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockviewed/blockviewed.tpl',
      1 => 1559580873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751105395cf5584c25fa55-13627945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
    'viewedProduct' => 0,
    'lazy_load' => 0,
    'link' => 0,
    'img_prod_dir' => 0,
    'lang_iso' => 0,
    'webp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584c2a26c6_59473037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584c2a26c6_59473037')) {function content_5cf5584c2a26c6_59473037($_smarty_tpl) {?><section>
    <div id="viewed-products_block_left" class="block">
        <h2 class="title_block section-title-column"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h2>
        <div class="block_content products-block">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsViewedObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value) {
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
?>
                    <li class="clearfix">
                        <article>
                            <a class="products-block-image"
                               href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
"
                               title="<?php echo smartyTranslate(array('s'=>'More about %s','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
"
                            >
                              <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                                <noscript>
                                  <img src="<?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small_default',null,ImageManager::retinaSupport());?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg<?php }?>"
                                       alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
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
                                  <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small_default','webp',ImageManager::retinaSupport());?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.webp<?php }?>"
                                          type="image/webp"
                                  >
                                <?php }?>
                                <!--[if IE 9]></video><![endif]-->
                                <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small_default',null,ImageManager::retinaSupport());?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg<?php }?>"
                                     <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
"
                                     width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                     height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                >
                              </picture>
                            </a>
                            <div class="product-content">
            <span>
              <a class="product-name"
                 href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
"
                 title="<?php echo smartyTranslate(array('s'=>'More about %s','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
">
                <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value->name,25,'...'), ENT_QUOTES, 'UTF-8', true);?>

              </a>
            </span>
                                <p class="product-description"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),40);?>
</p>
                            </div>
                        </article>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<?php }} ?>
