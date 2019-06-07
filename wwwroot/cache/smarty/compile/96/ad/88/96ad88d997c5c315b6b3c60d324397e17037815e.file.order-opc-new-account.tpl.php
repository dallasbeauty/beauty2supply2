<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:04
         compiled from "/home/site/wwwroot/themes/community-theme-default/order-opc-new-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1873364345cf558e0ee3da2-17017648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96ad88d997c5c315b6b3c60d324397e17037815e' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/order-opc-new-account.tpl',
      1 => 1559580415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1873364345cf558e0ee3da2-17017648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'back' => 0,
    'HOOK_CREATE_ACCOUNT_TOP' => 0,
    'guestInformations' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'day' => 0,
    'months' => 0,
    'k' => 0,
    'month' => 0,
    'years' => 0,
    'year' => 0,
    'newsletter' => 0,
    'field_required' => 0,
    'optin' => 0,
    'dlv_all_fields' => 0,
    'field_name' => 0,
    'required_fields' => 0,
    'vat_display' => 0,
    'address' => 0,
    'countries' => 0,
    'v' => 0,
    'sl_country' => 0,
    'postCodeExist' => 0,
    'stateExist' => 0,
    'dniExist' => 0,
    'one_phone_at_least' => 0,
    'inv_all_fields' => 0,
    'HOOK_CREATE_ACCOUNT_FORM' => 0,
    'vatnumber_ajax_call' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e13a6bf0_47545442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e13a6bf0_47545442')) {function content_5cf558e13a6bf0_47545442($_smarty_tpl) {?><div id="opc_new_account" class="opc-main-block">
  <div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
  <h1 class="page-heading step-num"><span>1</span> <?php echo smartyTranslate(array('s'=>'Account'),$_smarty_tpl);?>
</h1>
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,null,"back=order-opc"), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="box">
    <fieldset>
      <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Already registered?'),$_smarty_tpl);?>
</h3>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" id="openLoginFormBlock">&raquo; <?php echo smartyTranslate(array('s'=>'Click here'),$_smarty_tpl);?>
</a>
      <div id="login_form_content" style="display:none;">

        <div id="opc_login_errors" class="alert alert-danger" style="display:none;"></div>

        <div class="form-group">
          <label for="login_email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label>
          <input type="email" class="form-control validate" id="login_email" name="email" data-validate="isEmail">
        </div>
        <div class="form-group">
          <label for="login_passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
</label>
          <input class="form-control validate" type="password" id="login_passwd" name="login_passwd" data-validate="isPasswd">
        </div>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('password',true), ENT_QUOTES, 'UTF-8', true);?>
" class="lost_password"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</a>
        <div class="submit">
          <?php if (isset($_smarty_tpl->tpl_vars['back']->value)) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
          <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-lg btn-success"><span><i class="icon icon-lock"></i> <?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>
</span></button>
        </div>
      </div>
    </fieldset>
  </form>
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="new_account_form" class="std" autocomplete="on" autofill="on">
    <fieldset>
      <div class="box">
        <h3 id="new_account_title" class="page-subheading"><?php echo smartyTranslate(array('s'=>'New Customer'),$_smarty_tpl);?>
</h3>
        <div id="opc_account_choice" class="row">
          <div class="col-xs-12 col-md-6">
            <p class="title_block"><?php echo smartyTranslate(array('s'=>'Instant Checkout'),$_smarty_tpl);?>
</p>
            <p class="opc-button">
              <button type="submit" class="btn btn-success" id="opc_guestCheckout"><span><?php echo smartyTranslate(array('s'=>'Guest checkout'),$_smarty_tpl);?>
</span></button>
            </p>
          </div>
          <div class="col-xs-12 col-md-6">
            <p class="title_block"><?php echo smartyTranslate(array('s'=>'Create your account today and enjoy:'),$_smarty_tpl);?>
</p>
            <ul class="bullet list-unstyled">
              <li>- <?php echo smartyTranslate(array('s'=>'Personalized and secure access'),$_smarty_tpl);?>
</li>
              <li>- <?php echo smartyTranslate(array('s'=>'A fast and easy check out process'),$_smarty_tpl);?>
