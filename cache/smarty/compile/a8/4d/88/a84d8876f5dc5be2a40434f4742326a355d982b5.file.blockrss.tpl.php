<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockrss/blockrss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3087568325cf5584b215a95-52187402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84d8876f5dc5be2a40434f4742326a355d982b5' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockrss/blockrss.tpl',
      1 => 1559580869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3087568325cf5584b215a95-52187402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'rss_links' => 0,
    'rss_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584b261d05_01380374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b261d05_01380374')) {function content_5cf5584b261d05_01380374($_smarty_tpl) {?><section>
    <div id="rss_block_left" class="block">
        <h2 class="title_block section-title-column"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
        <div class="block_content">
            <?php if ($_smarty_tpl->tpl_vars['rss_links']->value) {?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['rss_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rss_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rss_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rss_link']->key => $_smarty_tpl->tpl_vars['rss_link']->value) {
$_smarty_tpl->tpl_vars['rss_link']->_loop = true;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['rss_link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rss_link']->value['title'];?>
</a></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p><?php echo smartyTranslate(array('s'=>'No RSS feed added','mod'=>'blockrss'),$_smarty_tpl);?>
</p>
            <?php }?>
        </div>
    </div>
</section><?php }} ?>
