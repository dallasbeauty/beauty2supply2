<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockpaymentlogo/blockpaymentlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15533925165cf5584b115230-19644108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e172c5db6ba4a5e9e7ffc4719022af501d081867' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockpaymentlogo/blockpaymentlogo.tpl',
      1 => 1559580869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15533925165cf5584b115230-19644108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_payement_logo' => 0,
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584b12a841_89579464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b12a841_89579464')) {function content_5cf5584b12a841_89579464($_smarty_tpl) {?>

<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="paiement_logo_block">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cms_payement_logo']->value), ENT_QUOTES, 'UTF-8', true);?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_visa.jpg" alt="visa" title="visa" width="33" height="21">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_mastercard.jpg" alt="mastercard" title="mastercard" width="32" height="21">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_paypal.jpg" alt="paypal" title="paypal" width="61" height="21">
    </a>
</div>
<!-- /Block payment logo module --><?php }} ?>
