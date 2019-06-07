<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:34
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2569098495cf5584a3d41e1-35069192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2569098495cf5584a3d41e1-35069192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584a3e4b31_42418672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584a3e4b31_42418672')) {function content_5cf5584a3e4b31_42418672($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['facebookurl']->value)) {?>
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
