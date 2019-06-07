<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:34
         compiled from "/home/site/wwwroot/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16926391315cf5584a0f7333-62107464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a571438b2662d26fa84c04d396d2340503544f' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl',
      1 => 1559581721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16926391315cf5584a0f7333-62107464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584a10ceb9_55942500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584a10ceb9_55942500')) {function content_5cf5584a10ceb9_55942500($_smarty_tpl) {?>

<div class="modal-body">
	<div class="alert alert-warning">
		<h3><?php echo smartyTranslate(array('s'=>'This module could not be verified by thirty bees.'),$_smarty_tpl);?>
</h3>

		<p><?php echo smartyTranslate(array('s'=>"This generally happens when the module isn't distributed through our official marketplace, thirty bees Addons - or when your server failed to communicate with thirty bees Addons."),$_smarty_tpl);?>
</p>
	</div>

	<div class="row">
		<div class="col-sm-2" style="text-align: center;">
			<img id="untrusted-module-logo" class="" src="" alt="">
		</div>
		<div class="col-sm-10">
			<table class="table">
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Module'),$_smarty_tpl);?>
</td>
					<td><strong><span class="module-display-name-placeholder"></span></strong></td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Author'),$_smarty_tpl);?>
</td>
					<td><strong><span class="author-name-placeholder"></span></strong></td>
				</tr>
			</table>
		</div>

		<div class="col-sm-12" style="text-align: center; padding-top: 12px;">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Back to modules list'),$_smarty_tpl);?>
</button>
		</div>
	</div>
</div>

<div class="modal-footer">
	<div class="alert alert-info">
		<p><?php echo smartyTranslate(array('s'=>'Since you may not have installed this module from thirty bees Addons, we cannot assert that the module is complying with our safety requirements (e.g. that it is not adding some undisclosed functionalities such as ads, hidden links, spam, etc...).'),$_smarty_tpl);?>
</p>

		<p><?php echo smartyTranslate(array('s'=>'You can search for similar modules on the official marketplace.'),$_smarty_tpl);?>
</p>

		<p><?php echo smartyTranslate(array('s'=>"[1]Click here to browse our catalog on thirty bees Addons[/1].",'tags'=>array('<a class="catalog-link" href="#">')),$_smarty_tpl);?>

	</div>
</div>
<?php }} ?>
