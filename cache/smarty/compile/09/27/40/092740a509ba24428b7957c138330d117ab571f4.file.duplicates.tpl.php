<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:31
         compiled from "/home/site/wwwroot/admin/themes/default/template/controllers/duplicate_urls/duplicates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9240085235cf55847ed46b8-45401876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '092740a509ba24428b7957c138330d117ab571f4' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/controllers/duplicate_urls/duplicates.tpl',
      1 => 1559581716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9240085235cf55847ed46b8-45401876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'duplicates_languages' => 0,
    'duplicates' => 0,
    'duplicate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55847ef9e87_82720018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55847ef9e87_82720018')) {function content_5cf55847ef9e87_82720018($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-link"></i> <?php echo smartyTranslate(array('s'=>'Duplicate URLs'),$_smarty_tpl);?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </div>
        <?php $_smarty_tpl->tpl_vars['duplicates'] = new Smarty_variable($_smarty_tpl->tpl_vars['duplicates_languages']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['duplicates']->value)) {?>
            <div class="row table-responsive clearfix ">
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width:10%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'Type'),$_smarty_tpl);?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'Type'),$_smarty_tpl);?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
</span>
                            </th>
                            <th style="width:40%">
                                <span class="title_box"><?php echo smartyTranslate(array('s'=>'URL'),$_smarty_tpl);?>
</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['duplicate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['duplicate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['duplicates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['duplicate']->key => $_smarty_tpl->tpl_vars['duplicate']->value) {
$_smarty_tpl->tpl_vars['duplicate']->_loop = true;
?>
                            <tr>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['a_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['a_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['a_view'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                           class="btn btn-default"
                                           title="<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
">
                                            <i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['b_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['b_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['b_view'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                           class="btn btn-default"
                                           title="<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
">
                                            <i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['a_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['duplicate']->value['a_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } else { ?>
            <h2><?php echo smartyTranslate(array('s'=>'No duplicates found. Good job!'),$_smarty_tpl);?>
</h2>
        <?php }?>
    </div>
<?php } ?>
<?php }} ?>
