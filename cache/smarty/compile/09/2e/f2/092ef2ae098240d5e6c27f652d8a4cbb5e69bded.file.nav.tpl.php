<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2612153575cf5584c17d491-58296482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '092ef2ae098240d5e6c27f652d8a4cbb5e69bded' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockuserinfo/nav.tpl',
      1 => 1559580873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2612153575cf5584c17d491-58296482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584c19b467_80402977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584c19b467_80402977')) {function content_5cf5584c19b467_80402977($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
  <li id="blockuserinfo-customer" class="blockuserinfo">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
      <span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span>
    </a>
  </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
  <li id="blockuserinfo-logout" class="blockuserinfo">
    <a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
      <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

    </a>
  </li>
<?php } else { ?>
  <li id="blockuserinfo-login" class="blockuserinfo">
    <a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
      <?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

    </a>
  </li>
<?php }?>
<?php }} ?>
