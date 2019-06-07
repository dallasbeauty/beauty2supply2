<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:35
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7713447005cf5584b69e474-26432134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd513b7f2ddb294d2891012bc95b227b76be50fe5' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blocksocial/blocksocial.tpl',
      1 => 1559580871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7713447005cf5584b69e474-26432134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'instagram_url' => 0,
    'vk_url' => 0,
    'linkedin_url' => 0,
    'wordpress_url' => 0,
    'amazon_url' => 0,
    'tumblr_url' => 0,
    'snapchat_url' => 0,
    'reddit_url' => 0,
    'yelp_url' => 0,
    'medium_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584b75b502_24300569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584b75b502_24300569')) {function content_5cf5584b75b502_24300569($_smarty_tpl) {?><section id="blocksocial" class="col-xs-12">
    <h2 class="title_block main-title-column social-header"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</h2>

    <?php if (!empty($_smarty_tpl->tpl_vars['facebook_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-facebook icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['twitter_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-twitter icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['rss_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank" rel="noopener">
            <i class="icon icon-rss icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['youtube_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-youtube icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['google_plus_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-google-plus icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['pinterest_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-pinterest icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['vimeo_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-vimeo icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['instagram_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-instagram icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['vk_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'VK','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank" rel="noopener">
            <i class="icon icon-vk icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['linkedin_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkedin_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Linkedin','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-linkedin icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['wordpress_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wordpress_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'WordPress','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-wordpress icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['amazon_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amazon_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Amazon','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-amazon icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['tumblr_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tumblr_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Tumblr','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-tumblr icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['snapchat_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snapchat_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Snapchat','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-snapchat icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['reddit_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reddit_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reddit','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-reddit icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['yelp_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yelp_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Yelp','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank" rel="noopener">
            <i class="icon icon-yelp icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['medium_url']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['medium_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Medium','mod'=>'blocksocial'),$_smarty_tpl);?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-medium icon-2x icon-fw"></i>
        </a>
    <?php }?>
</section>
<?php }} ?>
