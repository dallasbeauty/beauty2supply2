<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-05 12:39:07
         compiled from "/home/site/wwwroot/themes/community-theme-default/product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18982318905cf7f02b5d24a0-88564973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b96c5f778a2c74c913b69c448e2f6f5ab8d00a' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/product-list-colors.tpl',
      1 => 1559580416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18982318905cf7f02b5d24a0-88564973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'col_img_dir' => 0,
    'color' => 0,
    'link' => 0,
    'img_color_exists' => 0,
    'img_col_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf7f02b61bd83_90887840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf7f02b61bd83_90887840')) {function content_5cf7f02b61bd83_90887840($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['colors_list']->value)) {?>
  <ul class="color_to_pick_list clearfix">
    <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
      <?php if (isset($_smarty_tpl->tpl_vars['col_img_dir']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['img_color_exists'] = new Smarty_variable(file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['color']->value['id_attribute'])).('.jpg')), null, 0);?>
        <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute'],Configuration::get('PS_REWRITING_SETTINGS'),false,true), ENT_QUOTES, 'UTF-8', true);?>
" id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
" class="color_pick"<?php if (!$_smarty_tpl->tpl_vars['img_color_exists']->value&&isset($_smarty_tpl->tpl_vars['color']->value['color'])&&$_smarty_tpl->tpl_vars['color']->value['color']) {?> style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php if ($_smarty_tpl->tpl_vars['img_color_exists']->value) {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;?>
<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_attribute']);?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="20" height="20">
            <?php }?>
          </a>
        </li>
      <?php }?>
    <?php } ?>
  </ul>
<?php }?>
<?php }} ?>
