<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12283443345cf5584bea36e5-96349975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe7b9ab5fee00162864a6178d6dbd361a3836ff' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1559581724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12283443345cf5584bea36e5-96349975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584beb2b26_62762013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584beb2b26_62762013')) {function content_5cf5584beb2b26_62762013($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
