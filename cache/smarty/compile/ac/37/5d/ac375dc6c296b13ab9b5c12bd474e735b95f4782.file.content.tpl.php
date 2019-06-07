<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:32
         compiled from "/home/site/wwwroot/admin/themes/default/template/controllers/images/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18093210085cf5584894bc84-15057879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac375dc6c296b13ab9b5c12bd474e735b95f4782' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/controllers/images/content.tpl',
      1 => 1559581717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18093210085cf5584894bc84-15057879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'display_move' => 0,
    'current' => 0,
    'token' => 0,
    'table' => 0,
    'display_regenerate' => 0,
    'types' => 0,
    'k' => 0,
    'formats' => 0,
    'format' => 0,
    'image_indexation' => 0,
    'entityType' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558489b1172_77464956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558489b1172_77464956')) {function content_5cf558489b1172_77464956($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['display_move']->value)&&$_smarty_tpl->tpl_vars['display_move']->value) {?>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-horizontal">
        <div class="panel">
            <h3>
                <i class="icon-picture"></i>
                <?php echo smartyTranslate(array('s'=>'Move images'),$_smarty_tpl);?>

            </h3>
            <div class="alert alert-warning">
                <p><?php echo smartyTranslate(array('s'=>'You can choose to keep your images stored in the previous system. There\'s nothing wrong with that.'),$_smarty_tpl);?>
</p>
                <p><?php echo smartyTranslate(array('s'=>'You can also decide to move your images to the new storage system. In this case, click on the "Move images" button below. Please be patient. This can take several minutes.'),$_smarty_tpl);?>
</p>
            </div>
            <div class="alert alert-info">&nbsp;
                <?php echo smartyTranslate(array('s'=>'After moving all of your product images, set the "Use the legacy image filesystem" option above to "No" for best performance.'),$_smarty_tpl);?>

            </div>
            <div class="row">
                <div class="col-lg-12 pull-right">
                    <button type="submit" name="submitMoveImages<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default pull-right" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure?'),$_smarty_tpl);?>
');"><i class="process-icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Move images'),$_smarty_tpl);?>
</button>
                </div>
            </div>
        </div>
    </form>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['display_regenerate']->value)) {?>
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
    <div class="panel">
      <h3>
        <i class="icon-picture"></i>
        <?php echo smartyTranslate(array('s'=>'Regenerate thumbnails'),$_smarty_tpl);?>

      </h3>

      <div class="alert alert-info">
        <?php echo smartyTranslate(array('s'=>'Regenerates thumbnails for all existing images'),$_smarty_tpl);?>
<br />
        <?php echo smartyTranslate(array('s'=>'Please be patient. This can take several minutes.'),$_smarty_tpl);?>
<br />
        <?php echo smartyTranslate(array('s'=>'Be careful! Manually uploaded thumbnails will be erased and replaced by automatically generated thumbnails.'),$_smarty_tpl);?>

      </div>

      <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <div class="form-group second-select format_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display:none;">
          <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Select a format'),$_smarty_tpl);?>
</label>
          <div class="col-lg-9 margin-form">
            <select name="format_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
">
              <option value="all"><?php echo smartyTranslate(array('s'=>'All'),$_smarty_tpl);?>
</option>
              <?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['k']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->_loop = true;
?>
                <option value="<?php echo intval($_smarty_tpl->tpl_vars['format']->value['id_image_type']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['format']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
              <?php } ?>
            </select>
          </div>
        </div>
      <?php } ?>
      <script>
        function changeFormat(elt)
        {
          $('.second-select').hide();
          $('.format_' + $(elt).val()).show();
        }
      </script>

      <div class="form-group">
        <label class="control-label col-lg-3">
          <?php echo smartyTranslate(array('s'=>'Regenerate thumbnails'),$_smarty_tpl);?>

        </label>
        <table class="col-lg-9">
          <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['entityType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['image_indexation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['entityType']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
          <tr>
            <td>
              <button class="btn btn-info ajax-regenerate-button"
                      id="regenerate<?php echo mb_convert_encoding(htmlspecialchars(ucfirst($_smarty_tpl->tpl_vars['entityType']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
Images"
                      data-entity-type="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['entityType']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                      <?php if ($_smarty_tpl->tpl_vars['status']->value['total']==0) {?>disabled="disabled"<?php }?>
              >
                <i class="icon icon-play"></i> <?php echo smartyTranslate(array('s'=>'Regenerate %s','sprintf'=>array(Translate::getAdminTranslation(ucfirst($_smarty_tpl->tpl_vars['entityType']->value),'AdminImages'))),$_smarty_tpl);?>

              </button>
            </td>
            <td width="99%" style="padding-left: 20px; padding-top: 15px">
              <div class="progress<?php if ($_smarty_tpl->tpl_vars['status']->value['indexed']==0) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['status']->value['indexed']==0) {?> disabled="disabled"<?php }?>>
                <div id="progress-bar-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['entityType']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                     class="progress-bar"
                     role="progressbar"
                     style="width: <?php if ($_smarty_tpl->tpl_vars['status']->value['total']==0) {?>0<?php } else { ?><?php echo intval(((floatval($_smarty_tpl->tpl_vars['status']->value['indexed'])/floatval($_smarty_tpl->tpl_vars['status']->value['total']))*100));?>
<?php }?>%; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000">
                  <span style="position: absolute; padding-left: 5px; padding-right: 5px">
                    <span id="regen-indexed-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entityType']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo intval($_smarty_tpl->tpl_vars['status']->value['indexed']);?>
