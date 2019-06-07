<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:29
         compiled from "/home/site/wwwroot/themes/community-theme-default/authentication-create-opc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10215449295cf55845876869-65878653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ecc07516266f0d116008ceb76506be53f418ba0' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/authentication-create-opc.tpl',
      1 => 1559580411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10215449295cf55845876869-65878653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'day' => 0,
    'sl_day' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'month' => 0,
    'years' => 0,
    'year' => 0,
    'sl_year' => 0,
    'newsletter' => 0,
    'optin' => 0,
    'dlv_all_fields' => 0,
    'field_name' => 0,
    'required_fields' => 0,
    'vat_display' => 0,
    'address' => 0,
    'countries' => 0,
    'v' => 0,
    'sl_country' => 0,
    'stateExist' => 0,
    'postCodeExist' => 0,
    'dniExist' => 0,
    'one_phone_at_least' => 0,
    'inv_all_fields' => 0,
    'HOOK_CREATE_ACCOUNT_FORM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558459bace7_01101473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558459bace7_01101473')) {function content_5cf558459bace7_01101473($_smarty_tpl) {?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back']->value)), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="new_account_form" class="std clearfix">
  <div class="box">
    <div id="opc_account_form" style="display: block; ">
      <h3 class="page-heading"><?php echo smartyTranslate(array('s'=>'Instant checkout'),$_smarty_tpl);?>
</h3>
      <p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
      <div class="required form-group">
        <label for="guest_email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
 <sup>*</sup></label>
        <input type="text" class="is_required validate form-control" data-validate="isEmail" id="guest_email" name="guest_email" value="<?php if (isset($_POST['guest_email'])) {?><?php echo $_POST['guest_email'];?>
<?php }?>">
      </div>
      <div class="form-group gender-line">
        <label><?php echo smartyTranslate(array('s'=>'Title'),$_smarty_tpl);?>
</label>
        <div>
          <?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
            <label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="radio-inline">
              <input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
"<?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id) {?> checked="checked"<?php }?>>
              <?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>

            </label>
          <?php } ?>
        </div>
      </div>
      <div class="required form-group">
        <label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
        <input type="text" class="is_required validate form-control" data-validate="isName" id="firstname" name="firstname" value="<?php if (isset($_POST['firstname'])) {?><?php echo $_POST['firstname'];?>
<?php }?>">
      </div>
      <div class="required form-group">
        <label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
        <input type="text" class="is_required validate form-control" data-validate="isName" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])) {?><?php echo $_POST['lastname'];?>
<?php }?>">
      </div>
      <div class="form-group date-select">
        <label><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
</label>
        <div class="row">
          <div class="col-xs-4">
            <select id="days" name="days" class="form-control">
              <option value="">-</option>
              <?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['day']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
&nbsp;&nbsp;</option>
              <?php } ?>
            </select>
            
          </div>
          <div class="col-xs-4">
            <select id="months" name="months" class="form-control">
              <option value="">-</option>
              <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['month']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)) {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>
&nbsp;</option>
              <?php } ?>
            </select>
          </div>
          <div class="col-xs-4">
            <select id="years" name="years" class="form-control">
              <option value="">-</option>
              <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['year']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&nbsp;&nbsp;</option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
      <?php if (isset($_smarty_tpl->tpl_vars['newsletter']->value)&&$_smarty_tpl->tpl_vars['newsletter']->value) {?>
        <div class="checkbox">
          <label for="newsletter">
            <input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']=='1') {?>checked="checked"<?php }?>>
            <?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>

          </label>
        </div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['optin']->value)&&$_smarty_tpl->tpl_vars['optin']->value) {?>
        <div class="checkbox">
          <label for="optin">
            <input type="checkbox" name="optin" id="optin" value="1" <?php if (isset($_POST['optin'])&&$_POST['optin']=='1') {?>checked="checked"<?php }?>>
            <?php echo smartyTranslate(array('s'=>'Receive special offers from our partners!'),$_smarty_tpl);?>

          </label>
        </div>
      <?php }?>
      <h3 class="page-heading"><?php echo smartyTranslate(array('s'=>'Delivery address'),$_smarty_tpl);?>
