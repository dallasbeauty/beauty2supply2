<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:29
         compiled from "/home/site/wwwroot/themes/community-theme-default/authentication-create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19122343225cf55845aa97d1-16573257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fdad328be9bf6e9ed478e99af5cb6cfe5b6c51c' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/authentication-create.tpl',
      1 => 1559580411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19122343225cf55845aa97d1-16573257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'HOOK_CREATE_ACCOUNT_TOP' => 0,
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
    'field_required' => 0,
    'optin' => 0,
    'b2b_enable' => 0,
    'PS_REGISTRATION_PROCESS_TYPE' => 0,
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
    'one_phone_at_least' => 0,
    'HOOK_CREATE_ACCOUNT_FORM' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55845b9cb08_68329012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55845b9cb08_68329012')) {function content_5cf55845b9cb08_68329012($_smarty_tpl) {?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="account-creation_form" class="std box">
  <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_TOP']->value;?>

  <div class="account_creation">
    <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</h3>
    <p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
    <div class="form-group">
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
" <?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>

          </label>
        <?php } ?>
      </div>
    </div>
    <div class="required form-group">
      <label for="customer_firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
      <input onkeyup="$('#firstname').val(this.value);" type="text" class="is_required validate form-control" data-validate="isName" id="customer_firstname" name="customer_firstname" value="<?php if (isset($_POST['customer_firstname'])) {?><?php echo $_POST['customer_firstname'];?>
<?php }?>" required>
    </div>
    <div class="required form-group">
      <label for="customer_lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
      <input onkeyup="$('#lastname').val(this.value);" type="text" class="is_required validate form-control" data-validate="isName" id="customer_lastname" name="customer_lastname" value="<?php if (isset($_POST['customer_lastname'])) {?><?php echo $_POST['customer_lastname'];?>
<?php }?>" required>
    </div>
    <div class="required form-group">
      <label for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
      <input type="email" class="is_required validate form-control" data-validate="isEmail" id="email" name="email" value="<?php if (isset($_POST['email'])) {?><?php echo $_POST['email'];?>
<?php }?>" required>
    </div>
    <div class="required password form-group">
      <label for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
      <input type="password" class="is_required validate form-control" data-validate="isPasswd" name="passwd" id="passwd" required>
      <p class="help-block"><?php echo smartyTranslate(array('s'=>'(Five characters minimum)'),$_smarty_tpl);?>
</p>
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
          <input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']==1) {?> checked="checked"<?php }?>>
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
          <input type="checkbox" name="optin" id="optin" value="1" <?php if (isset($_POST['optin'])&&$_POST['optin']==1) {?> checked="checked"<?php }?>>
          <?php echo smartyTranslate(array('s'=>'Receive special offers from our partners!'),$_smarty_tpl);?>

          <?php if (array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
            <sup> *</sup>
          <?php }?>
        </label>
      </div>
    <?php }?>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
    <div class="account_creation">
      <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your company information'),$_smarty_tpl);?>
</h3>
      <div class="form-group">
        <label for=""><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</label>
        <input type="text" class="form-control" id="company" name="company" value="<?php if (isset($_POST['company'])) {?><?php echo $_POST['company'];?>
<?php }?>">
      </div>
      <div class="form-group">
        <label for="siret"><?php echo smartyTranslate(array('s'=>'SIRET'),$_smarty_tpl);?>
</label>
        <input type="text" class="form-control" id="siret" name="siret" value="<?php if (isset($_POST['siret'])) {?><?php echo $_POST['siret'];?>
<?php }?>">
      </div>
      <div class="form-group">
        <label for="ape"><?php echo smartyTranslate(array('s'=>'APE'),$_smarty_tpl);?>
</label>
        <input type="text" class="form-control" id="ape" name="ape" value="<?php if (isset($_POST['ape'])) {?><?php echo $_POST['ape'];?>
<?php }?>">
      </div>
      <div class="form-group">
        <label for="website"><?php echo smartyTranslate(array('s'=>'Website'),$_smarty_tpl);?>
</label>
        <input type="text" class="form-control" id="website" name="website" value="<?php if (isset($_POST['website'])) {?><?php echo $_POST['website'];?>
<?php }?>">
      </div>
    </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['PS_REGISTRATION_PROCESS_TYPE']->value)&&$_smarty_tpl->tpl_vars['PS_REGISTRATION_PROCESS_TYPE']->value) {?>
    <div class="account_creation">
      <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your address'),$_smarty_tpl);?>
</h3>
      <?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company") {?>
          <?php if (!$_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
            <div class="form-group">
              <label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
              <input type="text" class="form-control" id="company" name="company" value="<?php if (isset($_POST['company'])) {?><?php echo $_POST['company'];?>
<?php }?>"<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> required<?php }?>>
            </div>
          <?php }?>
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
              <label for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
              <input type="text" class="form-control" id="vat_number" name="vat_number" value="<?php if (isset($_POST['vat_number'])) {?><?php echo $_POST['vat_number'];?>
