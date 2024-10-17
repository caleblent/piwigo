<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:36:36
  from 'C:\xampp\htdocs\piwigo\admin\themes\default\template\picture_modify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6710945423cb53_04435307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '134c185e63e4025f0ab13aad4b0003e0bf8993d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piwigo\\admin\\themes\\default\\template\\picture_modify.tpl',
      1 => 1729120906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/autosize.inc.tpl' => 1,
    'file:include/datepicker.inc.tpl' => 1,
    'file:include/colorbox.inc.tpl' => 1,
    'file:include/album_selector.inc.tpl' => 1,
  ),
),false)) {
function content_6710945423cb53_04435307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\piwigo\\include\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\piwigo\\include\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:include/autosize.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/datepicker.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
(function(){
var categoriesCache = new CategoriesCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['categories'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

categoriesCache.selectize(jQuery('[data-selectize=categories]'));

var tagsCache = new TagsCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['tags'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

tagsCache.selectize(jQuery('[data-selectize=tags]'), { lang: {
  'Add': '<?php echo l10n('Create');?>
'
}});

jQuery(function(){   jQuery('[data-datepicker]').pwgDatepicker({
    showTimepicker: true,
    cancelButton: '<?php echo l10n('Cancel');?>
'
  });
});

jQuery("a.preview-box").colorbox({
	photo: true
});

str_are_you_sure = '<?php echo strtr((string)l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_yes = '<?php echo strtr((string)l10n('Yes, delete'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_no = '<?php echo strtr((string)l10n('No, I have changed my mind'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
url_delete = '<?php echo $_smarty_tpl->tpl_vars['U_DELETE']->value;?>
';
str_albums_found = '<?php echo strtr((string)l10n("<b>%d</b> albums found"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_album_found = '<?php echo strtr((string)l10n("<b>1</b> album found"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_result_limit = '<?php echo strtr((string)l10n("<b>%d+</b> albums found, try to refine the search"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_orphan = '<?php echo strtr((string)l10n('This photo is an orphan'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_no_search_in_progress = '<?php echo strtr((string)l10n('No search in progress'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

related_categories_ids = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['related_categories_ids']->value ));?>
;
str_already_in_related_cats = '<?php echo strtr((string)l10n('This albums is already in related categories list'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';


$('#action-delete-picture').on('click', function() {
  $.confirm({
    title: str_are_you_sure,
    draggable: false,
    titleClass: "groupDeleteConfirm",
    theme: "modern",
    content: "",
    animation: "zoom",
    boxWidth: '30%',
    useBootstrap: false,
    type: 'red',
    animateFromElement: false,
    backgroundDismiss: true,
    typeAnimated: false,
    buttons: {
        confirm: {
          text: str_yes,
          btnClass: 'btn-red',
          action: function () {
            window.location.href = url_delete.replaceAll('amp;', '');
          }
        },
        cancel: {
          text: str_no
        }
    }
  });
})


}());
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'picture_modify','load'=>'footer','path'=>'admin/themes/default/js/picture_modify.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 
<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post" id="pictureModify">
<?php if ($_smarty_tpl->tpl_vars['INTRO']->value['is_svg']) {?>
  <div id='picture-preview' class="svg-container">
<?php } else { ?>
  <div id='picture-preview'>
<?php }?>
    <div class='picture-preview-actions'>
      <a class="preview-box icon-zoom-square" href="<?php echo $_smarty_tpl->tpl_vars['FILE_SRC']->value;?>
" title="<?php echo l10n('Zoom');?>
"></a>
      <a class="icon-download" href="<?php echo $_smarty_tpl->tpl_vars['U_DOWNLOAD']->value;?>
" title="<?php echo l10n('Download');?>
"></a>
      <a class="icon-signal" href="<?php echo $_smarty_tpl->tpl_vars['U_HISTORY']->value;?>
" title="<?php echo l10n('Visit history');?>
"></a>
<?php if (!url_is_remote($_smarty_tpl->tpl_vars['PATH']->value)) {?>
      <a class="icon-arrows-cw" href="<?php echo $_smarty_tpl->tpl_vars['U_SYNC']->value;?>
" title="<?php echo l10n('Synchronize metadata');?>
"></a>
      <a class="icon-trash" title="<?php echo l10n('delete photo');?>
" id='action-delete-picture'></a>
<?php }?>
    </div>
<?php if ((isset($_smarty_tpl->tpl_vars['U_JUMPTO']->value))) {?>
      <a class="see-out" href="<?php echo $_smarty_tpl->tpl_vars['U_JUMPTO']->value;?>
" >
      <p><i class="icon-left-open"></i><?php echo l10n('Open in gallery');?>
</p>
<?php } else { ?>
      <a class="see-out disabled" href="#" >
      <p class="tiptip" title="<?php echo l10n('You don\'t have access to this photo');?>
" ><i class="icon-left-open"></i><?php echo l10n('Open in gallery');?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['INTRO']->value['is_svg']) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
" alt="<?php echo l10n('Thumbnail');?>
" class="svg-image" style="<?php if ($_smarty_tpl->tpl_vars['FORMAT']->value) {?>width:100%; max-height:100%;<?php } else { ?>max-width:100%; height:100%;<?php }?>">
<?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['TN_SRC']->value;?>
" alt="<?php echo l10n('Thumbnail');?>
" class="other-image-format" style="<?php if ($_smarty_tpl->tpl_vars['FORMAT']->value) {?>width:100%; max-height:100%;<?php } else { ?>max-width:100%; height:100%;<?php }?>">
<?php }?>
    </a>
  </div>
  <div id='picture-content'>
    <div id='picture-infos'>
      <div class='info-framed'>
        <div class='info-framed-icon'>
          <i class='icon-picture'></i>
        </div>
        <div class='info-framed-container'>
          <div class='info-framed-title'><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['file'];?>
</div>
          <div><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['size'];?>
</div>
          <div><?php if ((isset($_smarty_tpl->tpl_vars['INTRO']->value['formats']))) {
echo $_smarty_tpl->tpl_vars['INTRO']->value['formats'];?>
 <?php }?></div>
          <div><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['ext'];?>
</div>
        </div>
      </div>

      <div class='info-framed'>
        <div class='info-framed-icon'>
          <span class='icon-calendar'></span>
        </div>
        <div class='info-framed-container'>
          <div class='info-framed-title'><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['date'];?>
</div>
          <div><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['age'];?>
</div>
          <div><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['added_by'];?>
</div>
          <div><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['stats'];?>
</div>
        </div>
      </div>
    </div>


    <p>
      <strong><?php echo l10n('Title');?>
</strong>
      <br>
      <input type="text" class="large" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['NAME']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    </p>

    <p>
      <strong><?php echo l10n('Author');?>
</strong>
      <br>
      <input type="text" class="large" name="author" value="<?php echo $_smarty_tpl->tpl_vars['AUTHOR']->value;?>
">
    </p>

    <p>
      <strong><?php echo l10n('Creation date');?>
</strong>
      <br>
      <input type="hidden" name="date_creation" value="<?php echo $_smarty_tpl->tpl_vars['DATE_CREATION']->value;?>
">
      <label class="date-input">
        <i class="icon-calendar"></i>
        <input type="text" data-datepicker="date_creation" data-datepicker-unset="date_creation_unset" readonly>
      </label>
      <a href="#" class="icon-cancel-circled" id="date_creation_unset"><?php echo l10n('unset');?>
</a>
    </p>

    <p>
      <strong><?php echo l10n('Linked albums');?>
 <span class="linked-albums-badge <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['related_categories']->value) < 1) {?> badge-red <?php }?>"> <?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['related_categories']->value);?>
 </span></strong>
<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['related_categories']->value) < 1) {?>
        <span class="orphan-photo"><?php echo l10n('This photo is an orphan');?>
</span>
<?php } else { ?>
        <span class="orphan-photo"></span>
<?php }?>
      <br>
      <select class="invisible-related-categories-select" name="associate[]" multiple>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_categories']->value, 'cat_path', false, 'key');
$_smarty_tpl->tpl_vars['cat_path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cat_path']->value) {
$_smarty_tpl->tpl_vars['cat_path']->do_else = false;
?>
        <option selected value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <div class="related-categories-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_categories']->value, 'cat_path', false, 'key');
$_smarty_tpl->tpl_vars['cat_path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cat_path']->value) {
$_smarty_tpl->tpl_vars['cat_path']->do_else = false;
?>
      <div class="breadcrumb-item"><span class="link-path"><?php echo $_smarty_tpl->tpl_vars['cat_path']->value['name'];?>
</span><?php if ($_smarty_tpl->tpl_vars['cat_path']->value['unlinkable']) {?><span id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 class="icon-cancel-circled remove-item"></span><?php } else { ?><span id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 class="icon-help-circled help-item tiptip" title="<?php echo l10n('This picture is physically linked to this album, you can\'t dissociate them');?>
"></span><?php }?></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <div class="breadcrumb-item linked-albums add-item <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['related_categories']->value) < 1) {?> highlight <?php }?>"><span class="icon-plus-circled"></span><?php echo l10n('Add');?>
</div>
    </p>

    <p>
      <strong><?php echo l10n('Representation of albums');?>
</strong>
      <br>
      <select data-selectize="categories" data-value="<?php echo htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['represented_albums']->value )), ENT_QUOTES, 'UTF-8', true);?>
"
        placeholder="<?php echo l10n('Type in a search term');?>
"
        name="represent[]" multiple style="width:calc(100% + 2px);"></select>
    </p>

    <p>
      <strong><?php echo l10n('Tags');?>
</strong>
      <br>
      <select data-selectize="tags" data-value="<?php echo htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag_selection']->value )), ENT_QUOTES, 'UTF-8', true);?>
"
        placeholder="<?php echo l10n('Type in a search term');?>
"
        data-create="true" name="tags[]" multiple style="width:calc(100% + 2px);"></select>
    </p>

    <p>
      <strong><?php echo l10n('Description');?>
</strong>
      <br>
      <textarea name="description" id="description" class="description"><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</textarea>
    </p>

    <p>
      <strong><?php echo l10n('Who can see this photo?');?>
</strong> (<?php echo l10n('Privacy level');?>
)
      <br>
      <div class='select-icon icon-down-open'> </div>
      <select name="level" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['level_options_selected']->value),$_smarty_tpl);?>

      </select>
   </p>

    <p>
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
      <input class="submit" type="submit" value="<?php echo l10n('Save Settings');?>
" name="submit">
    </p>
  </div>

</form>

<?php ob_start();
echo l10n('Associate to album');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo l10n('Search');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:include/album_selector.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1,'searchPlaceholder'=>$_prefixVariable2), 0, false);
?>

<style>
.selectize-input  .item,
.selectize-input .item.active {
  background-image:none !important;
  background-color: #ffa646 !important;
  border-color: transparent !important;
  color: black !important;

  border-radius: 20px !important;
}

.selectize-input .item .remove,
.selectize-input .item .remove {
  background-color: transparent !important;
  border-top-right-radius: 20px !important;
  border-bottom-right-radius: 20px !important;
  color: black !important;
  
  border-left: 1px solid transparent !important;

}
.selectize-input .item .remove:hover,
.selectize-input .item .remove:hover {
  background-color: #ff7700 !important;
}
</style>
<?php }
}
