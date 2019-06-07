<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:33
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/blockcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16468049405cf55849666b47-94925932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fba0d45b6dd7a6319399a5eec2df99e61483aa8' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/blockcategories.tpl',
      1 => 1559580863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16468049405cf55849666b47-94925932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'list_item_child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584969b534_52938316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584969b534_52938316')) {function content_5cf5584969b534_52938316($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['blockCategTree']->value)&&!empty($_smarty_tpl->tpl_vars['blockCategTree']->value['children'])) {?>
    <section id="blockcategories" class="blockcategories block">
        <h2 class="title_block section-title-column">
            <?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>

            <?php }?>
        </h2>
        <nav>
            <div class="list-group block_content">
                <?php  $_smarty_tpl->tpl_vars['list_item_child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_item_child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_item_child']->key => $_smarty_tpl->tpl_vars['list_item_child']->value) {
$_smarty_tpl->tpl_vars['list_item_child']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('./list_group_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list_item'=>$_smarty_tpl->tpl_vars['list_item_child']->value,'level'=>1), 0);?>

                <?php } ?>
            </div>
        </nav>
    </section>
<?php }?>


    <script type="text/javascript">
        $(function () {

            $('.blockcategories').each(function () {
                var $collapse = $(this).find('.collapse');
                var $triggers = $(this).find('.btn-toggle');

                $collapse.on('show.bs.collapse', function () {
                    var $target = $(this);
                    var $targetAndParents = $target.parents().filter('.collapse').add($target);

                    // Collapse all other menus which are not in the current tree
                    $collapse.filter('.collapse.in').not($targetAndParents).collapse('hide');

                    // Add 'active' class to triggers which show this element
                    $triggers.filter('[href="#' + $target.prop('id') + '"],' +
                            '[data-target="#' + $target.prop('id') + '"]').parent().addClass('active');
                });

                $collapse.on('hide.bs.collapse', function (e) {
                    // Fixes event being handled twice (event is trigger twice). WTF? @bootstrap, @jquery
                    if (e.handled) {
                        return;
                    } else {
                        e.handled = true;
                    }

                    // Remove 'active' class from triggers which show this collapsed element
                    $triggers.filter('[href="#' + $(this).prop('id') + '"],' +
                            '[data-target="#' + $(this).prop('id') + '"]').parent().removeClass('active');
                });

                // JavaScript workaround for expanding the active category tree line.
                // Preferably you should use an override and return expanded tree from the server side
                // @see themes/community-theme-default/modules/blockcategories/list_group_item.tpl
                var $activeMenuLink = $('.list-group-item.current');
                // Collect and expand all expandable parent nodes (going up)
                $activeMenuLink.parents('.collapse').add(
                        // Open up the current node also (if it's a tree)
                        $activeMenuLink.parent().next()
                ).collapse('show');

            });

        });
    </script>

<?php }} ?>