</li>
              <li>- <?php echo smartyTranslate(array('s'=>'Separate billing and shipping addresses'),$_smarty_tpl);?>
</li>
            </ul>
            <p class="opc-button">
              <button type="submit" class="btn btn-success" id="opc_createAccount"><span><i class="icon icon-user"></i> <?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
</span></button>
            </p>
          </div>
        </div>
        <div id="opc_account_form" class="unvisible">
          <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_TOP']->value;?>


          <div id="opc_account_errors" class="alert alert-danger" style="display:none;"></div>

          <input type="hidden" id="is_new_customer" name="is_new_customer" value="0">
          <input type="hidden" id="opc_id_customer" name="opc_id_customer" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_customer'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_customer']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_customer'];?>
<?php } else { ?>0<?php }?>">
          <input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'];?>
<?php } else { ?>0<?php }?>">
          <input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_address_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_address_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_invoice'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'];?>
<?php } else { ?>0<?php }?><?php }?>">
          <p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
          <div class="required text form-group">
            <label for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="email" class="text form-control validate" id="email" name="email" data-validate="isEmail" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['email'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['email']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['email'];?>
<?php }?>">
          </div>
          <div class="required password is_customer_param form-group">
            <label for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="password" class="text form-control validate" name="passwd" id="passwd" data-validate="isPasswd">
            <p class="help-block"><?php echo smartyTranslate(array('s'=>'(five characters min.)'),$_smarty_tpl);?>
</p>
          </div>
          <div class="required form-group gender-line">
            <label><?php echo smartyTranslate(array('s'=>'Social title'),$_smarty_tpl);?>
</label>
            <div>
              <?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
                <label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
" class="radio-inline">
                  <input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
"<?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id_gender||(isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id_gender)) {?> checked="checked"<?php }?>>
                  <?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>

                </label>
              <?php } ?>
            </div>
          </div>
          <div class="required form-group">
            <label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="text form-control validate" id="customer_firstname" name="customer_firstname" onblur="$('#firstname').val($(this).val());" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname'];?>
<?php }?>">
          </div>
          <div class="required form-group">
            <label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control validate" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname'];?>
<?php }?>">
          </div>
          <div class="select form-group date-select">
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
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['sl_day'])&&($_smarty_tpl->tpl_vars['guestInformations']->value['sl_day']==$_smarty_tpl->tpl_vars['day']->value)) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value, ENT_QUOTES, 'UTF-8', true);?>
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
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['sl_month'])&&($_smarty_tpl->tpl_vars['guestInformations']->value['sl_month']==$_smarty_tpl->tpl_vars['k']->value)) {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>
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
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['sl_year'])&&($_smarty_tpl->tpl_vars['guestInformations']->value['sl_year']==$_smarty_tpl->tpl_vars['year']->value)) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;&nbsp;</option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['newsletter']->value)&&$_smarty_tpl->tpl_vars['newsletter']->value) {?>
            <div class="checkbox">
              <label for="newsletter">
                <input type="checkbox" name="newsletter" id="newsletter" value="1"<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['newsletter'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['newsletter']) {?> checked="checked"<?php }?> autocomplete="off">
                <?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>

                <?php if (array_key_exists('newsletter',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                  <sup> *</sup>
                <?php }?>
              </label>
            </div>
          <?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['optin']->value)&&$_smarty_tpl->tpl_vars['optin']->value) {?>
            <div class="checkbox">
              <label for="optin">
                <input type="checkbox" name="optin" id="optin" value="1"<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['optin'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['optin']) {?> checked="checked"<?php }?> autocomplete="off">
                <?php echo smartyTranslate(array('s'=>'Receive special offers from our partners!'),$_smarty_tpl);?>

                <?php if (array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                  <sup> *</sup>
                <?php }?>
              </label>
            </div>
          <?php }?>
          <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Delivery address'),$_smarty_tpl);?>
