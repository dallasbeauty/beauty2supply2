<?php /*%%SmartyHeaderCode:5864412895cf7f02a5b7862-19382722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266427e3be095b801bfb36a40a503a6a6928d159' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1559580872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5864412895cf7f02a5b7862-19382722',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf7f02a604605_47234873',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf7f02a604605_47234873')) {function content_5cf7f02a604605_47234873($_smarty_tpl) {?><section>
    <div id="suppliers_block_left" class="block blocksupplier">
        <h2 class="title_block section-title-column">
                        <a href="https://beauty2supply2.azurewebsites.net/supplier"
               title="Suppliers">
                                Suppliers
                            </a>
                    </h2>
        <div class="block_content list-block">
                                                <ul>
                                                                                    <li>
                                                                        <a
                                            href="https://beauty2supply2.azurewebsites.net/thirty-bees"
                                            title="More about thirty bees">
                                                                                thirty bees
                                                                            </a>
                                                                    </li>
                                                                        </ul>
                                                    <form action="/index.php" method="get">
                        <div class="form-group selector1">
                            <select class="form-control" name="supplier_list">
                                <option value="0">All suppliers</option>
                                                                    <option value="https://beauty2supply2.azurewebsites.net/thirty-bees">thirty bees</option>
                                                            </select>
                        </div>
                    </form>
                                    </div>
    </div>
</section><?php }} ?>
