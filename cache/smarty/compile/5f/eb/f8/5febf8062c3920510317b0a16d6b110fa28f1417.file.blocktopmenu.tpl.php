<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14331882745cf5584be758b1-67236007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5febf8062c3920510317b0a16d6b110fa28f1417' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1559580872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14331882745cf5584be758b1-67236007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584beb9564_89368209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584beb9564_89368209')) {function content_5cf5584beb9564_89368209($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
    <nav>
        <div id="block_top_menu" class="sf-contener clearfix col-lg-12">
            <div class="cat-title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'blocktopmenu'),$_smarty_tpl);?>
</div>
            <ul class="sf-menu clearfix menu-content">
                <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
                    <li class="sf-search noBack" style="float:right">
                        <form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                            <p>
                                <input type="hidden" name="controller" value="search">
                                <input type="hidden" value="position" name="orderby">
                                <input type="hidden" value="desc" name="orderway">
                                <input type="text" name="search_query"
                                       value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                            </p>
                        </form>
                    </li>
                <?php }?>
            </ul>
        </div>
    </nav>
<?php }?>
<?php }} ?>
