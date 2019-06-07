<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:03
         compiled from "/home/site/wwwroot/admin/themes/default/template/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7213508805cf558df70dc10-95072160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '137985e0653e9562dee0cbbebab6528a5f9fd872' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/footer.tpl',
      1 => 1559580714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7213508805cf558df70dc10-95072160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'timer_start' => 0,
    'lang_iso' => 0,
    'php_errors' => 0,
    'modals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558df776e10_76800577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558df776e10_76800577')) {function content_5cf558df776e10_76800577($_smarty_tpl) {?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap hide">

	<div class="col-sm-2 hidden-xs">
		<a href="http://www.thirtybees.com/" class="_blank">thirty bees&trade;</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="<?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
"></i> <?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
	</div>

	<div class="col-sm-2 hidden-xs">
		<div class="social-networks">
			<a class="link-social link-twitter _blank" href="https://twitter.com/thethirtybees" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook _blank" href="https://www.facebook.com/thirtybees" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github _blank" href="https://github.com/thirtybees" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-google _blank" href="https://plus.google.com/+thirtybees/" title="Google">
				<i class="icon-google-plus"></i>
			</a>
			<a class="link-social link-reddit _blank" href="https://www.reddit.com/r/thirtybees/" title="Reddit">
				<i class="icon-reddit"></i>
			</a>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="footer-contact">
			<a href="https://thirtybees.com/contact/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-envelope"></i>
				<?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="https://forum.thirtybees.com/category/10/bug-reports/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-bug"></i>
				<?php echo smartyTranslate(array('s'=>'Bug Tracker'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="https://forum.thirtybees.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-comments"></i>
				<?php echo smartyTranslate(array('s'=>'Forum'),$_smarty_tpl);?>

			</a>
		</div>
	</div>

	<div class="col-sm-3">
		<?php echo smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['modals']->value)) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }} ?>
