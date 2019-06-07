<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:36:27
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13022173745cf6035b9fba22-56286949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce869677b761727355a11560b4d5832f0af65f0' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockfacebook/blockfacebook.tpl',
      1 => 1559580866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13022173745cf6035b9fba22-56286949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6035ba3eb48_11144836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6035ba3eb48_11144836')) {function content_5cf6035ba3eb48_11144836($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['facebookurl']->value)) {?>
    <section>
        <div id="blockfacebook" class="col-xs-12 col-sm-4">
            <h2 class="title"><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h2>
            <div id="fb-like-box-container" style="overflow: hidden;">
                <div class="fb-page" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-width="360"
                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true"></div>
            </div>
        </div>
        <div id="fb-root"></div>
    </section>
<?php }?>
<?php }} ?>
