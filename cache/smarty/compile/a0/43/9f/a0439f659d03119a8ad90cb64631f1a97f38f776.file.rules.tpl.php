<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:01
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6995987725cf558dd7d6987-39825435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0439f659d03119a8ad90cb64631f1a97f38f776' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1559582121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6995987725cf558dd7d6987-39825435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558dd7fa8e5_04676582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558dd7fa8e5_04676582')) {function content_5cf558dd7fa8e5_04676582($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
  <div id="referralprogram_rules">
    <?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
  </div>
<?php }?>
<?php }} ?>