</h3>
      <?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company") {?>
          <div class="form-group">
            <label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
            <input type="text" class="form-control" id="company" name="company" value="<?php if (isset($_POST['company'])) {?><?php echo $_POST['company'];?>
<?php }?>">
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="vat_number") {?>
          <?php if (isset($_smarty_tpl->tpl_vars['vat_display']->value)&&$_smarty_tpl->tpl_vars['vat_display']->value>=3) {?>
            <div class="checkbox">
              <label for="vat-exemption">
                <input
                        type="checkbox"
                        name="vat_exemption"
                        id="vat-exemption"
                        value="1"
                        <?php if ((isset($_smarty_tpl->tpl_vars['address']->value->vat_exemption)&&$_smarty_tpl->tpl_vars['address']->value->vat_exemption)||(isset($_smarty_tpl->tpl_vars['address']->value->vat_number)&&strlen($_smarty_tpl->tpl_vars['address']->value->vat_number))) {?>
                          checked="checked"
                        <?php }?>
                >
                <?php echo smartyTranslate(array('s'=>'Yes, I qualify for VAT Relief!'),$_smarty_tpl);?>

              </label>
            </div>
            <p id="vat-exemption-hint" class="help-block" style="display: none;">
              <?php echo smartyTranslate(array('s'=>'You\'ll get asked to verify your qualification.'),$_smarty_tpl);?>

            </p>
          <?php }?>
          <div id="vat_number" style="display:none;">
            <div class="form-group">
              <label for="vat-number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
              <input id="vat-number" type="text" class="form-control" name="vat_number" value="<?php if (isset($_POST['vat_number'])) {?><?php echo $_POST['vat_number'];?>
<?php }?>">
            </div>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="dni") {?>
          <?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
          <div class="required dni form-group">
            <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" name="dni" id="dni" value="<?php if (isset($_POST['dni'])) {?><?php echo $_POST['dni'];?>
<?php }?>">
            <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address1") {?>
          <div class="required form-group">
            <label for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control" name="address1" id="address1" value="<?php if (isset($_POST['address1'])) {?><?php echo $_POST['address1'];?>
<?php }?>">
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address2") {?>
          <div class="form-group is_customer_param">
            <label for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
            <input type="text" class="form-control" name="address2" id="address2" value="<?php if (isset($_POST['address2'])) {?><?php echo $_POST['address2'];?>
<?php }?>">
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="postcode") {?>
          <?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
          <div class="required postcode form-group">
            <label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if (isset($_POST['postcode'])) {?><?php echo $_POST['postcode'];?>
<?php }?>">
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="city") {?>
          <div class="required form-group">
            <label for="city"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control" name="city" id="city" value="<?php if (isset($_POST['city'])) {?><?php echo $_POST['city'];?>
<?php }?>">
          </div>
          
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="Country:name"||$_smarty_tpl->tpl_vars['field_name']->value=="country") {?>
          <div class="required select form-group">
            <label for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <select name="id_country" id="id_country" class="form-control">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_POST['id_country'])&&$_POST['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_POST['id_country'])&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
              <?php } ?>
            </select>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="State:name") {?>
          <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
          <div class="required id_state select form-group">
            <label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <select name="id_state" id="id_state" class="form-control">
              <option value="">-</option>
            </select>
          </div>
        <?php }?>
      <?php } ?>
      <?php if ($_smarty_tpl->tpl_vars['stateExist']->value==false) {?>
        <div class="required id_state select unvisible form-group">
          <label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
          <select name="id_state" id="id_state" class="form-control">
            <option value="">-</option>
          </select>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['postCodeExist']->value==false) {?>
        <div class="required postcode unvisible form-group">
          <label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
          <input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if (isset($_POST['postcode'])) {?><?php echo $_POST['postcode'];?>
<?php }?>">
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['dniExist']->value==false) {?>
        <div class="required form-group dni">
          <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
          <input type="text" class="text form-control" name="dni" id="dni" value="<?php if (isset($_POST['dni'])&&$_POST['dni']) {?><?php echo $_POST['dni'];?>
<?php }?>">
          <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
        </div>
      <?php }?>
      <div class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
        <label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>*</sup><?php }?></label>
        <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="<?php if (isset($_POST['phone_mobile'])) {?><?php echo $_POST['phone_mobile'];?>
