<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:32
         compiled from "/home/site/wwwroot/themes/community-theme-default/manufacturer-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13646440365cf558486c6bc0-40089046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44950ff4aa2b365b3176d68f2c0e54f8d810b091' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/manufacturer-list.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13646440365cf558486c6bc0-40089046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mediumDefaultWidth' => 0,
    'mediumDefaultHeight' => 0,
    'nbManufacturers' => 0,
    'errors' => 0,
    'manufacturer' => 0,
    'manufacturers' => 0,
    'link' => 0,
    'lazy_load' => 0,
    'img_manu_dir' => 0,
    'webp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55848720df5_62841085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55848720df5_62841085')) {function content_5cf55848720df5_62841085($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Manufacturers:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'medium_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?><?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['mediumDefaultWidth'] = new Smarty_variable($_tmp7, null, 0);?>
<?php ob_start();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'medium_default'),$_smarty_tpl);?>
<?php echo intval(ob_get_clean())?><?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['mediumDefaultHeight'] = new Smarty_variable($_tmp8, null, 0);?>
<?php if (ImageManager::retinaSupport()) {?>
  <?php $_smarty_tpl->tpl_vars['mediumDefaultWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['mediumDefaultWidth']->value*2, null, 0);?>
  <?php $_smarty_tpl->tpl_vars['mediumDefaultHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['mediumDefaultHeight']->value*2, null, 0);?>
<?php }?>

<div class="product-listing page-heading">
  <h1 class="pull-left product-listing-title"><?php echo smartyTranslate(array('s'=>'Brands'),$_smarty_tpl);?>
</h1>
  <div class="pull-right">
      <span class="heading-counter badge">
        <?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value==0) {?>
          <?php echo smartyTranslate(array('s'=>'There are no manufacturers.'),$_smarty_tpl);?>

        <?php } else { ?>
          <?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value==1) {?>
            <?php echo smartyTranslate(array('s'=>'There is 1 brand'),$_smarty_tpl);?>

          <?php } else { ?>
            <?php echo smartyTranslate(array('s'=>'There are %d brands','sprintf'=>$_smarty_tpl->tpl_vars['nbManufacturers']->value),$_smarty_tpl);?>

          <?php }?>
        <?php }?>
      </span>
  </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
  <?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value>0) {?>

    <div class="content_sortPagiBar clearfix">
      <div class="form-inline sortPagiBar clearfix">
        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer']->value)&&isset($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])&&$_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?>
          <?php echo $_smarty_tpl->getSubTemplate ('./product-list-switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div class="top-pagination-content form-inline clearfix">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1), 0);?>

      </div>
    </div>

    <ul id="manufacturers_list" class="list-grid row">
      <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
        <li class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
              <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                <noscript>
                  <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo intval($_smarty_tpl->tpl_vars['manufacturer']->value['image']);?>
-medium_default<?php if (ImageManager::retinaSupport()) {?>2x<?php }?>.jpg"
                       alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                       width="<?php echo $_smarty_tpl->tpl_vars['mediumDefaultWidth']->value;?>
"
                       height="<?php echo $_smarty_tpl->tpl_vars['mediumDefaultHeight']->value;?>
"
                  >
                </noscript>
              <?php }?>
              <picture class="img-responsive<?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?> tb-lazy-image<?php }?>">
                <!--[if IE 9]>
                <video style="display: none;"><![endif]-->
                <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                  <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w"
                          data-<?php }?>srcset="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo intval($_smarty_tpl->tpl_vars['manufacturer']->value['image']);?>
-medium_default<?php if (ImageManager::retinaSupport()) {?>2x<?php }?>.webp"
                          sizes="1px"
                          type="image/webp"
                  >
                <?php }?>
                <!--[if IE 9]></video><![endif]-->
                <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w"
                     data-<?php }?>srcset="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo intval($_smarty_tpl->tpl_vars['manufacturer']->value['image']);?>
-medium_default<?php if (ImageManager::retinaSupport()) {?>2x<?php }?>.jpg"
                     <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                     sizes="1px"
                     alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                     width="<?php echo $_smarty_tpl->tpl_vars['mediumDefaultWidth']->value;?>
"
                     height="<?php echo $_smarty_tpl->tpl_vars['mediumDefaultHeight']->value;?>
"
                >
              </picture>
            </a>
            <div class="caption">
              <h3 class="text-center">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </a>
              </h3>
              <?php if (isset($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])) {?>
                <p class="text-center">
                  <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']==1) {?>
                    <?php echo smartyTranslate(array('s'=>'%d product','sprintf'=>intval($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])),$_smarty_tpl);?>

                  <?php } else { ?>
                    <?php echo smartyTranslate(array('s'=>'%d products','sprintf'=>intval($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])),$_smarty_tpl);?>

                  <?php }?>
                </p>
              <?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value['short_description'])) {?>
                <div class="rte"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>
</div>
              <?php }?>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>

    <div class="content_sortPagiBar">
      <div class="bottom-pagination-content form-inline clearfix">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1,'paginationId'=>'bottom'), 0);?>

      </div>
    </div>
  <?php }?>
<?php }?>
<?php }} ?>
