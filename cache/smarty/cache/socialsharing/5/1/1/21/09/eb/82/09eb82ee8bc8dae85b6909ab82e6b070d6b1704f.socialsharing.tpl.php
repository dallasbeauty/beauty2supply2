<?php /*%%SmartyHeaderCode:15482536455cf6110e9930a3-46681886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09eb82ee8bc8dae85b6909ab82e6b070d6b1704f' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1559582122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15482536455cf6110e9930a3-46681886',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6110e9d9f13_30724620',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6110e9d9f13_30724620')) {function content_5cf6110e9d9f13_30724620($_smarty_tpl) {?>	<p class="socialsharing_product hidden-print">
					<button data-type="twitter" type="button" class="btn btn-xs btn-twitter">
				<i class="icon-twitter"></i> Tweet
			</button>
							<button data-type="facebook" type="button" class="btn btn-xs btn-facebook">
				<i class="icon-facebook"></i> Share
			</button>
							<button data-type="google-plus" type="button" class="btn btn-xs btn-google-plus">
				<i class="icon-google-plus"></i> Google+
			</button>
							<button data-type="pinterest" type="button" class="btn btn-xs btn-pinterest">
				<i class="icon-pinterest"></i> Pinterest
			</button>
			</p>
<?php }} ?>
