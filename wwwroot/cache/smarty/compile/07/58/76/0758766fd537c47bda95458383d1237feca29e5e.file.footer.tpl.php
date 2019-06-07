<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:31
         compiled from "/home/site/wwwroot/themes/community-theme-default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19907484825cf558476818e5-15617463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0758766fd537c47bda95458383d1237feca29e5e' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/footer.tpl',
      1 => 1559580413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19907484825cf558476818e5-15617463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'ctheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55847698b85_76725643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55847698b85_76725643')) {function content_5cf55847698b85_76725643($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
      </main>
    <?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
      <aside id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
" role="navigation complementary"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</aside>
    <?php }?>
    </div>
  </div>

  <footer id="footer">

    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
      <div class="container">
        <div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
      </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['ctheme']->value['footer']['copyright']['display'])) {?>
      <div id="copyright-footer" role="contentinfo">
        <?php echo $_smarty_tpl->tpl_vars['ctheme']->value['footer']['copyright']['html'];?>

      </div>
    <?php }?>

  </footer>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
