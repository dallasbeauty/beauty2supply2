<?php /*%%SmartyHeaderCode:9790984925cf7f02972b744-21454269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f247d709b582e9385ea5b7cc61c02275a904c2f0' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1559580867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9790984925cf7f02972b744-21454269',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf7f029782eb1_15548024',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf7f029782eb1_15548024')) {function content_5cf7f029782eb1_15548024($_smarty_tpl) {?><section>
<div id="manufacturers_block_left" class="block blockmanufacturer">
  <h2 class="title_block section-title-column">
          <a href="https://beauty2supply2.azurewebsites.net/manufacturers" title="Manufacturers">
          Manufacturers
          </a>
      </h2>
  <div class="block_content list-block">
                  <ul>
                                    <li>
                <a
                  href="https://beauty2supply2.azurewebsites.net/bee-hive" title="More about Bee Hive">
                  Bee Hive
                </a>
              </li>
                              </ul>
                    <form action="/index.php" method="get">
          <div class="form-group selector1">
            <select class="form-control" name="manufacturer_list">
              <option value="0">All manufacturers</option>
                              <option value="https://beauty2supply2.azurewebsites.net/bee-hive">Bee Hive</option>
                          </select>
          </div>
        </form>
            </div>
</div>
</section><?php }} ?>
