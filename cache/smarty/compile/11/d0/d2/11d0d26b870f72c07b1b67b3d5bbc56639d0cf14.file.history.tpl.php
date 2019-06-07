<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:31
         compiled from "/home/site/wwwroot/themes/community-theme-default/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11268698195cf55847b9dee7-15216166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11d0d26b870f72c07b1b67b3d5bbc56639d0cf14' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/history.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11268698195cf55847b9dee7-15216166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'slowValidation' => 0,
    'orders' => 0,
    'order' => 0,
    'img_dir' => 0,
    'invoiceAllowed' => 0,
    'reorderingAllowed' => 0,
    'opc' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55847c1b089_64990279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55847c1b089_64990279')) {function content_5cf55847c1b089_64990279($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
    <?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>

  </a>
  <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
  <span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Order history'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Order history'),$_smarty_tpl);?>
</h1>
<p><b><?php echo smartyTranslate(array('s'=>'Here are the orders you\'ve placed since your account was created.'),$_smarty_tpl);?>
</b></p>
<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value) {?>
  <div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'),$_smarty_tpl);?>
</div>
<?php }?>
<div class="block-center" id="block-history">
  <?php if ($_smarty_tpl->tpl_vars['orders']->value&&count($_smarty_tpl->tpl_vars['orders']->value)) {?>
    <div class="table-responsive">
      <table id="order-list" class="table table-bordered footab">
        <thead>
        <tr>
          <th data-sort-ignore="true"><?php echo smartyTranslate(array('s'=>'Order reference'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
          <th data-hide="phone"><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</th>
          <th data-sort-ignore="true" data-hide="phone,tablet"><?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
          <th data-sort-ignore="true" data-hide="phone,tablet"><?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
</th>
          <th data-sort-ignore="true" data-hide="phone,tablet">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
          <tr>
            <td class="history_link bold">
              <?php if (isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['virtual'])&&$_smarty_tpl->tpl_vars['order']->value['virtual']) {?>
                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" alt="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
">
              <?php }?>
              <a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,null,"id_order=".$_tmp3), ENT_QUOTES, 'UTF-8', true);?>
');">
                <?php echo Order::getUniqReferenceOf($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

              </a>
            </td>
            <td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['order']->value['date_add'],"/[\-\:\ ]/",'');?>
" class="history_date bold">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>

            </td>
            <td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid'];?>
">
            <span class="price">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl);?>

            </span>
            </td>
            <td class="history_method"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['payment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <td<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])) {?> data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order_state'];?>
"<?php }?> class="history_state">
              <?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])) {?>
                <span class="label<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])&&Tools::getBrightness($_smarty_tpl->tpl_vars['order']->value['order_state_color'])>128) {?> dark<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])&&$_smarty_tpl->tpl_vars['order']->value['order_state_color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?>>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state'], ENT_QUOTES, 'UTF-8', true);?>

              </span>
              <?php }?>
            </td>
            <td class="history_invoice">
              <?php if ((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&$_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value==true) {?>
                <a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
" target="_blank">
                  <i class="icon icon-file-text large"></i> <?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>

                </a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
            <td class="history_detail">
              <a class="btn btn-default" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp4=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,null,"id_order=".$_tmp4), ENT_QUOTES, 'UTF-8', true);?>
');">
              <span>
                <?php echo smartyTranslate(array('s'=>'Details'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i>
              </span>
              </a>
              <?php if (isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)&&$_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value) {?>
                  <a class="btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp5=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,null,"submitReorder&id_order=".$_tmp5), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
">
                <?php } else { ?>
                  <a class="btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp6=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"submitReorder&id_order=".$_tmp6), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
">
                <?php }?>
                    <i class="icon icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>

                  </a>
              <?php }?>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    <div id="block-order-detail" class="unvisible">&nbsp;</div>
  <?php } else { ?>
    <div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have not placed any orders.'),$_smarty_tpl);?>
</div>
  <?php }?>
</div>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo smartyTranslate(array('s'=>'Back to your account'),$_smarty_tpl);?>

      </a>
    </li>
  </ul>
</nav>

<?php }} ?>
