<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:02
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13628668265cf558de269507-34979421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4bad8540a0d712a16ad1fa74b0c8efa38d902a9' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook_home.tpl',
      1 => 1559582123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13628668265cf558de269507-34979421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558de2b2727_20182202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558de2b2727_20182202')) {function content_5cf558de2b2727_20182202($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
  <div id="themeconfigurator-home" class="col-xs-12">
    <div class="row">
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>
          <div class="col-xs-12 col-sm-4">
            <div id="themeconfigurator-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id_item'], ENT_QUOTES, 'UTF-8', true);?>
" class="themeconfigurator-block themeconfigurator-block-home">

              <?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>
                <a class="item-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1) {?> target="_blank"<?php }?>>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                <img class="item-img center-block img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)$_smarty_tpl->tpl_vars['item']->value['image']));?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['image_w']) {?> width="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['image_w']);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['image_h']) {?> height="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['image_h']);?>
"<?php }?>>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['item']->value['title']&&$_smarty_tpl->tpl_vars['item']->value['title_use']==1) {?>
                <h3 class="item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['item']->value['html']) {?>
                <div class="item-html">
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>

                </div>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>
                </a>
              <?php }?>

            </div>
          </div>
        <?php }?>
      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