</span> / <span id="regen-total-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entityType']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo intval($_smarty_tpl->tpl_vars['status']->value['total']);?>
</span>
                  </span>
                </div>
              </div>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>

      <div class="panel-footer">
        <button type="button" id="regenerateAllImages" name="regenerateAllImages" class="btn btn-default pull-right">
          <i class="process-icon-cogs"></i> <span><?php echo smartyTranslate(array('s'=>'Regenerate all thumbnails'),$_smarty_tpl);?>
</span>
        </button>
      </div>
    </div>
  </form>
  <script type="text/javascript">
    (function () {
      var regenerating = window.regen = {
        products: false,
        categories: false,
        suppliers: false,
        manufacturers: false,
        scenes: false,
        stores: false,
      };

      var pendingRequests = [];
      function removeRequest(request) {
        const index = pendingRequests.indexOf(request);
        pendingRequests.splice(index, 1);
      }

      function getMax() {
        var max = 0;
        $('.ajax-regenerate-button').each(function (index, elem) {
          if (!elem.hasAttribute('disabled')) {
            max++;
          }
        });

        return max;
      }

      function getRegenerating() {
        var sum = 0;
        $.each(regenerating, function (entityType, value) {
          if (value) {
            sum++;
          }
        });

        return sum;
      }

      function initRegenerationButtons() {
        if (typeof $ === 'undefined') {
          setTimeout(initRegenerationButtons, 100);

          return;
        }

        function startGenerating(entityType) {
          var $button = $('button[data-entity-type="' + entityType + '"]');
          if ($button[0].hasAttribute('disabled')) {
            return;
          }

          $button
            .find('i')
            .removeClass('icon-play')
            .addClass('icon-pause');
          regenerating[entityType] = true;

          doAjaxRequest(entityType);
          checkRegenerationButton();
        }

        function pauseGenerating(entityType) {
          $('button[data-entity-type="' + entityType + '"]')
            .find('i')
            .addClass('icon-play')
            .removeClass('icon-pause');
          regenerating[entityType] = false;
          checkRegenerationButton();
        }

        function enableButtons() {
          $('#regenerateAllImages').removeAttr('disabled');
          $('#deleteOldImages').removeAttr('disabled');
          $('#resetImageStats').removeAttr('disabled');
        }

        function disableButtons() {
          $('#regenerateAllImages').attr('disabled', 'disabled');
          $('#deleteOldImages').attr('disabled', 'disabled');
          $('#resetImageStats').attr('disabled', 'disabled');
        }

        function spinDeleteButton() {
          $('#deleteOldImages')
            .find('i')
            .removeClass('process-icon-delete')
            .addClass('process-icon-refresh')
            .addClass('icon-spin');
          $('#resetImageStats')
            .find('i')
            .addClass('icon-spin');
        }

        function unspinDeleteButton() {
          $('#deleteOldImages')
            .find('i')
            .removeClass('process-icon-refresh')
            .removeClass('icon-spin')
            .addClass('process-icon-delete');
          $('#resetImageStats')
            .find('i')
            .removeClass('icon-spin')
        }

        function checkRegenerationButton() {
          var $button = $('#regenerateAllImages');
          if (getRegenerating() >= getMax()) {
            $button.find('i').removeClass('process-icon-cogs').addClass('process-icon-').text(String.fromCharCode(0xf04c));
            $button.find('span').text('<?php echo smartyTranslate(array('s'=>'Pause all','js'=>1),$_smarty_tpl);?>
');
          } else {
            $button.find('i').removeClass('process-icon-').addClass('process-icon-cogs').text('');
            $button.find('span').text('<?php echo smartyTranslate(array('s'=>'Regenerate all thumbnails','js'=>1),$_smarty_tpl);?>
');
          }
        }

        function deleteOldImages() {
          $.each(pendingRequests, function (index, request) {
            if (request != null && typeof request.abort === 'function') {
              request.abort();
            }
          });
          pendingRequests = [];

          disableButtons();
          spinDeleteButton();
          $.each(regenerating, function (entityType) {
            pauseGenerating(entityType);
          });
          var req = $.ajax({
            url: currentIndex + '&token=' + token + '&ajax=1&action=DeleteOldImages',
            method: 'post',
            dataType: 'json',
            success: function (response) {
              if (response == null) {
                return;
              }

              if (response.indexStatus) {
                $.each(response.indexStatus, function (entityType) {
                  $('#regen-indexed-' + entityType).text(response.indexStatus[entityType].indexed);
                  $('#regen-total-' + entityType).text(response.indexStatus[entityType].total);
                  $('#progress-bar-' + entityType).css('width', (response.indexStatus[entityType].indexed / response.indexStatus[entityType].total) * 100);
                });
              }
            },
            error: function (jqXhr) {
              showErrorMessage('<?php echo smartyTranslate(array('s'=>'Server timed out before all images could be deleted. You might want to increase the `max_execution_time`','js'=>1),$_smarty_tpl);?>
');

              if (parseInt(jqXhr.status, 10) === 504) {
                $.each(regenerating, function (entityType) {
                  $('#regen-indexed-' + entityType).text('0');
                  $('#regen-total-' + entityType).text('0');
                  $('#progress-bar-' + entityType).css('width', 0);
                });
              } else if (parseInt(jqXhr.status, 10) >= 500 < 600) {
                showErrorMessage('<?php echo smartyTranslate(array('s'=>'Received a 5xx response (generic error). Make the rate limit of the server has been (temporarily) increased','js'=>1),$_smarty_tpl);?>
');
              }
            },
            complete: function () {
              unspinDeleteButton();
              enableButtons();

              removeRequest(req);
            }
          });
          pendingRequests.push(req);
        }

        function resetImageStats() {
          $.each(pendingRequests, function (index, request) {
            if (request != null && typeof request.abort === 'function') {
              request.abort();
            }
          });
          pendingRequests = [];

          disableButtons();
          spinDeleteButton();
          $.each(regenerating, function (entityType) {
            pauseGenerating(entityType);
          });
          var req = $.ajax({
            url: currentIndex + '&token=' + token + '&ajax=1&action=ResetImageStats',
            method: 'post',
            dataType: 'json',
            success: function (response) {
              if (response == null) {
                return;
              }

              if (response.indexStatus) {
                $.each(response.indexStatus, function (entityType) {
                  $('#regen-indexed-' + entityType).text(response.indexStatus[entityType].indexed);
                  $('#regen-total-' + entityType).text(response.indexStatus[entityType].total);
                  $('#progress-bar-' + entityType).css('width', (response.indexStatus[entityType].indexed / response.indexStatus[entityType].total) * 100);
                });
              }
            },
            error: function (jqXhr) {
              showErrorMessage('<?php echo smartyTranslate(array('s'=>'Server timed out before all images could be deleted. You might want to increase the `max_execution_time`','js'=>1),$_smarty_tpl);?>
');

              if (parseInt(jqXhr.status, 10) === 504) {
                $.each(regenerating, function (entityType) {
                  $('#regen-indexed-' + entityType).text('0');
                  $('#regen-total-' + entityType).text('0');
                  $('#progress-bar-' + entityType).css('width', 0);
                });
              } else if (parseInt(jqXhr.status, 10) >= 500 < 600) {
                showErrorMessage('<?php echo smartyTranslate(array('s'=>'Received a 5xx response (generic error). Make the rate limit of the server has been (temporarily) increased','js'=>1),$_smarty_tpl);?>
');
              }
            },
            complete: function () {
              unspinDeleteButton();
              enableButtons();

              removeRequest(req);
            }
          });
          pendingRequests.push(req);
        }

        function doAjaxRequest(entityType) {
          var req = $.ajax({
            url: currentIndex + '&token=' + token + '&ajax=1&action=RegenerateThumbnails',
            method: 'post',
            dataType: 'json',
            data: JSON.stringify({
              entity_type: entityType,
            }),
            success: function (response) {
              if (response == null || !regenerating[entityType]) {
                return;
              }

              if (response.indexStatus) {
                if (response.indexStatus[entityType].indexed == 0) {
                  response.indexStatus[entityType].indexed = response.indexStatus[entityType].total;
                }
                $('#regen-indexed-' + entityType).text(response.indexStatus[entityType].indexed);
                $('#regen-total-' + entityType).text(response.indexStatus[entityType].total);
                $('#progress-bar-' + entityType).css('width', (response.indexStatus[entityType].indexed / response.indexStatus[entityType].total) * 100 + '%');

                if (response.indexStatus[entityType].indexed == response.indexStatus[entityType].total) {
                  showSuccessMessage('<?php echo smartyTranslate(array('s'=>'The thumbnails for this type have been successfully generated','js'=>1),$_smarty_tpl);?>
');
                  pauseGenerating(entityType);
                }
              }
              if (response.hasError) {
                $.each(response.errors, function (index, error) {
                  if (error) {
                    showErrorMessage(error);
                  }
                });
              }
            },
            error: function (jqXhr) {
              if (parseInt(jqXhr.status, 10) >= 500 && parseInt(jqXhr.status, 10) < 600) {
                showErrorMessage('<?php echo smartyTranslate(array('s'=>'Received a 5xx response (generic error). Make the rate limit of the server has been (temporarily) increased','js'=>1),$_smarty_tpl);?>
');
              }
            },
            complete: function () {
              if (regenerating[entityType]) {
                doAjaxRequest(entityType);
              }

              removeRequest(req);
            }
          });
          pendingRequests.push(req);
        }

        function toggleGeneratingAll(event) {
          event.preventDefault();

          if (getRegenerating() >= getMax()) {
            $.each(regenerating, function (entityType) {
              pauseGenerating(entityType);
            });
          } else {
            $.each(regenerating, function (entityType) {
              startGenerating(entityType);
            });
          }
        }

        function toggleRegeneration(event) {
          event.preventDefault();

          var $target = $(event.target);
          var entityType = $target.data('entity-type');
          var busy = regenerating[entityType];

          if (!busy) {
            startGenerating(entityType);
          } else {
            pauseGenerating(entityType);
          }
        }

        $(document).ready(function () {
          $('.ajax-regenerate-button').each(function (index, elem) {
            $(elem).click(toggleRegeneration);
          });
          var $regenerateAllImages = $('#regenerateAllImages');
          $regenerateAllImages.click(toggleGeneratingAll);
          $regenerateAllImages.parent().prepend('<button style="margin-left: 5px" type="button" id="resetImageStats" name="resetImageStats" class="btn btn-default"><i class="process-icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Reset indexation status','js'=>1),$_smarty_tpl);?>
</button>');
          $regenerateAllImages.parent().prepend('<button type="button" id="deleteOldImages" name="regenerateAllImages" class="btn btn-default"><i class="process-icon-delete"></i> <?php echo smartyTranslate(array('s'=>'Delete generated thumbnails','js'=>1),$_smarty_tpl);?>
</button>');
          $('#deleteOldImages').click(deleteOldImages);
          $('#resetImageStats').click(resetImageStats);
        });
      }

      initRegenerationButtons();
    }());
  </script>
<?php }?>
<?php }} ?>
