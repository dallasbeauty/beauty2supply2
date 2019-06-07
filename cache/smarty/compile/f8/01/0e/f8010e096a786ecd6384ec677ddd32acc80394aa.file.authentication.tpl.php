<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:29
         compiled from "/home/site/wwwroot/themes/community-theme-default/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6042217355cf55845e25f48-35438057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8010e096a786ecd6384ec677ddd32acc80394aa' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/authentication.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6042217355cf55845e25f48-35438057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email_create' => 0,
    'link' => 0,
    'navigationPipe' => 0,
    'back' => 0,
    'inOrderProcess' => 0,
    'PS_GUEST_CHECKOUT_ENABLED' => 0,
    'address' => 0,
    'countries' => 0,
    'vatnumber_ajax_call' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55845e7c6e3_38831883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55845e7c6e3_38831883')) {function content_5cf55845e7c6e3_38831883($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
  <?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)) {?><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
<?php } else { ?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
</a>
    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Create your account'),$_smarty_tpl);?>

  <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)) {?><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
<?php }?></h1>

<?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&preg_match("/^http/",$_smarty_tpl->tpl_vars['back']->value)) {?><?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('login', null, 0);?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["postCodeExist"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["dniExist"] = new Smarty_variable(false, null, 0);?>

<?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)) {?>

  <?php echo $_smarty_tpl->getSubTemplate ('./authentication-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)&&$_smarty_tpl->tpl_vars['inOrderProcess']->value&&$_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('./authentication-create-opc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>

<?php } else { ?>

  <?php echo $_smarty_tpl->getSubTemplate ('./authentication-create.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }?>

<?php if (isset($_POST['id_state'])&&$_POST['id_state']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedState'=>intval($_POST['id_state'])),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['address']->value->id_state)&&$_smarty_tpl->tpl_vars['address']->value->id_state) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedState'=>intval($_smarty_tpl->tpl_vars['address']->value->id_state)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedState'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_POST['id_state_invoice'])&&isset($_POST['id_state_invoice'])&&$_POST['id_state_invoice']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedStateInvoice'=>intval($_POST['id_state_invoice'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedStateInvoice'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_POST['id_country'])&&$_POST['id_country']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountry'=>intval($_POST['id_country'])),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['address']->value->id_country)&&$_smarty_tpl->tpl_vars['address']->value->id_country) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountry'=>intval($_smarty_tpl->tpl_vars['address']->value->id_country)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountry'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_POST['id_country_invoice'])&&isset($_POST['id_country_invoice'])&&$_POST['id_country_invoice']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountryInvoice'=>intval($_POST['id_country_invoice'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idSelectedCountryInvoice'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['countries']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('countries'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value)&&$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('vatnumber_ajax_call'=>$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['email_create']->value)&&$_smarty_tpl->tpl_vars['email_create']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('email_create'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['email_create']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('email_create'=>false),$_smarty_tpl);?>
<?php }?>
<?php }} ?>
