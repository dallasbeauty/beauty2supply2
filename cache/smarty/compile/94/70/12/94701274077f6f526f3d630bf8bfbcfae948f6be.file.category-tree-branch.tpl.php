<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:30
         compiled from "/home/site/wwwroot/themes/community-theme-default/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5993984145cf5584668fe21-36814917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94701274077f6f526f3d630bf8bfbcfae948f6be' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/category-tree-branch.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5993984145cf5584668fe21-36814917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558466bc5d3_70961619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558466bc5d3_70961619')) {function content_5cf558466bc5d3_70961619($_smarty_tpl) {?><li>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['desc'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
  <?php if (!empty($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

      <?php } ?>
    </ul>
  <?php }?>
</li>
<?php }} ?>
