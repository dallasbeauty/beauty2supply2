<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-05 12:39:04
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockbestsellers/blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12469836345cf7f0283a4574-79382382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8318731101a06eaa64fa1286d579548b467d9a38' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockbestsellers/blockbestsellers.tpl',
      1 => 1559580862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12469836345cf7f0283a4574-79382382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'best_sellers' => 0,
    'product' => 0,
    'lazy_load' => 0,
    'webp' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf7f02842e9f4_70891653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf7f02842e9f4_70891653')) {function content_5cf7f02842e9f4_70891653($_smarty_tpl) {?><section>
    <div id="best-sellers_block_right" class="block products_block">
        <h2 class="title_block section-title-column">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo smartyTranslate(array('s'=>'View a top sellers products','mod'=>'blockbestsellers'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a>
        </h2>
        <div class="block_content products-block">
            <?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&is_array($_smarty_tpl->tpl_vars['best_sellers']->value)&&!empty($_smarty_tpl->tpl_vars['best_sellers']->value)) {?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_sellers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                        <li class="clearfix">
                            <article>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"
                                   class="products-block-image content_img clearfix">
                                  <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                                    <noscript>
                                      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                           alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
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
                                    <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                            sizes="1px"
                                            type="image/webp"
                                    >
                                    <?php }?>
                                    <!--[if IE 9]></video><![endif]-->
                                    <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                         <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                                         sizes="1px"
                                         alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"
                                         width="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                         height="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'small_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?>"
                                    >
                                  </picture>
                                </a>
                                <div class="product-content">
                                    <h5>
                                        <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                           title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8', true);?>

                                        </a>
                                    </h5>
                                    <p class="product-description"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),75,'...');?>
</p>
                                    <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                        <div class="price-box">
                                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                                            <?php echo smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

                                        </div>
                                    <?php }?>
                                </div>
                            </article>
                        </li>
                    <?php } ?>
                </ul>
                <div class="lnk">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
"
                       class="btn btn-primary"><span><?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
 <i
                                    class="icon icon-chevron-right"></i></span></a>
                </div>
            <?php } else { ?>
                <p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</p>
            <?php }?>
        </div>
    </div>
</section>
<?php }} ?>