<?php }?>">
      </div>
      <input type="hidden" name="alias" id="alias" value="<?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
">
      <input type="hidden" name="is_new_customer" id="is_new_customer" value="0">
      <div class="checkbox">
        <label for="invoice_address">
          <input type="checkbox" name="invoice_address" id="invoice_address"<?php if ((isset($_POST['invoice_address'])&&$_POST['invoice_address'])||(isset($_POST['invoice_address'])&&$_POST['invoice_address'])) {?> checked="checked"<?php }?> autocomplete="off">
          <?php echo smartyTranslate(array('s'=>'Please use another address for invoice'),$_smarty_tpl);?>

        </label>
      </div>
      <div id="opc_invoice_address"  class="unvisible">
        <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(false, null, 0);?>
        <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Invoice address'),$_smarty_tpl);?>
</h3>
        <?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company") {?>
            <div class="form-group">
              <label for="company_invoice"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
              <input type="text" class="text form-control" id="company_invoice" name="company_invoice" value="<?php if (isset($_POST['company_invoice'])&&$_POST['company_invoice']) {?><?php echo $_POST['company_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="vat_number") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['vat_display']->value)&&$_smarty_tpl->tpl_vars['vat_display']->value>=3) {?>
              <div class="checkbox">
                <label for="vat-exemption">
                  <input
                          type="checkbox"
                          name="vat_exemption"
                          id="vat-exemption"
                          value="1"
                          <?php if ((isset($_smarty_tpl->tpl_vars['address']->value->vat_exemption)&&$_smarty_tpl->tpl_vars['address']->value->vat_exemption)||(isset($_smarty_tpl->tpl_vars['address']->value->vat_number)&&strlen($_smarty_tpl->tpl_vars['address']->value->vat_number))) {?>
                            checked="checked"
                          <?php }?>
                  >
                  <?php echo smartyTranslate(array('s'=>'Yes, I qualify for VAT Relief!'),$_smarty_tpl);?>

                </label>
              </div>
              <p id="vat-exemption-hint" class="help-block" style="display: none;">
                <?php echo smartyTranslate(array('s'=>'You\'ll get asked to verify your qualification.'),$_smarty_tpl);?>

              </p>
            <?php }?>
            <div id="vat_number_block_invoice" style="display:none;">
              <div class="form-group">
                <label for="vat_number_invoice"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                <input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="<?php if (isset($_POST['vat_number_invoice'])&&$_POST['vat_number_invoice']) {?><?php echo $_POST['vat_number_invoice'];?>
