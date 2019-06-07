<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:05
         compiled from "/home/site/wwwroot/themes/community-theme-default/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14028801945cf558e1e57653-29259366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe3002261d7e2fe434fcc2f93df12f710cb2d491' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/pagination.tpl',
      1 => 1559580415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14028801945cf558e1e57653-29259366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_follow' => 0,
    'p' => 0,
    'category' => 0,
    'current_url' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'paginationId' => 0,
    'start' => 0,
    'stop' => 0,
    'no_follow_text' => 0,
    'requestPage' => 0,
    'p_previous' => 0,
    'pages_nb' => 0,
    'p_next' => 0,
    'nb_products' => 0,
    'products_per_page' => 0,
    'requestNb' => 0,
    'search_query' => 0,
    'tag' => 0,
    'requestKey' => 0,
    'requestValue' => 0,
    'n' => 0,
    'productShowingStart' => 0,
    'productShowing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e2033334_80321157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e2033334_80321157')) {function content_5cf558e2033334_80321157($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value)&&$_smarty_tpl->tpl_vars['no_follow']->value) {?>
  <?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable(' rel="nofollow"', null, 0);?>
<?php } else { ?>
  <?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value)) {?>

  <?php if (isset($_GET['id_category'])&&$_GET['id_category']&&isset($_smarty_tpl->tpl_vars['category']->value)) {?>
    <?php if (!isset($_smarty_tpl->tpl_vars['current_url']->value)) {?>
      <?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,false,true,false), null, 0);?>
    <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_url']->value, null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,true,false,false,true), null, 0);?>
  <?php } elseif (isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']&&isset($_smarty_tpl->tpl_vars['manufacturer']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,false,true,false), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,true,false,false,true), null, 0);?>
  <?php } elseif (isset($_GET['id_supplier'])&&$_GET['id_supplier']&&isset($_smarty_tpl->tpl_vars['supplier']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,false,true,false), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,true,false,false,true), null, 0);?>
  <?php } else { ?>
    <?php if (!isset($_smarty_tpl->tpl_vars['current_url']->value)) {?>
      <?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,false,true,false), null, 0);?>
    <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_url']->value, null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,true,false,false,true), null, 0);?>
  <?php }?>

  <div id="pagination<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="form-group clearfix">
    <?php if ($_smarty_tpl->tpl_vars['start']->value!=$_smarty_tpl->tpl_vars['stop']->value) {?>
      <ul class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['p']->value!=1) {?>
          <?php $_smarty_tpl->tpl_vars['p_previous'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value-1, null, 0);?>
          <li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="pagination_previous" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
">
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value);?>
" rel="prev">
              <span>&laquo;</span>
            </a>
          </li>
        <?php } else { ?>
          <li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="disabled pagination_previous" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
">
            <span>
              <span>&laquo;</span>
            </span>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value==3) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1);?>
">
              <span>1</span>
            </a>
          </li>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,2);?>
">
              <span>2</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value==2) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1);?>
">
              <span>1</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value>3) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1);?>
">
              <span>1</span>
            </a>
          </li>
          <li class="truncate">
            <span>
              <span>...</span>
            </span>
          </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['name'] = 'pagination';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = (int) $_smarty_tpl->tpl_vars['start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']) {?>
            <li class="active current">
              <span>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
              </span>
            </li>
          <?php } else { ?>
            <li>
              <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']);?>
">
                <span><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index'], ENT_QUOTES, 'UTF-8', true);?>
</span>
              </a>
            </li>
          <?php }?>
        <?php endfor; endif; ?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>$_smarty_tpl->tpl_vars['stop']->value+2) {?>
          <li class="truncate">
            <span>
              <span>...</span>
            </span>
          </li>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value);?>
">
              <span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value==$_smarty_tpl->tpl_vars['stop']->value+1) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value);?>
">
              <span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value==$_smarty_tpl->tpl_vars['stop']->value+2) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value-1);?>
">
              <span><?php echo $_smarty_tpl->tpl_vars['pages_nb']->value-intval(1);?>
</span>
            </a>
          </li>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value);?>
">
              <span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>1&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['pages_nb']->value) {?>
          <?php $_smarty_tpl->tpl_vars['p_next'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value+1, null, 0);?>
          <li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="pagination_next" title="<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
">
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value);?>
" rel="next">
              <span>&raquo;</span>
            </a>
          </li>
        <?php } else { ?>
          <li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="disabled pagination_next" title="<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
">
            <span>&raquo;</span>
          </li>
        <?php }?>
      </ul>

    <?php }?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['nb_products']->value>$_smarty_tpl->tpl_vars['products_per_page']->value&&$_smarty_tpl->tpl_vars['start']->value!=$_smarty_tpl->tpl_vars['stop']->value) {?>
    <div class="form-group showall">
      <form action="<?php if (!is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {?><?php echo $_smarty_tpl->tpl_vars['requestNb']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['requestNb']->value['requestUrl'];?>
<?php }?>" method="get">

        <?php if (!empty($_smarty_tpl->tpl_vars['search_query']->value)) {?>
          <input type="hidden" name="search_query" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['tag']->value)&&!is_array($_smarty_tpl->tpl_vars['tag']->value)) {?>
          <input type="hidden" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php }?>

        <?php if (is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {?>
          <?php  $_smarty_tpl->tpl_vars['requestValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requestValue']->_loop = false;
 $_smarty_tpl->tpl_vars['requestKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['requestNb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requestValue']->key => $_smarty_tpl->tpl_vars['requestValue']->value) {
$_smarty_tpl->tpl_vars['requestValue']->_loop = true;
 $_smarty_tpl->tpl_vars['requestKey']->value = $_smarty_tpl->tpl_vars['requestValue']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['requestKey']->value!='requestUrl'&&$_smarty_tpl->tpl_vars['requestKey']->value!='p') {?>
              <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requestKey']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requestValue']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <?php }?>
          <?php } ?>
        <?php }?>

        <button type="submit" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Show all'),$_smarty_tpl);?>
</button>
        <input name="n" id="nb_item" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['nb_products']->value;?>
">

      </form>
    </div>
  <?php }?>

  <div class="form-group product-count">
    <?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)<$_smarty_tpl->tpl_vars['nb_products']->value) {?>
      <?php $_smarty_tpl->tpl_vars['productShowing'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value, null, 0);?>
    <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['productShowing'] = new Smarty_variable(($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_products']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['p']->value==1) {?>
      <?php $_smarty_tpl->tpl_vars['productShowingStart'] = new Smarty_variable(1, null, 0);?>
    <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['productShowingStart'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
    <?php }?>
    <p class="form-control-static">
      <?php if ($_smarty_tpl->tpl_vars['nb_products']->value>1) {?>
        <?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of %3$d items','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value,$_smarty_tpl->tpl_vars['nb_products']->value)),$_smarty_tpl);?>

      <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of 1 item','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value)),$_smarty_tpl);?>

      <?php }?>
    </p>
  </div>

<?php }?>
<?php }} ?>
