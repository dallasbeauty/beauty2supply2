<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:02
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9992546095cf558de18da17-20965046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1afd62b64f7eaeb63172010f4b1d62d87689a768' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/themeconfigurator/views/templates/hook/hook_footer.tpl',
      1 => 1559582123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9992546095cf558de18da17-20965046',
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
  'unifunc' => 'content_5cf558de1cb1e0_95981493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558de1cb1e0_95981493')) {function content_5cf558de1cb1e0_95981493($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>
      <div class="col-xs-12 col-sm-3">
        <div id="themeconfigurator-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id_item'], ENT_QUOTES, 'UTF-8', true);?>
" class="themeconfigurator-block themeconfigurator-block-footer">

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
<?php }?>
<?php }} ?>
