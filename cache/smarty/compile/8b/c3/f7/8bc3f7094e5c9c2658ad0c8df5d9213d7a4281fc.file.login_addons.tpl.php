<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/admin/themes/default/template/controllers/modules/login_addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21451221035cf55849ea3ba5-64679560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc3f7094e5c9c2658ad0c8df5d9213d7a4281fc' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/controllers/modules/login_addons.tpl',
      1 => 1559581721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21451221035cf55849ea3ba5-64679560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_permission' => 0,
    'logged_on_addons' => 0,
    'check_url_fopen' => 0,
    'check_openssl' => 0,
    'addons_register_link' => 0,
    'addons_forgot_password_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55849ec3c00_14500205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55849ec3c00_14500205')) {function content_5cf55849ec3c00_14500205($_smarty_tpl) {?>

<div class="modal-body">
<?php if ($_smarty_tpl->tpl_vars['add_permission']->value=='1') {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['logged_on_addons']->value)||!$_smarty_tpl->tpl_vars['logged_on_addons']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['check_url_fopen']->value=='ko'||$_smarty_tpl->tpl_vars['check_openssl']->value=='ko') {?>
			<div class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'If you want to be able to fully use the AdminModules panel and have free modules available, you should enable the following configuration on your server:'),$_smarty_tpl);?>

				<br />
				<?php if ($_smarty_tpl->tpl_vars['check_url_fopen']->value=='ko') {?>- <?php echo smartyTranslate(array('s'=>'Enable PHP\'s allow_url_fopen setting'),$_smarty_tpl);?>
<br /><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['check_openssl']->value=='ko') {?>- <?php echo smartyTranslate(array('s'=>'Enable PHP\'s OpenSSL extension'),$_smarty_tpl);?>
<br /><?php }?>
			</div>
		<?php } else { ?>
			<!--start addons login-->
			<form id="addons_login_form" method="post" >
				<div>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_register_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img class="img-responsive center-block" src="themes/default/img/prestashop-addons-logo.png" alt="Logo thirty bees Addons"/></a>
					<h3 class="text-center"><?php echo smartyTranslate(array('s'=>"Connect your shop with thirty bees's marketplace in order to automatically import all your Addons purchases."),$_smarty_tpl);?>
</h3>
					<hr />
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4><?php echo smartyTranslate(array('s'=>"Don't have an account?"),$_smarty_tpl);?>
</h4>
						<p class='text-justify'><?php echo smartyTranslate(array('s'=>"Discover the Power of thirty bees Addons! Explore the thirty bees Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity"),$_smarty_tpl);?>
</p>
					</div>
					<div class="col-md-6">
						<h4><?php echo smartyTranslate(array('s'=>'Connect to thirty bees Addons'),$_smarty_tpl);?>
</h4>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-user"></i></span>
								<input id="username_addons" name="username_addons" type="text" value="" autocomplete="off" class="form-control ac_input">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-key"></i></span>
								<input id="password_addons" name="password_addons" type="password" value="" autocomplete="off" class="form-control ac_input">
							</div>
							<a class="btn btn-link pull-right _blank" href="<?php echo $_smarty_tpl->tpl_vars['addons_forgot_password_link']->value;?>
"><?php echo smartyTranslate(array('s'=>'I forgot my password'),$_smarty_tpl);?>
</a>
							<br>
						</div>
					</div>
				</div>

				<div class="row row-padding-top">
					<div class="col-md-6">
						<div class="form-group">
							<a class="btn btn-default btn-block btn-lg _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_register_link']->value, ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo smartyTranslate(array('s'=>"Create an Account"),$_smarty_tpl);?>

								<i class="icon-external-link"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button id="addons_login_button" class="btn btn-primary btn-block btn-lg" type="submit">
								<i class="icon-unlock"></i> <?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>

							</button>
						</div>
					</div>
				</div>

				<div id="addons_loading" class="help-block"></div>

			</form>
			<!--end addons login-->
		<?php }?>
	<?php }?>
<?php }?>
</div>
<?php }} ?>
