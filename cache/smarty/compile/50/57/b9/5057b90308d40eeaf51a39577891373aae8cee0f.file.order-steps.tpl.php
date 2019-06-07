<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:05
         compiled from "/home/site/wwwroot/themes/community-theme-default/order-steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10755660115cf558e1cef385-26230500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5057b90308d40eeaf51a39577891373aae8cee0f' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/order-steps.tpl',
      1 => 1559580415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10755660115cf558e1cef385-26230500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'back' => 0,
    'multi_shipping' => 0,
    'opc' => 0,
    'current_step' => 0,
    'step_num' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e1d5bd20_73869538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e1d5bd20_73869538')) {function content_5cf558e1d5bd20_73869538($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("url_back", null, null); ob_start(); ?>
  <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>back=<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!isset($_smarty_tpl->tpl_vars['multi_shipping']->value)) {?>
  <?php $_smarty_tpl->tpl_vars['multi_shipping'] = new Smarty_variable('0', null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value&&((!isset($_smarty_tpl->tpl_vars['back']->value)||empty($_smarty_tpl->tpl_vars['back']->value))||(isset($_smarty_tpl->tpl_vars['back']->value)&&preg_match("/[&?]step=/",$_smarty_tpl->tpl_vars['back']->value)))) {?>

  <?php if ($_smarty_tpl->tpl_vars['current_step']->value=='summary') {?>
    <?php $_smarty_tpl->tpl_vars['step_num'] = new Smarty_variable(1, null, 0);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='login') {?>
    <?php $_smarty_tpl->tpl_vars['step_num'] = new Smarty_variable(2, null, 0);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='address') {?>
    <?php $_smarty_tpl->tpl_vars['step_num'] = new Smarty_variable(3, null, 0);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='shipping') {?>
    <?php $_smarty_tpl->tpl_vars['step_num'] = new Smarty_variable(4, null, 0);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='payment') {?>
    <?php $_smarty_tpl->tpl_vars['step_num'] = new Smarty_variable(5, null, 0);?>
  <?php }?>

  <ul id="order_step" class="nav nav-pills nav-justified">

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value>1) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value==1) {?>active<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address'||$_smarty_tpl->tpl_vars['current_step']->value=='login') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
">
          01. <?php echo smartyTranslate(array('s'=>'Summary'),$_smarty_tpl);?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">01. <?php echo smartyTranslate(array('s'=>'Summary'),$_smarty_tpl);?>
</a>
      <?php }?>
    </li>

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value>2) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value==2) {?>active<?php } else { ?>not-completed<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address') {?>
        <a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {?><?php echo "&multi-shipping=";?><?php echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;?><?php }?><?php $_tmp38=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=1".$_tmp38), ENT_QUOTES, 'UTF-8', true);?>
">
          02. <?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">02. <?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>
</a>
      <?php }?>
    </li>

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value>3) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value==3) {?>active<?php } else { ?>not-completed<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping') {?>
        <a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {?><?php echo "&multi-shipping=";?><?php echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;?><?php }?><?php $_tmp39=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=1".$_tmp39), ENT_QUOTES, 'UTF-8', true);?>
">
          03. <?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">03. <?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</a>
      <?php }?>
    </li>

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value>4) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value==4) {?>active<?php } else { ?>not-completed<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment') {?>
        <a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {?><?php echo "&multi-shipping=";?><?php echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;?><?php }?><?php $_tmp40=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=2".$_tmp40), ENT_QUOTES, 'UTF-8', true);?>
">
          04. <?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">04. <?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>
</a>
      <?php }?>
    </li>
    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value==5) {?>active<?php } else { ?>not-completed<?php }?>">
      <a href="javascript:;">05. <?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>
</a>
    </li>

  </ul>

<?php }?>
<?php }} ?>
