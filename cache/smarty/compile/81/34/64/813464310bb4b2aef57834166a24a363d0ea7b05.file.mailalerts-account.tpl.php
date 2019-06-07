<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:53
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/mailalerts/views/templates/front/mailalerts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9093425265cf5585d4237c3-83514942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '813464310bb4b2aef57834166a24a363d0ea7b05' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/mailalerts/views/templates/front/mailalerts-account.tpl',
      1 => 1559582121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9093425265cf5585d4237c3-83514942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'mailAlerts' => 0,
    'mailAlert' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5585d470849_74974568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5585d470849_74974568')) {function content_5cf5585d470849_74974568($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my account','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'mailalerts'),$_smarty_tpl);?>
</a>
  <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
  <span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="mailalerts_block_account" class="block">
  <h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</h1>
  <?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value) {?>
    <div class="products-block">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['mailAlert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mailAlert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mailAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mailAlert']->key => $_smarty_tpl->tpl_vars['mailAlert']->value) {
$_smarty_tpl->tpl_vars['mailAlert']->_loop = true;
?>
          <li class="clearfix">
            <a class="products-block-image" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['mailAlert']->value['link_rewrite'],$_smarty_tpl->tpl_vars['mailAlert']->value['cover'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="">
            </a>
            <div class="product-content">
            <span class="remove">
              <i class="icon icon-remove" rel="ajax_id_mailalert_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product_attribute'];?>
"></i>
            </span>
              <h5><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
              <div class="product-description"><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</small></div>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  <?php }?>
  <div id="mailalerts_block_account_warning" class="<?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value) {?>hidden<?php }?> alert alert-warning"><?php echo smartyTranslate(array('s'=>'No mail alerts yet.','mod'=>'mailalerts'),$_smarty_tpl);?>
</div>
</div>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo smartyTranslate(array('s'=>'Back to your account','mod'=>'mailalerts'),$_smarty_tpl);?>

      </a>
    </li>
  </ul>
</nav>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mailalerts_url_remove'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'remove')))),$_smarty_tpl);?>

<?php }} ?>
