<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:34
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocklink/blocklink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18052608685cf5584a91a1e0-69418811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6153bcb5b9be5782815b8721c5da0bd048b538' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocklink/blocklink.tpl',
      1 => 1559580867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18052608685cf5584a91a1e0-69418811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'title' => 0,
    'blocklink_links' => 0,
    'lang' => 0,
    'blocklink_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584a9343a7_91617244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584a9343a7_91617244')) {function content_5cf5584a9343a7_91617244($_smarty_tpl) {?><section>
    <div id="links_block_left" class="block">
        <h2 class="title_block section-title-column">
            <?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
            <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
        </h2>
        <div class="block_content list-block">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['blocklink_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocklink_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocklink_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->key => $_smarty_tpl->tpl_vars['blocklink_link']->value) {
$_smarty_tpl->tpl_vars['blocklink_link']->_loop = true;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?>
                        <li>
                            <article>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </article>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<?php }} ?>
