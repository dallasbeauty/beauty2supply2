<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:01
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12733365275cf558ddf28211-65244893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccad64700bc5d8fb1019801b8451184b4d984331' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl',
      1 => 1559582122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12733365275cf558ddf28211-65244893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558ddf3f487_31691996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558ddf3f487_31691996')) {function content_5cf558ddf3f487_31691996($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
  <div id="social-share-compare">
    <p><?php echo smartyTranslate(array('s'=>"Share this comparison with your friends:",'mod'=>'socialsharing'),$_smarty_tpl);?>
</p>
    <p class="socialsharing_product">
      <?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
        <button data-type="twitter" type="button" class="btn btn-xs btn-twitter">
          <i class="icon-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>

        </button>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
        <button data-type="facebook" type="button" class="btn btn-xs btn-facebook">
          <i class="icon-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>

        </button>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
        <button data-type="google-plus" type="button" class="btn btn-xs btn-google-plus">
          <i class="icon-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>

        </button>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
        <button data-type="pinterest" type="button" class="btn btn-xs btn-pinterest">
          <i class="icon-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>

        </button>
      <?php }?>
    </p>
  </div>
<?php }?>
<?php }} ?>
