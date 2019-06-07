<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:36:27
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10272945425cf6035bccd960-52358506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f20ddf2e49411f233506b260e08c9da4b9b37d' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1559580864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10272945425cf6035bccd960-52358506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6035bce5f41_82130472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6035bce5f41_82130472')) {function content_5cf6035bce5f41_82130472($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?>
  <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
    <article>
      <div id="blockcmsinfo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['id_info'], ENT_QUOTES, 'UTF-8', true);?>
" class="blockcmsinfo-block col-xs-12 col-sm-4">
        <?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>

      </div>
    </article>
  <?php } ?>
<?php }?>
<?php }} ?>
