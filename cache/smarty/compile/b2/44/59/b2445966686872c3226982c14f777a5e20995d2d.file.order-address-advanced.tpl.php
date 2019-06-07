<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:02
         compiled from "/home/site/wwwroot/themes/community-theme-default/order-address-advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20698621245cf558dea1a656-47294235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2445966686872c3226982c14f777a5e20995d2d' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/order-address-advanced.tpl',
      1 => 1559580414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20698621245cf558dea1a656-47294235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'products' => 0,
    'product' => 0,
    'delivery_option' => 0,
    'isVirtualCart' => 0,
    'delivery' => 0,
    'invoice' => 0,
    'cart' => 0,
    'addresses' => 0,
    'address' => 0,
    'back_order_page' => 0,
    'back' => 0,
    'link' => 0,
    'formatedAddressFieldsValuesList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558deaf7ab5_71118084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558deaf7ab5_71118084')) {function content_5cf558deaf7ab5_71118084($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
  <?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order-opc.php", null, 0);?>
<?php } else { ?>
  <?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order.php", null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual']==0) {?>
    <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(true, null, 0);?>
    <?php break 1?>
  <?php }?>
<?php } ?>
<h2><?php echo smartyTranslate(array('s'=>'Address Details'),$_smarty_tpl);?>
</h2>
<?php if (((!empty($_smarty_tpl->tpl_vars['delivery_option']->value)&&(!isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)||!$_smarty_tpl->tpl_vars['isVirtualCart']->value))||$_smarty_tpl->tpl_vars['delivery']->value->id||$_smarty_tpl->tpl_vars['invoice']->value->id)) {?>
  <div class="addresses clearfix">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="address_delivery select form-group selector1">
          <label for="id_address_delivery"><?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?><?php echo smartyTranslate(array('s'=>'Choose a billing address:'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Choose a delivery address:'),$_smarty_tpl);?>
<?php }?></label>
          <select name="id_address_delivery" id="id_address_delivery" class="address_select form-control">
            <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
              <option value="<?php echo intval($_smarty_tpl->tpl_vars['address']->value['id_address']);?>
"<?php if ($_smarty_tpl->tpl_vars['address']->value['id_address']==$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery) {?> selected="selected"<?php }?>>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>

              </option>
            <?php } ?>
          </select><span class="waitimage"></span>
        </div>
        <p class="checkbox addressesAreEquals"<?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?> style="display:none;"<?php }?>>
          <input type="checkbox" name="same" id="addressesAreEquals" value="1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->id_address_invoice==$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery||count($_smarty_tpl->tpl_vars['addresses']->value)==1) {?> checked="checked"<?php }?>>
          <label for="addressesAreEquals"><?php echo smartyTranslate(array('s'=>'Use the delivery address as the billing address.'),$_smarty_tpl);?>
</label>
        </p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div id="address_invoice_form" class="select form-group selector1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->id_address_invoice==$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery) {?> style="display: none;"<?php }?>>
          <?php if (count($_smarty_tpl->tpl_vars['addresses']->value)>1) {?>
            <label for="id_address_invoice" class="strong"><?php echo smartyTranslate(array('s'=>'Choose a billing address:'),$_smarty_tpl);?>
</label>
            <select name="id_address_invoice" id="id_address_invoice" class="address_select form-control">
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['address'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['address']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['addresses']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['name'] = 'address';
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total']);
?>
                <option value="<?php echo intval($_smarty_tpl->tpl_vars['addresses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['id_address']);?>
"<?php if ($_smarty_tpl->tpl_vars['addresses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['id_address']==$_smarty_tpl->tpl_vars['cart']->value->id_address_invoice&&$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery!=$_smarty_tpl->tpl_vars['cart']->value->id_address_invoice) {?> selected="selected"<?php }?>>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addresses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['alias'], ENT_QUOTES, 'UTF-8', true);?>

                </option>
              <?php endfor; endif; ?>
            </select>
            <span class="waitimage"></span>
          <?php } else { ?>
            <a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value) {?><?php echo "&mod=";?><?php echo (string)$_smarty_tpl->tpl_vars['back']->value;?><?php }?><?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1&select_address=1".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" class="button button-small btn btn-default">
              <span>
                  <?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>

                <i class="icon-chevron-right right"></i>
              </span>
            </a>
          <?php }?>
        </div>
      </div>
    </div> <!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?> style="display:none;"<?php }?>>
        <ul class="address item box" id="address_delivery">
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6">
        <ul class="address alternate_item<?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?> full_width<?php }?> box" id="address_invoice">
        </ul>
      </div>
    </div> <!-- end row -->
    <p class="address_add submit">
      <a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value) {?><?php echo "&mod=";?><?php echo (string)$_smarty_tpl->tpl_vars['back']->value;?><?php }?><?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1".$_tmp2), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" class="button button-small btn btn-default">
        <span><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
      </a>
    </p>

  </div>
  <!-- end addresses -->
  <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['back']->value) {?>&mod=<?php echo urlencode($_smarty_tpl->tpl_vars['back']->value);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('addressUrl', null, null); ob_start(); ?><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,((('back=').($_smarty_tpl->tpl_vars['back_order_page']->value)).('?step=1')).(Smarty::$_smarty_vars['capture']['default'])));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressUrl'=>Smarty::$_smarty_vars['capture']['addressUrl']),$_smarty_tpl);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php echo urlencode('&multi-shipping=1');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressMultishippingUrl'=>(Smarty::$_smarty_vars['capture']['addressUrl']).(Smarty::$_smarty_vars['capture']['default'])),$_smarty_tpl);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('addressUrlAdd', null, null); ob_start(); ?><?php echo (Smarty::$_smarty_vars['capture']['addressUrl']).('&id_address=');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressUrlAdd'=>Smarty::$_smarty_vars['capture']['addressUrlAdd']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('formatedAddressFieldsValuesList'=>$_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('opc'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['opc']->value)),$_smarty_tpl);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your billing address','js'=>1),$_smarty_tpl);?>
</h3><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'titleInvoice')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleInvoice'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo addcslashes(Smarty::$_smarty_vars['capture']['default'],'\'');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleInvoice'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your delivery address','js'=>1),$_smarty_tpl);?>
</h3><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'titleDelivery')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleDelivery'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo addcslashes(Smarty::$_smarty_vars['capture']['default'],'\'');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleDelivery'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><a class="button button-small btn btn-default" href="<?php echo Smarty::$_smarty_vars['capture']['addressUrlAdd'];?>
" title="<?php echo smartyTranslate(array('s'=>'Update','js'=>1),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Update','js'=>1),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'liUpdate')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'liUpdate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo addcslashes(Smarty::$_smarty_vars['capture']['default'],'\'');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'liUpdate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php }} ?>
