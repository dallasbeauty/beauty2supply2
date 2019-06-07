<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2277125775cf5584b3ac746-49791141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772425272123a118c51ed07d938d6d5afce3d6ae' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocksearch/blocksearch-top.tpl',
      1 => 1559580870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277125775cf5584b3ac746-49791141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584b3c6210_54593172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b3c6210_54593172')) {function content_5cf5584b3c6210_54593172($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 col-md-5" role="search">
  <form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="hidden" name="controller" value="search">
    <input type="hidden" name="orderby" value="position">
    <input type="hidden" name="orderway" value="desc">
    <div class="input-group input-group-lg">
      <input class="form-control" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" required aria-label="Search our site">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="submit_search" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
"><i class="icon icon-search"></i></button>
      </span>
    </div>
  </form>
</div>
<?php }} ?>
