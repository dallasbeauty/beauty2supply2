<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcontact/blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7116018955cf55849dfc428-18209311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2225f88544301388f888061397ec035e969899' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcontact/blockcontact.tpl',
      1 => 1559580864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7116018955cf55849dfc428-18209311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55849e19b89_83254996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55849e19b89_83254996')) {function content_5cf55849e19b89_83254996($_smarty_tpl) {?><section>
    <div id="contact_block" class="block">
        <h2 class="title_block section-title-column">
            <?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>

        </h2>
        <div class="block_content clearfix">
            <p>
                <?php echo smartyTranslate(array('s'=>'Our support hotline is available 24/7.','mod'=>'blockcontact'),$_smarty_tpl);?>

            </p>
            <?php if ($_smarty_tpl->tpl_vars['telnumber']->value!='') {?>
                <p class="tel">
                    <span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span>
                    <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?>
                <address>
                    <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>

                    </a>
                </address>
            <?php }?>
        </div>
    </div>
</section>
<?php }} ?>