</h3>
          <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
          <?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(false, null, 0);?>
          <?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(false, null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company") {?>
              <div class="text form-group">
                <label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                <input type="text" class="text form-control validate" id="company" name="company" data-validate="isGenericName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['company'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['company']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['company'];?>
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
              <div id="vat_number_block" style="display:none;">
                <div class="form-group">
                  <label for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                  <input type="text" class="text form-control" name="vat_number" id="vat_number" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['vat_number'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['vat_number']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number'];?>
<?php }?>">
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="dni") {?>
              <?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
              <div class="required dni form-group">
                <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" name="dni" id="dni" data-validate="isDniLite" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['dni']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni'];?>
<?php }?>">
                <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="firstname") {?>
              <div class="required text form-group">
                <label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" id="firstname" name="firstname" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname'];?>
<?php }?>">
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="lastname") {?>
              <div class="required text form-group">
                <label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" id="lastname" name="lastname" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['lastname'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['lastname']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname'];?>
<?php }?>">
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address1") {?>
              <div class="required text form-group">
                <label for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" name="address1" id="address1" data-validate="isAddress" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['address1']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['address1'];?>
<?php }?>">
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address2") {?>
              <div class="text<?php if (!in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> is_customer_param<?php }?> form-group">
                <label for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                <input type="text" class="text form-control validate" name="address2" id="address2" data-validate="isAddress" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['address2'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['address2']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['address2'];?>
<?php }?>">
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="postcode") {?>
              <?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
              <div class="required postcode text form-group">
                <label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip/Postal code'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['postcode']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode'];?>
<?php }?>">
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="city") {?>
              <div class="required text form-group">
                <label for="city"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" name="city" id="city" data-validate="isCityName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['city'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['city']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['city'];?>
<?php }?>">
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="country"||$_smarty_tpl->tpl_vars['field_name']->value=="Country:name") {?>
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
"<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                  <?php } ?>
                </select>
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="state"||$_smarty_tpl->tpl_vars['field_name']->value=='State:name') {?>
              <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
              <div class="required id_state form-group" style="display:none;">
                <label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <select name="id_state" id="id_state" class="form-control">
                  <option value="">-</option>
                </select>
              </div>
            <?php }?>
          <?php } ?>
          <?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value) {?>
            <div class="required postcode form-group unvisible">
              <label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip/Postal code'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="text form-control validate" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['postcode']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode'];?>
<?php }?>">
            </div>
          <?php }?>
          <?php if (!$_smarty_tpl->tpl_vars['stateExist']->value) {?>
            <div class="required id_state form-group unvisible">
              <label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <select name="id_state" id="id_state" class="form-control">
                <option value="">-</option>
              </select>
            </div>
          <?php }?>
          <?php if (!$_smarty_tpl->tpl_vars['dniExist']->value) {?>
            <div class="required dni form-group">
              <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
              <input type="text" class="text form-control validate" name="dni" id="dni" data-validate="isDniLite" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['dni']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni'];?>
<?php }?>">
              <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
            </div>
          <?php }?>
          <div class="form-group is_customer_param">
            <label for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
            <textarea class="form-control" name="other" id="other" cols="26" rows="7"></textarea>
          </div>
          <div class="form-group is_customer_param">
            <label for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
            <input type="text" class="text form-control validate" name="phone" id="phone" data-validate="isPhoneNumber" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone'];?>
<?php }?>">
          </div>
          <div class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
            <label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
            <input type="text" class="text form-control validate" name="phone_mobile" id="phone_mobile" data-validate="isPhoneNumber" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'];?>
<?php }?>">
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
            <?php $_smarty_tpl->tpl_vars["atLeastOneExists"] = new Smarty_variable(true, null, 0);?>
            <p class="help-block required">** <?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</p>
          <?php }?>
          <input type="hidden" name="alias" id="alias" value="<?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
