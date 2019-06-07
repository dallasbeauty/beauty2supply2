<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-05 12:39:06
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13683227915cf7f02a290519-52319191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff755a1e3c37cb5a587e58a6002ac901b2d87be' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockstore/blockstore.tpl',
      1 => 1559580871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13683227915cf7f02a290519-52319191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf7f02a2a5cf7_92228609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf7f02a2a5cf7_92228609')) {function content_5cf7f02a2a5cf7_92228609($_smarty_tpl) {?><section>
    <div id="stores_block_left" class="block">
        <h2 class="title_block section-title-column">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>

            </a>
        </h2>
        <div class="block_content blockstore">
            <p class="store_image">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
"
                   title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
                    <img class="img-responsive"
                         src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"
                         alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
                </a>
            </p>
            <?php if (!empty($_smarty_tpl->tpl_vars['store_text']->value)) {?>
                <p class="store-description">
                    <?php echo $_smarty_tpl->tpl_vars['store_text']->value;?>

                </p>
            <?php }?>
            <div>
                <a
                        class="btn btn-primary"
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
"
                        title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
                    <span><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
 <i class="icon icon-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section><?php }} ?>
