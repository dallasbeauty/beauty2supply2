<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:58:43
         compiled from "/home/site/wwwroot/modules/dashgoals/views/templates/hook/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8305769705cf608935f8bb1-06339784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57277ac32b2d12c8e28ad087939f98bbe436008c' => 
    array (
      0 => '/home/site/wwwroot/modules/dashgoals/views/templates/hook/config.tpl',
      1 => 1559581016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8305769705cf608935f8bb1-06339784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'goals_year' => 0,
    'goals_months' => 0,
    'month' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6089360f452_18005420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6089360f452_18005420')) {function content_5cf6089360f452_18005420($_smarty_tpl) {?>

<section id="dashgoals_config" class="dash_config hide">
  <header><i class="icon-wrench"></i> <?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'dashgoals'),$_smarty_tpl);?>
</header>
  <form class="defaultForm form-horizontal" method="post"
        action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard'), ENT_QUOTES, 'UTF-8', true);?>
">
    <table class="table table-condensed table-striped table-bordered">
      <thead>
        <tr>
          <th class="fixed-width-md"><?php echo $_smarty_tpl->tpl_vars['goals_year']->value;?>
</th>
          <th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Traffic','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
          <th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Conversion Rate','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
          <th class="fixed-width-lg"><?php echo smartyTranslate(array('s'=>'Average Cart Value','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Sales','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goals_months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['month']->value['label'];?>

            </td>
            <td>
              <div class="input-group">
                <input id="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
"
                       class="dashgoals_config_input form-control"
                       value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['traffic']);?>
"/>
              </div>
            </td>
            <td>
              <div class="input-group">
                <input id="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
"
                       class="dashgoals_config_input form-control"
                       value="<?php echo floatval($_smarty_tpl->tpl_vars['month']->value['values']['conversion']);?>
"/>
                <span class="input-group-addon">%</span>
              </div>
            </td>
            <td>
              <div class="input-group">
                <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->iso_code, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <input id="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
"
                       class="dashgoals_config_input form-control"
                       value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['avg_cart_value']);?>
"/>
              </div>
            </td>
            <td id="dashgoals_sales_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_sales">
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="panel-footer">
      <button class="btn btn-default pull-right" name="submitDashGoals" type="submit"><i
                class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'dashgoals'),$_smarty_tpl);?>
</button>
    </div>
  </form>
</section>
<?php }} ?>
