<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:29
         compiled from "/home/site/wwwroot/themes/community-theme-default/authentication-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20005498625cf55845ccbb81-73723193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f81fcde2e34c29ddf8119a6c14a720ed05c4e4dd' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/authentication-login.tpl',
      1 => 1559580411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20005498625cf55845ccbb81-73723193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55845cfa3b1_62988196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55845cfa3b1_62988196')) {function content_5cf55845cfa3b1_62988196($_smarty_tpl) {?><div class="row">
  <div class="col-xs-12 col-sm-6">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="create-account_form" class="box">
      <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
</h3>
      <div class="form_content clearfix">
        <p><?php echo smartyTranslate(array('s'=>'Please enter your email address to create an account.'),$_smarty_tpl);?>
</p>
        <div class="alert alert-danger" id="create_account_error" style="display:none"></div>
        <div class="form-group">
          <label for="email_create"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label>
          <input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" value="<?php if (isset($_POST['email_create'])) {?><?php echo stripslashes($_POST['email_create']);?>
<?php }?>" required>
        </div>
        <div class="submit">
          <?php if (isset($_smarty_tpl->tpl_vars['back']->value)) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
          <button class="btn btn-lg btn-success" type="submit" id="SubmitCreate" name="SubmitCreate">
            <i class="icon icon-user-plus"></i> <?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>

          </button>
          <input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
">
        </div>
      </div>
    </form>
  </div>
  <div class="col-xs-12 col-sm-6">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="box">
      <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Already registered?'),$_smarty_tpl);?>
</h3>
      <div class="form_content clearfix">
        <div class="form-group">
          <label for="email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label>
          <input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="<?php if (isset($_POST['email'])) {?><?php echo stripslashes($_POST['email']);?>
<?php }?>" required>
        </div>
        <div class="form-group">
          <label for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
</label>
          <input class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="passwd" value="" required>
        </div>
        <div class="lost_password form-group"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('password'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Recover your forgotten password'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</a></div>
        <div class="submit">
          <?php if (isset($_smarty_tpl->tpl_vars['back']->value)) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
          <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-lg btn-success">
            <i class="icon icon-sign-in"></i> <?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>

          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php }} ?>
