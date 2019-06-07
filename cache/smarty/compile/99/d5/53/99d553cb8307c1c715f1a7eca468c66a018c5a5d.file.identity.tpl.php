<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:31
         compiled from "/home/site/wwwroot/themes/community-theme-default/identity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17478283375cf55847cdd7d8-35985890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d553cb8307c1c715f1a7eca468c66a018c5a5d' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/identity.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17478283375cf55847cdd7d8-35985890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'pwd_changed' => 0,
    'email' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'v' => 0,
    'sl_day' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'years' => 0,
    'sl_year' => 0,
    'newsletter' => 0,
    'required_fields' => 0,
    'field_required' => 0,
    'optin' => 0,
    'b2b_enable' => 0,
    'HOOK_CUSTOMER_IDENTITY_FORM' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55847d56f40_79683741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55847d56f40_79683741')) {function content_5cf55847d56f40_79683741($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a>
  <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
  <span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="box">
  <h1 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</h1>

  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>
    <div class="alert alert-success">
      <?php echo smartyTranslate(array('s'=>'Your personal information has been successfully updated.'),$_smarty_tpl);?>

      <?php if (isset($_smarty_tpl->tpl_vars['pwd_changed']->value)) {?><br><?php echo smartyTranslate(array('s'=>'Your password has been sent to your email:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>
    </div>
  <?php } else { ?>
    <p>
      <b><?php echo smartyTranslate(array('s'=>'Please be sure to update your personal information if it has changed.'),$_smarty_tpl);?>
</b>
    </p>
    <p class="required">
      <sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>

    </p>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
      <fieldset>
        <div class="form-group">
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
              <label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="radio-inline">
                <input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" <?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>

              </label>
            <?php } ?>
          </div>
        </div>
        <div class="required form-group">
          <label for="firstname" class="required"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</label>
          <input class="is_required validate form-control" data-validate="isName" type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname'];?>
" required>
        </div>
        <div class="required form-group">
          <label for="lastname" class="required"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</label>
          <input class="is_required validate form-control" data-validate="isName" type="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname'];?>
" required>
        </div>
        <div class="required form-group">
          <label for="email" class="required"><?php echo smartyTranslate(array('s'=>'E-mail address'),$_smarty_tpl);?>
</label>
          <input class="is_required validate form-control" data-validate="isEmail" type="email" name="email" id="email" value="<?php echo $_POST['email'];?>
" required>
        </div>
        <div class="form-group date-select">
          <label><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
</label>
          <div class="row">
            <div class="col-xs-4">
              <select name="days" id="days" class="form-control">
                <option value="">-</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                <?php } ?>
              </select>
            </div>
            <div class="col-xs-4">
              
              <select id="months" name="months" class="form-control">
                <option value="">-</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
&nbsp;</option>
                <?php } ?>
              </select>
            </div>
            <div class="col-xs-4">
              <select id="years" name="years" class="form-control">
                <option value="">-</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="required form-group">
          <label for="old_passwd" class="required"><?php echo smartyTranslate(array('s'=>'Current Password'),$_smarty_tpl);?>
</label>
          <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="old_passwd" id="old_passwd" required>
        </div>
        <div class="password form-group">
          <label for="passwd"><?php echo smartyTranslate(array('s'=>'New Password'),$_smarty_tpl);?>
</label>
          <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="passwd" id="passwd">
        </div>
        <div class="password form-group">
          <label for="confirmation"><?php echo smartyTranslate(array('s'=>'Confirmation'),$_smarty_tpl);?>
</label>
          <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="confirmation" id="confirmation">
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['newsletter']->value)&&$_smarty_tpl->tpl_vars['newsletter']->value) {?>
          <div class="checkbox">
            <label for="newsletter">
              <input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']==1) {?> checked="checked"<?php }?>>
              <?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>

              <?php if (isset($_smarty_tpl->tpl_vars['required_fields']->value)&&array_key_exists('newsletter',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
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

              <?php if (isset($_smarty_tpl->tpl_vars['required_fields']->value)&&array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                <sup> *</sup>
              <?php }?>
            </label>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
          <h1 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your company information'),$_smarty_tpl);?>
</h1>
          <div class="form-group">
            <label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
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
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value)) {?>
          <?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value;?>

        <?php }?>
        <div class="form-group">
          <button type="submit" name="submitIdentity" class="btn btn-lg btn-success">
            <span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i></span>
          </button>
        </div>
      </fieldset>
    </form>
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
