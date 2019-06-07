<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocktags/blocktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8479166235cf5584bd12283-52018333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd09a5aacaee6d53ca388a095877ed8d6385298d' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocktags/blocktags.tpl',
      1 => 1559580872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8479166235cf5584bd12283-52018333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584bd50166_03661041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584bd50166_03661041')) {function content_5cf5584bd50166_03661041($_smarty_tpl) {?><section>
    <div id="tags_block_left" class="block tags_block">
        <h2 class="title_block section-title-column">
            <?php echo smartyTranslate(array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl);?>

        </h2>
        <div class="block_content">
            <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                    <a
                            class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
"
                            href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
<?php $_tmp18=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp18), ENT_QUOTES, 'UTF-8', true);?>
"
                            title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                    >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                <?php } ?>
            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl);?>

            <?php }?>
        </div>
    </div>
</section><?php }} ?>