<?php }?>"<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> required<?php }?>>
            </div>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="firstname") {?>
          <div class="required form-group">
            <label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php if (isset($_POST['firstname'])) {?><?php echo $_POST['firstname'];?>
<?php }?>" required>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="lastname") {?>
          <div class="required form-group">
            <label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])) {?><?php echo $_POST['lastname'];?>
<?php }?>" required>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address1") {?>
          <div class="required form-group">
            <label for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <input type="text" class="form-control" name="address1" id="address1" value="<?php if (isset($_POST['address1'])) {?><?php echo $_POST['address1'];?>
<?php }?>" required>
            <p class="help-block"><?php echo smartyTranslate(array('s'=>'Street address, P.O. Box, Company name, etc.'),$_smarty_tpl);?>
</p>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="address2") {?>
          <div class="form-group is_customer_param">
            <label for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
            <input type="text" class="form-control" name="address2" id="address2" value="<?php if (isset($_POST['address2'])) {?><?php echo $_POST['address2'];?>
<?php }?>"<?php if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> required<?php }?>>
            <p class="help-block"><?php echo smartyTranslate(array('s'=>'Apartment, suite, unit, building, floor, etc...'),$_smarty_tpl);?>
</p>
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
<?php }?>" required>
          </div>
          
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="Country:name"||$_smarty_tpl->tpl_vars['field_name']->value=="country") {?>
          <div class="required select form-group">
            <label for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <select name="id_country" id="id_country" class="form-control" required>
              <option value="">-</option>
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
        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=="State:name"||$_smarty_tpl->tpl_vars['field_name']->value=='state') {?>
          <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
          <div class="required id_state select form-group">
            <label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
            <select name="id_state" id="id_state" class="form-control" required>
              <option value="">-</option>
            </select>
          </div>
        <?php }?>
      <?php } ?>
      <?php if ($_smarty_tpl->tpl_vars['postCodeExist']->value==false) {?>
        <div class="required postcode form-group unvisible">
          <label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
          <input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if (isset($_POST['postcode'])) {?><?php echo $_POST['postcode'];?>
<?php }?>">
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['stateExist']->value==false) {?>
        <div class="required id_state select unvisible form-group">
          <label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
          <select name="id_state" id="id_state" class="form-control">
            <option value="">-</option>
          </select>
        </div>
      <?php }?>
      <div class="textarea form-group">
        <label for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
        <textarea class="form-control" name="other" id="other" cols="26" rows="3"><?php if (isset($_POST['other'])) {?><?php echo $_POST['other'];?>
<?php }?></textarea>
      </div>
      <div class="form-group">
        <label for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
        <input type="text" class="form-control" name="phone" id="phone" value="<?php if (isset($_POST['phone'])) {?><?php echo $_POST['phone'];?>
<?php }?>">
      </div>
      <div class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
        <label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
        <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="<?php if (isset($_POST['phone_mobile'])) {?><?php echo $_POST['phone_mobile'];?>
<?php }?>">
      </div>
      <?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
        <?php $_smarty_tpl->tpl_vars["atLeastOneExists"] = new Smarty_variable(true, null, 0);?>
        <p class="help-block required">** <?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</p>
      <?php }?>
      <div class="required form-group" id="address_alias">
        <label for="alias"><?php echo smartyTranslate(array('s'=>'Assign an address alias for future reference.'),$_smarty_tpl);?>
 <sup>*</sup></label>
        <input type="text" class="form-control" name="alias" id="alias" value="<?php if (isset($_POST['alias'])) {?><?php echo $_POST['alias'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
<?php }?>" required>
      </div>
    </div>
    <div class="account_creation dni">
      <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Tax identification'),$_smarty_tpl);?>
</h3>
      <div class="required form-group">
        <label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
        <input type="text" class="form-control" name="dni" id="dni" value="<?php if (isset($_POST['dni'])) {?><?php echo $_POST['dni'];?>
<?php }?>">
        <p class="help-block"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</p>
      </div>
    </div>
  <?php }?>
  <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

  <div class="submit clearfix">
    <input type="hidden" name="email_create" value="1">
    <input type="hidden" name="is_new_customer" value="1">
    <?php if (isset($_smarty_tpl->tpl_vars['back']->value)) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
    <p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
    <button type="submit" name="submitAccount" id="submitAccount" class="btn btn-lg btn-success">
      <?php echo smartyTranslate(array('s'=>'Register'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i>
    </button>
  </div>
</form>
<?php }} ?>
