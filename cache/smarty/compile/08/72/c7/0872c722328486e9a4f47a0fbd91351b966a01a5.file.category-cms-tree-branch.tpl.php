<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:30
         compiled from "/home/site/wwwroot/themes/community-theme-default/category-cms-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11190250145cf55846471055-96665814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0872c722328486e9a4f47a0fbd91351b966a01a5' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/category-cms-tree-branch.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11190250145cf55846471055-96665814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584649de60_01096956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584649de60_01096956')) {function content_5cf5584649de60_01096956($_smarty_tpl) {?><li>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
  </a>

  <?php if (!empty($_smarty_tpl->tpl_vars['node']->value['children'])||!empty($_smarty_tpl->tpl_vars['node']->value['cms'])) {?>
    <ul>

      <?php if (!empty($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
        <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
          <?php if (!empty($_smarty_tpl->tpl_vars['child']->value['children'])||!empty($_smarty_tpl->tpl_vars['child']->value['cms'])) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

          <?php }?>
        <?php } ?>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['node']->value['cms'])) {?>
        <?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->_loop = true;
?>
          <li>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

            </a>
          </li>
        <?php } ?>
      <?php }?>

    </ul>
  <?php }?>
</li>
<?php }} ?>
