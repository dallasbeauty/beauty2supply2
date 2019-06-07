<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/product-list-switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18565759455cf558e29b1bc8-84380295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17aadeeea541f09064fd59d6a8b125e2a0b6ec73' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/product-list-switcher.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18565759455cf558e29b1bc8-84380295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e29c54e5_63272575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e29c54e5_63272575')) {function content_5cf558e29c54e5_63272575($_smarty_tpl) {?><div id="product-list-switcher" class="form-group display">
  <label class="visible-xs"><?php echo smartyTranslate(array('s'=>'Display product list as:'),$_smarty_tpl);?>
</label>
  <div class="btn-group" role="group" aria-label="<?php echo smartyTranslate(array('s'=>'Product list display type'),$_smarty_tpl);?>
">
    <a id="grid" class="btn btn-default" rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
">
      <i class="icon icon-fw icon-th"></i>
      <span class="visible-xs"><?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
</span>
    </a>
    <a id="list" class="btn btn-default" rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
">
      <i class="icon icon-fw icon-bars"></i>
      <span class="visible-xs"><?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
</span>
    </a>
  </div>
</div>
<?php }} ?>
