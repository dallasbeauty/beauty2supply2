<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:32
         compiled from "/home/site/wwwroot/themes/community-theme-default/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18514972405cf558484e9ff2-32183889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b36c0cc995741d2b8f9d93eeb8157b4d6cdbcfe' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/maintenance.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18514972405cf558484e9ff2-32183889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584850c862_56194085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584850c862_56194085')) {function content_5cf5584850c862_56194085($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
  <?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)) {?>
    <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
    <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
  <?php }?>
  <meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,follow">
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
">
  <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
global.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet">
</head>
<body>

<div id="maintenance" class="text-center">
  <img class="center-block img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>>
  <h1><?php echo smartyTranslate(array('s'=>'We\'ll be back soon.'),$_smarty_tpl);?>
</h1>
  <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

  <p>
    <?php echo smartyTranslate(array('s'=>'We are currently updating our shop and will be back really soon.'),$_smarty_tpl);?>

    <br>
    <?php echo smartyTranslate(array('s'=>'Thanks for your patience.'),$_smarty_tpl);?>

  </p>
</div>

</body>
</html>
<?php }} ?>
