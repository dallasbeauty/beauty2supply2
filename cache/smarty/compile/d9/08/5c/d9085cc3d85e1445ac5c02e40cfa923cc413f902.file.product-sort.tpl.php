<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/product-sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4661008375cf558e2af3b62-68705654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9085cc3d85e1445ac5c02e40cfa923cc413f902' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/product-sort.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4661008375cf558e2af3b62-68705654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'orderway' => 0,
    'request' => 0,
    'category' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'page_name' => 0,
    'paginationId' => 0,
    'orderbydefault' => 0,
    'orderwaydefault' => 0,
    'PS_CATALOG_MODE' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e2b8f8d9_20212273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e2b8f8d9_20212273')) {function content_5cf558e2b8f8d9_20212273($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderby']->value)&&isset($_smarty_tpl->tpl_vars['orderway']->value)) {?>

  <?php echo $_smarty_tpl->getSubTemplate ('./product-list-switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  
  <?php if (!isset($_smarty_tpl->tpl_vars['request']->value)) {?>
    <?php if (isset($_GET['id_category'])&&$_GET['id_category']) {?>
      <?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,true), null, 0);?>
    <?php } elseif (isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']) {?>
      <?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,true), null, 0);?>
    <?php } elseif (isset($_GET['id_supplier'])&&$_GET['id_supplier']) {?>
      <?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,true), null, 0);?>
    <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,true), null, 0);?>
    <?php }?>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='best-sales'&&(!isset($_GET['orderby'])||empty($_GET['orderby']))) {?>
    <?php $_smarty_tpl->tpl_vars['orderby'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['orderbydefault'] = new Smarty_variable('', null, 0);?>
  <?php }?>

  <div id="productsSortForm<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="form-group productsSortForm">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value, ENT_QUOTES, 'UTF-8', true);?>
">
      <label for="selectProductSort<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Sort by'),$_smarty_tpl);?>
</label>
      <select id="selectProductSort<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="selectProductSort form-control">
        <option value="<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='best-sales') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderbydefault']->value, ENT_QUOTES, 'UTF-8', true);?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderwaydefault']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if (!in_array($_smarty_tpl->tpl_vars['orderby']->value,array('price','name','quantity','reference'))&&$_smarty_tpl->tpl_vars['orderby']->value==$_smarty_tpl->tpl_vars['orderbydefault']->value) {?> selected="selected"<?php }?>>--</option>
        <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
          <option value="price:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='price'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Price: Lowest first'),$_smarty_tpl);?>
</option>
          <option value="price:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='price'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Price: Highest first'),$_smarty_tpl);?>
</option>
        <?php }?>
        <option value="name:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='name'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Product Name: A to Z'),$_smarty_tpl);?>
</option>
        <option value="name:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='name'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Product Name: Z to A'),$_smarty_tpl);?>
</option>
        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
          <option value="quantity:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='quantity'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'In stock'),$_smarty_tpl);?>
</option>
        <?php }?>
        <option value="reference:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='reference'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Reference: Lowest first'),$_smarty_tpl);?>
</option>
        <option value="reference:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='reference'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Reference: Highest first'),$_smarty_tpl);?>
</option>
      </select>
    </form>
  </div>

  <?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value=='') {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('request'=>$_smarty_tpl->tpl_vars['request']->value),$_smarty_tpl);?>

  <?php }?>

<?php }?>
<?php }} ?>
