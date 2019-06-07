<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:53
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18776488155cf5585d1366f9-02178066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6b323bbdac6c6db6001488626c09e35f343c7fc' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1559582120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18776488155cf5585d1366f9-02178066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5585d14e123_27370162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5585d14e123_27370162')) {function content_5cf5585d14e123_27370162($_smarty_tpl) {?><li class="loyalty">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon icon-flag"></i> <span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<?php }} ?>
