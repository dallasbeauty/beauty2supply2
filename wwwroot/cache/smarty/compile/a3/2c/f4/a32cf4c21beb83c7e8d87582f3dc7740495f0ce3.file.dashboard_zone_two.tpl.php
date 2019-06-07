<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 01:58:43
         compiled from "/home/site/wwwroot/modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20406905365cf608935770b9-34586673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a32cf4c21beb83c7e8d87582f3dc7740495f0ce3' => 
    array (
      0 => '/home/site/wwwroot/modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl',
      1 => 1559581016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20406905365cf608935770b9-34586673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'goals_year' => 0,
    'dashgoals_ajax_link' => 0,
    'colors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6089358a600_93761917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6089358a600_93761917')) {function content_5cf6089358a600_93761917($_smarty_tpl) {?>

<div class="clearfix"></div>
<script>
  var currency_format = <?php echo intval($_smarty_tpl->tpl_vars['currency']->value->format);?>
;
  var currency_sign = '<?php echo addslashes($_smarty_tpl->tpl_vars['currency']->value->sign);?>
';
  var currency_blank = <?php echo intval($_smarty_tpl->tpl_vars['currency']->value->blank);?>
;
  var currency_iso_code = '<?php echo strtr($_smarty_tpl->tpl_vars['currency']->value->iso_code, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
  var priceDisplayPrecision = 0;
  var dashgoals_year = <?php echo intval($_smarty_tpl->tpl_vars['goals_year']->value);?>
;
  var dashgoals_ajax_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['dashgoals_ajax_link']->value);?>
';
</script>

<section id="dashgoals" class="panel widget">
  <header class="panel-heading">
    <i class="icon-bar-chart"></i>
    <?php echo smartyTranslate(array('s'=>'Forecast','mod'=>'dashgoals'),$_smarty_tpl);?>

    <span id="dashgoals_title" class="badge"><?php echo $_smarty_tpl->tpl_vars['goals_year']->value;?>
</span>
    <span class="btn-group">
      <a href="javascript:void(0);"
         onclick="dashgoals_changeYear('backward');"
         class="btn btn-default btn-xs">
        <i class="icon-backward"></i>
      </a>
      <a href="javascript:void(0);" onclick="dashgoals_changeYear('forward');" class="btn btn-default btn-xs">
        <i class="icon-forward"></i></a>
    </span>

    <span class="panel-heading-action">
      <a class="list-toolbar-btn" href="javascript:void(0);" onclick="toggleDashConfig('dashgoals');"
         title="<?php echo smartyTranslate(array('s'=>'Configure','mod'=>'dashtrends'),$_smarty_tpl);?>
">
        <i class="process-icon-configure"></i>
      </a>
      <a class="list-toolbar-btn" href="javascript:void(0);" onclick="refreshDashboard('dashgoals');"
         title="<?php echo smartyTranslate(array('s'=>'Refresh','mod'=>'dashtrends'),$_smarty_tpl);?>
">
        <i class="process-icon-refresh"></i>
      </a>
    </span>
  </header>
  <?php echo $_smarty_tpl->getSubTemplate ('./config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <section class="loading">
    <div class="btn-group" data-toggle="buttons">
      <label class="btn btn-default">
        <input type="radio" name="options" onchange="selectDashgoalsChart('traffic');"/>
        <i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[0];?>
"></i> <?php echo smartyTranslate(array('s'=>'Traffic','mod'=>'dashgoals'),$_smarty_tpl);?>

      </label>
      <label class="btn btn-default">
        <input type="radio" name="options" onchange="selectDashgoalsChart('conversion');"/>
        <i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[1];?>
"></i> <?php echo smartyTranslate(array('s'=>'Conversion','mod'=>'dashgoals'),$_smarty_tpl);?>

      </label>
      <label class="btn btn-default">
        <input type="radio" name="options" onchange="selectDashgoalsChart('avg_cart_value');"/>
        <i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[2];?>
"></i> <?php echo smartyTranslate(array('s'=>'Average Cart Value','mod'=>'dashgoals'),$_smarty_tpl);?>

      </label>
      <label class="btn btn-default active">
        <input type="radio" name="options" onchange="selectDashgoalsChart('sales');"/>
        <i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[3];?>
"></i> <?php echo smartyTranslate(array('s'=>'Sales','mod'=>'dashgoals'),$_smarty_tpl);?>

      </label>
    </div>
    <div id="dash_goals_chart1" class="chart with-transitions">
      <svg></svg>
    </div>
  </section>
</section>
<?php }} ?>
