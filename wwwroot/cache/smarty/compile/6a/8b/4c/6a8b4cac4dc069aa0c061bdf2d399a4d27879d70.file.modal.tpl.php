<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:40:35
         compiled from "/home/site/wwwroot/admin3945pw7m7/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9569213405cf60453352ae9-92707131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8b4cac4dc069aa0c061bdf2d399a4d27879d70' => 
    array (
      0 => '/home/site/wwwroot/admin3945pw7m7/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1559581737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9569213405cf60453352ae9-92707131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf60453358c15_76774636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf60453358c15_76774636')) {function content_5cf60453358c15_76774636($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
