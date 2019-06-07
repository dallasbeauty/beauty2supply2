<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:01
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/productcomments/products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3212917205cf558dd094b48-41773001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '724fc48398410479f5016b1fcb646ab791f6b961' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/productcomments/products-comparison.tpl',
      1 => 1559580877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3212917205cf558dd094b48-41773001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_ids_product' => 0,
    'grades' => 0,
    'grade' => 0,
    'grade_id' => 0,
    'product_grades' => 0,
    'id_product' => 0,
    'tab_grade' => 0,
    'list_product_average' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558dd0bf837_25636576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558dd0bf837_25636576')) {function content_5cf558dd0bf837_25636576($_smarty_tpl) {?><tr class="comparison_header active">
  <td class="td_empty"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
</td>
  <td colspan="<?php echo count($_smarty_tpl->tpl_vars['list_ids_product']->value);?>
"></td>
</tr>

<?php  $_smarty_tpl->tpl_vars['grade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grade']->_loop = false;
 $_smarty_tpl->tpl_vars['grade_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->key => $_smarty_tpl->tpl_vars['grade']->value) {
$_smarty_tpl->tpl_vars['grade']->_loop = true;
 $_smarty_tpl->tpl_vars['grade_id']->value = $_smarty_tpl->tpl_vars['grade']->key;
?>
  <tr>
    <td class="feature-name"><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</td>
    <?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
      <?php $_smarty_tpl->tpl_vars['tab_grade'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_grades']->value[$_smarty_tpl->tpl_vars['grade_id']->value], null, 0);?>
      <td class="comparison_infos ajax_block_product" align="center">
        <?php if (isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
          <div class="product-rating star_content">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['average'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
              <input class="auto-submit-star" disabled="disabled" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['grade_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['average']['index'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])) {?>checked="checked"<?php }?>>
            <?php endfor; endif; ?>
          </div>
        <?php } else { ?>
          -
        <?php }?>
      </td>
    <?php } ?>
  </tr>
<?php } ?>

<tr>
  <td  class="feature-name"><?php echo smartyTranslate(array('s'=>'Average','mod'=>'productcomments'),$_smarty_tpl);?>
</td>
  <?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
    <td class="comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center">
      <?php if (isset($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
        <div class="product-rating star_content">
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['average'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
            <input class="auto-submit-star" disabled="disabled" type="radio" name="average_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" <?php if (round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])) {?>checked="checked"<?php }?>>
          <?php endfor; endif; ?>
        </div>
      <?php } else { ?>
        -
      <?php }?>
    </td>
  <?php } ?>
</tr>

<?php }} ?>
