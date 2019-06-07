<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:34
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19764685175cf5584a172f05-05244300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc60a6ca79c1bec859e68a37866b54e5dff0432e' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1559580866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19764685175cf5584a172f05-05244300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'current_iso' => 0,
    'currency_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584a1cb352_94612396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584a1cb352_94612396')) {function content_5cf5584a1cb352_94612396($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['currencies']->value)) {?>

  <?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>
      <?php $_smarty_tpl->tpl_vars['current_iso'] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['iso_code'], null, 0);?>
      <?php break 1?>
    <?php }?>
  <?php } ?>

  <li id="blockcurrencies" class="dropdown">

    
    <div id="setCurrency" class="hidden" style="display: none">
      <input type="hidden" name="id_currency" id="id_currency" value="">
      <input type="hidden" name="SubmitCurrency" value="">
    </div>

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <?php echo smartyTranslate(array('s'=>'Currency: %s','sprintf'=>array($_smarty_tpl->tpl_vars['current_iso']->value),'mod'=>'blockcurrencies'),$_smarty_tpl);?>
 <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
      <?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
        <?php if (strpos($_smarty_tpl->tpl_vars['f_currency']->value['name'],('(').($_smarty_tpl->tpl_vars['f_currency']->value['iso_code']).(')'))===false) {?>
          <?php ob_start();?><?php echo smartyTranslate(array('s'=>'%s (%s)','sprintf'=>array($_smarty_tpl->tpl_vars['f_currency']->value['name'],$_smarty_tpl->tpl_vars['f_currency']->value['iso_code']),'mod'=>'blockcurrencies'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_tmp15, null, 0);?>
        <?php } else { ?>
          <?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['name'], null, 0);?>
        <?php }?>
        <li<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?> class="active"<?php }?>>
          <a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>

          </a>
        </li>
      <?php } ?>
    </ul>

  </li>

<?php }?>
<?php }} ?>
