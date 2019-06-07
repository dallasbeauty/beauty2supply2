<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:30
         compiled from "/home/site/wwwroot/themes/community-theme-default/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19900655435cf558469345f7-04043899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3102d6708d5287ac54402ba3fe85a764e927ab4a' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/cms.tpl',
      1 => 1559580412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19900655435cf558469345f7-04043899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms' => 0,
    'cms_category' => 0,
    'sub_category' => 0,
    'subcategory' => 0,
    'link' => 0,
    'cms_pages' => 0,
    'cmspages' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558469a17c0_96683900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558469a17c0_96683900')) {function content_5cf558469a17c0_96683900($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['cms']->value)&&!isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>

  <?php if (!$_smarty_tpl->tpl_vars['cms']->value->active) {?>
    <div id="admin-action-cms" class="well">
      <div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl);?>
</div>
        <input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value->id;?>
">
        <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" name="publish_button" class="btn btn-success">
        <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" name="lnk_view" class="btn btn-warning">
      </div>
      <div class="clear"></div>
      <div id="admin-action-result"></div>
    </div>
  <?php }?>

  <article>
    <?php if (!empty($_smarty_tpl->tpl_vars['cms']->value->meta_title)) {?>
      <h1 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['cms']->value->meta_title;?>
</h1>
    <?php }?>
    <div class="cms-content rte"><?php echo $_smarty_tpl->tpl_vars['cms']->value->content;?>
</div>
  </article>

<?php } elseif (isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>

  <article>
    <h1 class="page-heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>

    <?php if (!empty($_smarty_tpl->tpl_vars['cms_category']->value->description)) {?>
      <div class="cms-category-content rte"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['sub_category']->value)) {?>
      <section>
        <h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'List of sub categories in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</h2>
        <ul class="cms-category-list">
          <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
            <li>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

              </a>
            </li>
          <?php } ?>
        </ul>
      </section>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['cms_pages']->value)) {?>
      <section>
        <h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'List of pages in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</h2>
        <ul class="cms-page-list">
          <?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmspages']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value) {
$_smarty_tpl->tpl_vars['cmspages']->_loop = true;
?>
            <li>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

              </a>
            </li>
          <?php } ?>
        </ul>
      </section>
    <?php }?>
  </article>

<?php } else { ?>
  <div class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'This page does not exist.'),$_smarty_tpl);?>
</div>
<?php }?>

<?php if (isset($_GET['ad'])&&$_GET['ad']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ad')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_GET['adtoken'])&&$_GET['adtoken']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'adtoken')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
<?php }} ?>