<?php }?>">
              </div>
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="dni") {?>
            <?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
            <div class="required form-group dni_invoice">
              <label for="dni_invoice"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="text form-control" name="dni_invoice" id="dni_invoice" value="<?php if (isset($_POST['dni_invoice'])&&$_POST['dni_invoice']) {?><?php echo $_POST['dni_invoice'];?>
<?php }?>">
              <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="firstname") {?>
            <div class="required form-group">
              <label for="firstname_invoice"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="form-control" id="firstname_invoice" name="firstname_invoice" value="<?php if (isset($_POST['firstname_invoice'])&&$_POST['firstname_invoice']) {?><?php echo $_POST['firstname_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="lastname") {?>
            <div class="required form-group">
              <label for="lastname_invoice"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="form-control" id="lastname_invoice" name="lastname_invoice" value="<?php if (isset($_POST['lastname_invoice'])&&$_POST['lastname_invoice']) {?><?php echo $_POST['lastname_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address1") {?>
            <div class="required form-group">
              <label for="address1_invoice"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="form-control" name="address1_invoice" id="address1_invoice" value="<?php if (isset($_POST['address1_invoice'])&&$_POST['address1_invoice']) {?><?php echo $_POST['address1_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address2") {?>
            <div class="form-group is_customer_param">
              <label for="address2_invoice"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
              <input type="text" class="form-control" name="address2_invoice" id="address2_invoice" value="<?php if (isset($_POST['address2_invoice'])&&$_POST['address2_invoice']) {?><?php echo $_POST['address2_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="postcode") {?>
            <?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
            <div class="required postcode_invoice form-group">
              <label for="postcode_invoice"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="validate form-control" name="postcode_invoice" id="postcode_invoice" data-validate="isPostCode" value="<?php if (isset($_POST['postcode_invoice'])&&$_POST['postcode_invoice']) {?><?php echo $_POST['postcode_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="city") {?>
            <div class="required form-group">
              <label for="city_invoice"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="form-control" name="city_invoice" id="city_invoice" value="<?php if (isset($_POST['city_invoice'])&&$_POST['city_invoice']) {?><?php echo $_POST['city_invoice'];?>
<?php }?>">
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="country"||$_smarty_tpl->tpl_vars['field_name']->value=="Country:name") {?>
            <div class="required form-group">
              <label for="id_country_invoice"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <select name="id_country_invoice" id="id_country_invoice" class="form-control">
                <option value="">-</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_POST['id_country_invoice'])&&$_POST['id_country_invoice']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_POST['id_country_invoice'])&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
              </select>
            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="state"||$_smarty_tpl->tpl_vars['field_name']->value=='State:name') {?>
            <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
            <div class="required id_state_invoice form-group" style="display:none;">
              <label for="id_state_invoice"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <select name="id_state_invoice" id="id_state_invoice" class="form-control">
                <option value="">-</option>
              </select>
            </div>
          <?php }?>
        <?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value) {?>
          <div class="required postcode_invoice form-group unvisible">
            <label for="postcode_invoice"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="<?php if (isset($_POST['postcode_invoice'])&&$_POST['postcode_invoice']) {?><?php echo $_POST['postcode_invoice'];?>
<?php }?>">
          </div>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['stateExist']->value) {?>
          <div class="required id_state_invoice form-group unvisible">
            <label for="id_state_invoice"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <select name="id_state_invoice" id="id_state_invoice" class="form-control">
              <option value="">-</option>
            </select>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dniExist']->value==false) {?>
          <div class="required form-group dni_invoice">
            <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="text form-control" name="dni_invoice" id="dni_invoice" value="<?php if (isset($_POST['dni_invoice'])&&$_POST['dni_invoice']) {?><?php echo $_POST['dni_invoice'];?>
<?php }?>">
            <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
          </div>
        <?php }?>
        <div class="form-group is_customer_param">
          <label for="other_invoice"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
          <textarea class="form-control" name="other_invoice" id="other_invoice" cols="26" rows="3"></textarea>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
          <p class="help-block required is_customer_param"><?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</p>
        <?php }?>
        <div class="form-group is_customer_param">
          <label for="phone_invoice"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</label>
          <input type="text" class="form-control" name="phone_invoice" id="phone_invoice" value="<?php if (isset($_POST['phone_invoice'])&&$_POST['phone_invoice']) {?><?php echo $_POST['phone_invoice'];?>
<?php }?>">
        </div>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
          <label for="phone_mobile_invoice"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>*</sup><?php }?></label>
          <input type="text" class="form-control" name="phone_mobile_invoice" id="phone_mobile_invoice" value="<?php if (isset($_POST['phone_mobile_invoice'])&&$_POST['phone_mobile_invoice']) {?><?php echo $_POST['phone_mobile_invoice'];?>
<?php }?>">
        </div>
        <input type="hidden" name="alias_invoice" id="alias_invoice" value="<?php echo smartyTranslate(array('s'=>'My Invoice address'),$_smarty_tpl);?>
">
      </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

  </div>
  <p class="cart_navigation required submit clearfix">
    <span><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</span>
    <input type="hidden" name="display_guest_checkout" value="1">
    <button type="submit" class="btn btn-lg btn-success" name="submitGuestAccount" id="submitGuestAccount">
          <span>
            <?php echo smartyTranslate(array('s'=>'Proceed to checkout'),$_smarty_tpl);?>

            <i class="icon icon-chevron-right"></i>
          </span>
    </button>
  </p>
</form>
<?php }} ?>