">

          <div class="checkbox">
            <label for="invoice_address">
              <input type="checkbox" name="invoice_address" id="invoice_address"<?php if ((isset($_POST['invoice_address'])&&$_POST['invoice_address'])||(isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['invoice_address'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['invoice_address'])) {?> checked="checked"<?php }?> autocomplete="off">
              <?php echo smartyTranslate(array('s'=>'Please use another address for invoice'),$_smarty_tpl);?>

            </label>
          </div>

          <div id="opc_invoice_address" class="is_customer_param">
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
                  <input type="text" class="text form-control validate" id="company_invoice" name="company_invoice" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['company_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['company_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['company_invoice'];?>
<?php }?>">
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="vat_number") {?>
                <div id="vat_number_block_invoice" class="is_customer_param" style="display:none;">
                  <div class="form-group">
                    <label for="vat_number_invoice"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                    <input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['vat_number_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['vat_number_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number_invoice'];?>
<?php }?>">
                  </div>
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="dni") {?>
                <?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
                <div class="required form-group dni_invoice">
                  <label for="dni_invoice"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
                  <input type="text" class="text form-control validate" name="dni_invoice" id="dni_invoice" data-validate="isDniLite" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'];?>
<?php }?>">
                  <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="firstname") {?>
                <div class="required form-group">
                  <label for="firstname_invoice"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
                  <input type="text" class="form-control validate" id="firstname_invoice" name="firstname_invoice" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['firstname_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname_invoice'];?>
<?php }?>">
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="lastname") {?>
                <div class="required form-group">
                  <label for="lastname_invoice"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
                  <input type="text" class="form-control validate" id="lastname_invoice" name="lastname_invoice" data-validate="isName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['lastname_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['lastname_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname_invoice'];?>
<?php }?>">
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address1") {?>
                <div class="required form-group">
                  <label for="address1_invoice"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
                  <input type="text" class="form-control validate" name="address1_invoice" id="address1_invoice" data-validate="isAddress" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice'];?>
<?php }?>">
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address2") {?>
                <div class="form-group<?php if (!in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> is_customer_param<?php }?>">
                  <label for="address2_invoice"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                  <input type="text" class="form-control address" name="address2_invoice" id="address2_invoice" data-validate="isAddress" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice'];?>
<?php }?>">
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="postcode") {?>
                <?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
                <div class="required postcode_invoice form-group">
                  <label for="postcode_invoice"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
                  <input type="text" class="form-control validate" name="postcode_invoice" id="postcode_invoice" data-validate="isPostCode" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'];?>
<?php }?>">
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="city") {?>
                <div class="required form-group">
                  <label for="city_invoice"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
 <sup>*</sup></label>
                  <input type="text" class="form-control validate" name="city_invoice" id="city_invoice" data-validate="isCityName" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['city_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['city_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['city_invoice'];?>
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
"<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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
                <input type="text" class="form-control validate" name="postcode_invoice" id="postcode_invoice" data-validate="isPostCode" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'];?>
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
            <?php if (!$_smarty_tpl->tpl_vars['dniExist']->value) {?>
              <div class="required form-group dni_invoice">
                <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="text form-control validate" name="dni_invoice" id="dni_invoice" data-validate="isDniLite" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'];?>
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
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
              <input type="text" class="form-control validate" name="phone_invoice" id="phone_invoice" data-validate="isPhoneNumber" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_invoice'];?>
<?php }?>">
            </div>
            <div class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
              <label for="phone_mobile_invoice"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
              <input type="text" class="form-control validate" name="phone_mobile_invoice" id="phone_mobile_invoice" data-validate="isPhoneNumber" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile_invoice']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile_invoice'];?>
<?php }?>">
            </div>
              <?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
                  <?php $_smarty_tpl->tpl_vars["atLeastOneExists"] = new Smarty_variable(true, null, 0);?>
                <p class="help-block required">** <?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</p>
              <?php }?>
            <input type="hidden" name="alias_invoice" id="alias_invoice" value="<?php echo smartyTranslate(array('s'=>'My Invoice address'),$_smarty_tpl);?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

          <div class="submit opc-add-save clearfix">
            <p class="required opc-required pull-right">
              <sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>

            </p>
            <button type="submit" name="submitAccount" id="submitAccount" class="btn btn-lg btn-success"><span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i></span></button>

          </div>
          <div style="display: none;" id="opc_account_saved" class="alert alert-success">
            <?php echo smartyTranslate(array('s'=>'Account information saved successfully'),$_smarty_tpl);?>

          </div>

        </div>
      </div>
    </fieldset>
  </form>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_state'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_state']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedState'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedState'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedStateInvoice'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedStateInvoice'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_country']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountry'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountry'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountryInvoice'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountryInvoice'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['countries']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('countries'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value)&&$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('vatnumber_ajax_call'=>$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value),$_smarty_tpl);?>
<?php }?>
<?php }} ?>
