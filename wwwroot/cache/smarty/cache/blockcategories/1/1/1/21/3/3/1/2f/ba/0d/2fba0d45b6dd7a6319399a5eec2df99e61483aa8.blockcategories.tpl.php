<?php /*%%SmartyHeaderCode:10907937855cf7f0287d6ef6-42933430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fba0d45b6dd7a6319399a5eec2df99e61483aa8' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/blockcategories.tpl',
      1 => 1559580863,
      2 => 'file',
    ),
    '0af369e1429fdf34394f7cfea18bfaa498d52d86' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcategories/list_group_item.tpl',
      1 => 1559580863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10907937855cf7f0287d6ef6-42933430',
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf81b3c59fbc6_86682047',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf81b3c59fbc6_86682047')) {function content_5cf81b3c59fbc6_86682047($_smarty_tpl) {?>    <section id="blockcategories" class="blockcategories block">
        <h2 class="title_block section-title-column">
                            Coffee and Tea
                    </h2>
        <nav>
            <div class="list-group block_content">
                                      <a class="list-group-item ilvl-1" href="https://beauty2supply2.azurewebsites.net/Coffee">
    <span>Coffee</span>
  </a>

                                      <a class="list-group-item ilvl-1" href="https://beauty2supply2.azurewebsites.net/tea">
    <span>Tea</span>
  </a>

                            </div>
        </nav>
    </section>


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
