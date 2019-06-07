<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocksearch/blocksearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16905613485cf5584b4968a2-62216851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8b8c39c7c2c9282559f3d20125bd23bf1979e2' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocksearch/blocksearch.tpl',
      1 => 1559580870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16905613485cf5584b4968a2-62216851',
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
  'unifunc' => 'content_5cf5584b4cf7b7_40201288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b4cf7b7_40201288')) {function content_5cf5584b4cf7b7_40201288($_smarty_tpl) {?><section>
    <div id="search_block_left" class="block">
        <h2 class="title_block section-title-column"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</h2>
        <form method="get"
              action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
"
              id="searchbox">
            <label for="search_query_block"><?php echo smartyTranslate(array('s'=>'Search products:','mod'=>'blocksearch'),$_smarty_tpl);?>
</label>
            <p class="block_content clearfix">
                <input type="hidden" name="orderby" value="position">
                <input type="hidden" name="controller" value="search">
                <input type="hidden" name="orderway" value="desc">
                <input class="search_query form-control" type="text" id="search_query_block" name="search_query"
                       value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
                <button type="submit" id="search_button" class="btn btn-default"><span><i class="icon icon-search"></i></span>
                </button>
            </p>
        </form>
    </div>
</section><?php }} ?>
