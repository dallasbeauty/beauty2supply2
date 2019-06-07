<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4944228285cf55849ee9b77-96367253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba374ae0c250300be31ebb3828111b8ee787c2e4' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcontact/nav.tpl',
      1 => 1559580864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4944228285cf55849ee9b77-96367253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55849f03761_86857052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55849f03761_86857052')) {function content_5cf55849f03761_86857052($_smarty_tpl) {?> <li id="blockcontact-contact" class="blockcontact">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"
           title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>

        </a>
    </li>

    <?php if (!empty($_smarty_tpl->tpl_vars['telnumber']->value)) {?>
    <li id="blockcontact-phone" class="blockcontact">
        <p class="navbar-text">
            <i class="icon icon-phone"></i>
            <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>

            <a class="phone-link" href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
        </p>
    </li>
<?php }?>
<?php }} ?>
