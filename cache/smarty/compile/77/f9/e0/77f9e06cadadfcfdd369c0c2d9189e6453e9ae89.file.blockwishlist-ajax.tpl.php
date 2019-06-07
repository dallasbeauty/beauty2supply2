<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/blockwishlist-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23058565cf5584c368d08-53436274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f9e06cadadfcfdd369c0c2d9189e6453e9ae89' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockwishlist/blockwishlist-ajax.tpl',
      1 => 1559580874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23058565cf5584c368d08-53436274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584c394149_55026260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584c394149_55026260')) {function content_5cf5584c394149_55026260($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
  <dl class="products">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
      <dt>
        <span class="quantity-formated">
          <span class="quantity"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
</span>x
        </span>
        <a class="cart_block_product_name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
          <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],13,'...'), ENT_QUOTES, 'UTF-8', true);?>

        </a>
        <a class="ajax_cart_block_remove_link" href="javascript:;" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
, '0');" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'remove this product from my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
          <i class="icon icon-remove-sign"></i>
        </a>
      </dt>
      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
        <dd>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>

          </a>
        </dd>
      <?php }?>
    <?php } ?>
  </dl>
<?php } else { ?>
  <dl class="products no-products">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
      <dt><?php echo smartyTranslate(array('s'=>'You must create a wishlist before adding products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
    <?php } else { ?>
      <dt><?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
    <?php }?>
  </dl>
<?php }?>
<?php }} ?>
