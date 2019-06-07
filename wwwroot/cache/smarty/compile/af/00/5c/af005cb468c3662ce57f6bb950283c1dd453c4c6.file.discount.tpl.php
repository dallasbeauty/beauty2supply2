<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:31
         compiled from "/home/site/wwwroot/themes/community-theme-default/discount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19894520275cf558473cec66-39962363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af005cb468c3662ce57f6bb950283c1dd453c4c6' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/discount.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19894520275cf558473cec66-39962363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'cart_rules' => 0,
    'nb_cart_rules' => 0,
    'discountDetail' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55847438466_65872920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55847438466_65872920')) {function content_5cf55847438466_65872920($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a>
  <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
  <span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['cart_rules']->value)&&count($_smarty_tpl->tpl_vars['cart_rules']->value)&&$_smarty_tpl->tpl_vars['nb_cart_rules']->value) {?>
  <div class="table-responsive">
    <table class="discount table table-bordered">
      <thead>
      <tr>
        <th class="discount_code"><?php echo smartyTranslate(array('s'=>'Code'),$_smarty_tpl);?>
</th>
        <th class="discount_description"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
        <th class="discount_quantity"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
        <th class="discount_value"><?php echo smartyTranslate(array('s'=>'Value'),$_smarty_tpl);?>
*</th>
        <th class="discount_minimum"><?php echo smartyTranslate(array('s'=>'Minimum'),$_smarty_tpl);?>
</th>
        <th class="discount_cumulative"><?php echo smartyTranslate(array('s'=>'Cumulative'),$_smarty_tpl);?>
</th>
        <th class="discount_expiration_date"><?php echo smartyTranslate(array('s'=>'Expiration date'),$_smarty_tpl);?>
</th>
      </tr>
      </thead>
      <tbody>
      <?php  $_smarty_tpl->tpl_vars['discountDetail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discountDetail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_rules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discountDetail']->key => $_smarty_tpl->tpl_vars['discountDetail']->value) {
$_smarty_tpl->tpl_vars['discountDetail']->_loop = true;
?>
        <tr>
          <td class="discount_code"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['code'];?>
</td>
          <td class="discount_description"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['name'];?>
</td>
          <td class="discount_quantity"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['quantity_for_user'];?>
</td>
          <td class="discount_value">

            <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent']>0) {?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent'], ENT_QUOTES, 'UTF-8', true);?>
%
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount']>0) {?>
              <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent']>0) {?> + <?php }?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount']),$_smarty_tpl);?>
 (<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_tax']==1) {?><?php echo smartyTranslate(array('s'=>'Tax included'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Tax excluded'),$_smarty_tpl);?>
<?php }?>)
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['free_shipping']) {?>
              <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent']>0||$_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount']>0) {?> + <?php }?>
              <?php echo smartyTranslate(array('s'=>'Free shipping'),$_smarty_tpl);?>

            <?php }?>

            
            <?php if (!empty($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_name'])) {?>
              <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product']>0) {?>
                <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent']>0||$_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount']>0||$_smarty_tpl->tpl_vars['discountDetail']->value['gift_product']) {?> + <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_name'];?>
 <?php echo smartyTranslate(array('s'=>'Free %s!','sprintf'=>$_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_name']),$_smarty_tpl);?>
!
              <?php }?>
            <?php }?>

          </td>
          <td class="discount_minimum">
            <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['minimal']==0) {?>
              <?php echo smartyTranslate(array('s'=>'None'),$_smarty_tpl);?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['minimal']),$_smarty_tpl);?>

            <?php }?>
          </td>
          <td class="discount_cumulative">
            <?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['cumulable']==1) {?>
              <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

            <?php } else { ?>
              <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

            <?php }?>
          </td>
          <td class="discount_expiration_date">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['discountDetail']->value['date_to']),$_smarty_tpl);?>

          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

<?php } else { ?>
  <div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You do not have any vouchers.'),$_smarty_tpl);?>
</div>
<?php }?>

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
