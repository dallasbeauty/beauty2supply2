<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-05 12:39:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocksupplier/blocksupplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5864412895cf7f02a5b7862-19382722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266427e3be095b801bfb36a40a503a6a6928d159' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1559580872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5864412895cf7f02a5b7862-19382722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf7f02a5da664_69984993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf7f02a5da664_69984993')) {function content_5cf7f02a5da664_69984993($_smarty_tpl) {?><section>
    <div id="suppliers_block_left" class="block blocksupplier">
        <h2 class="title_block section-title-column">
            <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo smartyTranslate(array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>
">
                <?php }?>
                <?php echo smartyTranslate(array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
            </a>
            <?php }?>
        </h2>
        <div class="block_content list-block">
            <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
                                    <a
                                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocksupplier'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
">
                                        <?php }?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                        <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
                                    </a>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['form_list']->value) {?>
                    <form action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                        <div class="form-group selector1">
                            <select class="form-control" name="supplier_list">
                                <option value="0"><?php echo smartyTranslate(array('s'=>'All suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </form>
                <?php }?>
            <?php } else { ?>
                <p><?php echo smartyTranslate(array('s'=>'No supplier','mod'=>'blocksupplier'),$_smarty_tpl);?>
</p>
            <?php }?>
        </div>
    </div>
</section><?php }} ?>
