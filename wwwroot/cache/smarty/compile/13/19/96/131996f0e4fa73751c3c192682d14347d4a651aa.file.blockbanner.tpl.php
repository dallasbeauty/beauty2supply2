<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:32
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockbanner/blockbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12713524545cf55848c0e476-89166057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '131996f0e4fa73751c3c192682d14347d4a651aa' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockbanner/blockbanner.tpl',
      1 => 1559580861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12713524545cf55848c0e476-89166057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_img' => 0,
    'banner_link' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'banner_desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55848c24082_31310961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55848c24082_31310961')) {function content_5cf55848c24082_31310961($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
  <div id="blockbanner">
    <div class="container">
      <a href="<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?><?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['banner_desc']->value)) {?> title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
        <img class="img-responsive"
             src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
             width="1170"
             height="65"
             alt="<?php if (!empty($_smarty_tpl->tpl_vars['banner_desc']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php }?>"
             title="<?php if (!empty($_smarty_tpl->tpl_vars['banner_desc']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php }?>"
        >
      </a>
    </div>
  </div>
<?php }?>
<?php }} ?>
