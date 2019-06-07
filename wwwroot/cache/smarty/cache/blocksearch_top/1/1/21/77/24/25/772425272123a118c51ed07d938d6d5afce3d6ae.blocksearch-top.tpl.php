<?php /*%%SmartyHeaderCode:14816496585cf60436838883-53220108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '14816496585cf60436838883-53220108',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf604368e19d9_00877890',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf604368e19d9_00877890')) {function content_5cf604368e19d9_00877890($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 col-md-5" role="search">
  <form id="searchbox" method="get" action="//beauty2supply2.azurewebsites.net/search" >
    <input type="hidden" name="controller" value="search">
    <input type="hidden" name="orderby" value="position">
    <input type="hidden" name="orderway" value="desc">
    <div class="input-group input-group-lg">
      <input class="form-control" type="search" id="search_query_top" name="search_query" placeholder="Search" value="" required aria-label="Search our site">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="submit_search" title="Search"><i class="icon icon-search"></i></button>
      </span>
    </div>
  </form>
</div>
<?php }} ?>
