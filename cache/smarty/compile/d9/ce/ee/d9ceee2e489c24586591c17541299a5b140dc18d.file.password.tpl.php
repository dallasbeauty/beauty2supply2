<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4772769185cf558e2108776-84869608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ceee2e489c24586591c17541299a5b140dc18d' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/password.tpl',
      1 => 1559580415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4772769185cf558e2108776-84869608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'customer_email' => 0,
    'request_uri' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e215d3a0_66077296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e215d3a0_66077296')) {function content_5cf558e215d3a0_66077296($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Forgot your password'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="box">
  <h1 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</h1>

  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==1) {?>
    <div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your password has been successfully reset and a confirmation has been sent to your email address:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['customer_email']->value)) {?><?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['customer_email']->value, ENT_QUOTES, 'UTF-8', true));?>
<?php }?></div>
  <?php } elseif (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==2) {?>
    <div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'A confirmation email has been sent to your address:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['customer_email']->value)) {?><?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['customer_email']->value, ENT_QUOTES, 'UTF-8', true));?>
<?php }?></div>
  <?php } else { ?>
    <p><?php echo smartyTranslate(array('s'=>'Please enter the email address you used to register. We will then send you a new password. '),$_smarty_tpl);?>
</p>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="form_forgotpassword">
      <fieldset>
        <div class="form-group">
          <label for="email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label>
          <input class="form-control" type="email" id="email" name="email" value="<?php if (isset($_POST['email'])) {?><?php echo stripslashes(htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true));?>
<?php }?>" required>
        </div>
        <div class="submit">
          <button type="submit" class="btn btn-lg btn-success"><span><?php echo smartyTranslate(array('s'=>'Retrieve Password'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i></span></button>
        </div>
      </fieldset>
    </form>
  <?php }?>
</div>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>

      </a>
    </li>
  </ul>
</nav>
<?php }} ?>
