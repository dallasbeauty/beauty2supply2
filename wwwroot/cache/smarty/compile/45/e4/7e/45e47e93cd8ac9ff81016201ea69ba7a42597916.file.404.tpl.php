<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:28
         compiled from "/home/site/wwwroot/themes/community-theme-default/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19933229695cf55844e55514-23256003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e47e93cd8ac9ff81016201ea69ba7a42597916' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/404.tpl',
      1 => 1559580411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19933229695cf55844e55514-23256003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558451b69e6_49854627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558451b69e6_49854627')) {function content_5cf558451b69e6_49854627($_smarty_tpl) {?><div class="pagenotfound jumbotron text-center">
  <h2><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h2>
  <p><?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>
</p>
  <p><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</p>
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
    <div>
      <label for="search_query"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
      <div class="input-group">
        <input id="search_query" name="search_query" type="text" class="form-control">
        <span class="input-group-btn">
          <button type="submit" name="Submit" value="OK" class="btn btn-primary"><i class="icon icon-search"></i></button>
        </span>
      </div>
    </div>
  </form>
</div>

<nav>
  <ul class="pager">
    <li>
      <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo smartyTranslate(array('s'=>'Home page'),$_smarty_tpl);?>

      </a>
    </li>
  </ul>
</nav>
<?php }} ?>
