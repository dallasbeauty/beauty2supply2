<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:30
         compiled from "/home/site/wwwroot/themes/community-theme-default/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5954270295cf558462380f5-53815684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8836e0bb105177c063a2cf7961bd2d2bcf3ad84' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/breadcrumb.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5954270295cf558462380f5-53815684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'matches' => 0,
    'i' => 0,
    'matchCount' => 0,
    'match' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'isRtl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55846345478_29443737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55846345478_29443737')) {function content_5cf55846345478_29443737($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php';
?><?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['path']->value)) {?>
  
  <?php $_smarty_tpl->tpl_vars['matchCount'] = new Smarty_variable(preg_match_all('/<a.+?href="(.+?)"[^>]*>([^<]*)<\/a>/',$_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['matches']->value), null, 0);?>
  <?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array(), null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['matchCount']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['matchCount']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
    <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[] = array('url'=>$_smarty_tpl->tpl_vars['matches']->value[1][$_smarty_tpl->tpl_vars['i']->value],'title'=>$_smarty_tpl->tpl_vars['matches']->value[2][$_smarty_tpl->tpl_vars['i']->value]);?>
  <?php }} ?>

  
  <?php $_smarty_tpl->tpl_vars['match'] = new Smarty_variable(preg_match('/>([^<]+)(?:<\/\w+>\s*)?$/',$_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['matches']->value), null, 0);?>
  <?php if (!empty($_smarty_tpl->tpl_vars['matches']->value[1])) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[] = array('url'=>'','title'=>$_smarty_tpl->tpl_vars['matches']->value[1]);?>
  <?php } elseif (!$_smarty_tpl->tpl_vars['match']->value&&!$_smarty_tpl->tpl_vars['matchCount']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[] = array('url'=>'','title'=>$_smarty_tpl->tpl_vars['path']->value);?>
  <?php }?>
<?php }?>

<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Home Page'),$_smarty_tpl);?>
" itemprop="item">
      <span itemprop="name"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</span>
    </a>
    <meta itemprop="position" content="1">
  </li>
  <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['crumbs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['crumbs']['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumb']->value['url'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
" itemprop="item">
            <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
</span>
          </a>
        <?php } else { ?>
          <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
" itemprop="item">
            <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
</span>
          </a>
        <?php }?>
        <meta itemprop="position" content="<?php echo (intval($_smarty_tpl->getVariable('smarty')->value['foreach']['crumbs']['iteration'])+1);?>
">
      </li>
    <?php } ?>
  <?php }?>
</ol>

<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
  <nav>
    <ul class="pager">
      <li class="previous">
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php if (isset($_GET['HTTP_REFERER'])&&$_GET['HTTP_REFERER']) {?><?php echo $_GET['HTTP_REFERER'];?>
<?php } elseif (isset($_SERVER['HTTP_REFERER'])&&$_SERVER['HTTP_REFERER']) {?><?php echo $_SERVER['HTTP_REFERER'];?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <a href="<?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars(Smarty::$_smarty_vars['capture']['default'], ENT_QUOTES, 'UTF-8', true)),'/[\?|&]content_only=1/','');?>
" name="back">
          <span>
            <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

          </span>
        </a>
      </li>
    </ul>
  </nav>
<?php }?>
<?php }} ?>
