<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:36:39
  from 'C:\xampp\htdocs\piwigo\themes\default\template\picture.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67109457d312c2_55044430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e207b12eb9723097c3db554969e223131b161585' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piwigo\\themes\\default\\template\\picture.tpl',
      1 => 1729120850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_67109457d312c2_55044430 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.switchbox','load'=>'async','require'=>'jquery','path'=>'themes/default/js/switchbox.js'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content"<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> class="contentWithMenu"<?php }?>>

<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) || !empty($_smarty_tpl->tpl_vars['infos']->value)) {
$_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BEFORE']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BEFORE']->value;
}?>

<div class=titrePage id=imageHeaderBar><div class="imageNumber"><?php echo $_smarty_tpl->tpl_vars['PHOTO']->value;?>
</div>
	<div class="browsePath">
		<?php echo $_smarty_tpl->tpl_vars['SECTION_TITLE']->value;?>
<span class="browsePathSeparator"><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
</span><h2><?php echo $_smarty_tpl->tpl_vars['current']->value['TITLE'];?>
</h2>
	</div>
</div>

<div id="imageToolBar">

<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'picture_nav_buttons.tpl','picture_nav_buttons' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class=actionButtonsWrapper><a id=imageActionsSwitch class=pwg-button><span class="pwg-icon pwg-icon-ellipsis"></span></a><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('version'=>1,'id'=>'modus.async','path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/js/modus.async.js",'load'=>'async'),$_smarty_tpl ) );?>
<div class="actionButtons">
<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['unique_derivatives'])) && count($_smarty_tpl->tpl_vars['current']->value['unique_derivatives']) > 1) {
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
function changeImgSrc(url,typeSave,typeMap)
{
	var theImg = document.getElementById("theMainImage");
	if (theImg)
	{
		theImg.removeAttribute("width");theImg.removeAttribute("height");
		theImg.src = url;
		theImg.useMap = "#map"+typeMap;
	}
	jQuery('#derivativeSwitchBox .switchCheck').css('visibility','hidden');
	jQuery('#derivativeChecked'+typeMap).css('visibility','visible');
	document.cookie = 'picture_deriv='+typeSave+';path=<?php echo $_smarty_tpl->tpl_vars['COOKIE_PATH']->value;?>
';
}
(window.SwitchBox=window.SwitchBox||[]).push("#derivativeSwitchLink", "#derivativeSwitchBox");
<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<a id="derivativeSwitchLink" title="<?php echo l10n('Photo sizes');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-sizes"></span><span class="pwg-button-text"><?php echo l10n('Photo sizes');?>
</span></a><div id="derivativeSwitchBox" class="switchBox"><div class="switchBoxTitle"><?php echo l10n('Photo sizes');?>
</div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'], 'derivative', false, 'derivative_type');
$_smarty_tpl->tpl_vars['derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['derivative_type']->value => $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->do_else = false;
?><span class="switchCheck" id="derivativeChecked<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
"<?php if ($_smarty_tpl->tpl_vars['derivative']->value->get_type() != $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type()) {?> style="visibility:hidden"<?php }?>>&#x2714; </span><a href="javascript:changeImgSrc('<?php echo strtr((string)$_smarty_tpl->tpl_vars['derivative']->value->get_url(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
','<?php echo $_smarty_tpl->tpl_vars['derivative_type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
')"><?php echo l10n($_smarty_tpl->tpl_vars['derivative']->value->get_type());?>
<span class="derivativeSizeDetails"> (<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_size_hr();?>
)</span></a><br><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['U_ORIGINAL']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );?>
<a href="javascript:phpWGOpenWindow('<?php echo $_smarty_tpl->tpl_vars['U_ORIGINAL']->value;?>
','xxx','scrollbars=yes,toolbar=no,status=no,resizable=yes')" rel="nofollow"><?php echo l10n('Original');?>
</a><?php }?></div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_START']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['U_SLIDESHOW_START']->value;?>
" title="<?php echo l10n('slideshow');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-slideshow"></span><span class="pwg-button-text"><?php echo l10n('slideshow');?>
</span></a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_METADATA']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['U_METADATA']->value;?>
" title="<?php echo l10n('Show file metadata');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-camera-info"></span><span class="pwg-button-text"><?php echo l10n('Show file metadata');?>
</span></a><?php }
if ((isset($_smarty_tpl->tpl_vars['current']->value['U_DOWNLOAD']))) {?><a id="downloadSwitchLink" href="<?php echo $_smarty_tpl->tpl_vars['current']->value['U_DOWNLOAD'];?>
" title="<?php echo l10n('Download this file');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-save"></span><span class="pwg-button-text"><?php echo l10n('Download');?>
</span></a><?php if (!empty($_smarty_tpl->tpl_vars['current']->value['formats'])) {
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin5->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery().ready(function() {
  jQuery("#downloadSwitchLink").removeAttr("href");

  (window.SwitchBox=window.SwitchBox||[]).push("#downloadSwitchLink", "#downloadSwitchBox");
});
<?php $_block_repeat=false;
echo $_block_plugin5->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div id="downloadSwitchBox" class="switchBox"><div class="switchBoxTitle"><?php echo l10n('Download');?>
 - <?php echo l10n('Formats');?>
</div><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['formats'], 'format');
$_smarty_tpl->tpl_vars['format']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['format']->value['download_url'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['format']->value['label'];?>
<span class="downloadformatDetails"> (<?php echo $_smarty_tpl->tpl_vars['format']->value['filesize'];?>
)</span></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?> <?php }
if ((isset($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BUTTONS']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
echo $_smarty_tpl->tpl_vars['button']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_ACTIONS']->value))) {
echo $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_ACTIONS']->value;
}
if ((isset($_smarty_tpl->tpl_vars['favorite']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['favorite']->value['U_FAVORITE'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['favorite']->value['IS_FAVORITE']) {
echo l10n('delete this photo from your favorites');
} else {
echo l10n('add this photo to your favorites');
}?>" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-favorite-<?php if ($_smarty_tpl->tpl_vars['favorite']->value['IS_FAVORITE']) {?>del<?php } else { ?>add<?php }?>"></span><span class="pwg-button-text"><?php echo l10n('Favorites');?>
</span></a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_SET_AS_REPRESENTATIVE']->value))) {?><a id="cmdSetRepresentative" href="<?php echo $_smarty_tpl->tpl_vars['U_SET_AS_REPRESENTATIVE']->value;?>
" title="<?php echo l10n('set as album representative');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-representative"></span><span class="pwg-button-text"><?php echo l10n('representative');?>
</span></a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_PHOTO_ADMIN']->value))) {?><a id="cmdEditPhoto" href="<?php echo $_smarty_tpl->tpl_vars['U_PHOTO_ADMIN']->value;?>
" title="<?php echo l10n('Edit photo');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-edit"></span><span class="pwg-button-text"><?php echo l10n('Edit');?>
</span></a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_CADDIE']->value))) {
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin6->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>function addToCadie(aElement, rootUrl, id)
{
if (aElement.disabled) return;
aElement.disabled=true;
var y = new PwgWS(rootUrl);
y.callService(
	"pwg.caddie.add", {image_id: id} ,
	{
		onFailure: function(num, text) { alert(num + " " + text); document.location=aElement.href; },
		onSuccess: function(result) { aElement.disabled = false; }
	}
	);
}<?php $_block_repeat=false;
echo $_block_plugin6->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><a href="<?php echo $_smarty_tpl->tpl_vars['U_CADDIE']->value;?>
" onclick="addToCadie(this, '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
); return false;" title="<?php echo l10n('Add to caddie');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-caddie-add"> </span><span class="pwg-button-text"><?php echo l10n('Caddie');?>
</span></a><?php }?></div></div>
</div>
<div id="theImageAndInfos">
<div id="theImage">
<?php echo $_smarty_tpl->tpl_vars['ELEMENT_CONTENT']->value;?>


<?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {?>
<p class="imageComment"><?php echo $_smarty_tpl->tpl_vars['COMMENT_IMG']->value;?>
</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value))) {?>
<p>
	[ <a href="<?php echo $_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value;?>
"><?php echo l10n('stop the slideshow');?>
</a> ]
</p>
<?php }?>

</div><div id="infoSwitcher"></div><div id="imageInfos">
<?php if ($_smarty_tpl->tpl_vars['DISPLAY_NAV_THUMB']->value) {?>
	<div class="navThumbs">
<?php if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?>
			<a class="navThumb" id="linkPrev" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" rel="prev">
				<span class="thumbHover prevThumbHover"></span>
        <img class="<?php if (((isset($_smarty_tpl->tpl_vars['previous']->value['path_ext'])) && $_smarty_tpl->tpl_vars['previous']->value['path_ext'] == 'svg')) {?>svgImg<?php }?>" src="<?php if (((isset($_smarty_tpl->tpl_vars['previous']->value['path_ext'])) && $_smarty_tpl->tpl_vars['previous']->value['path_ext'] == 'svg')) {
echo $_smarty_tpl->tpl_vars['previous']->value['path'];
} else {
echo $_smarty_tpl->tpl_vars['previous']->value['derivatives']['square']->get_url();
}?>" alt="<?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
">
			</a>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['U_UP']->value))) {?>
			<a class="navThumb" id="linkPrev" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
">
				<div class="thumbHover"><?php echo l10n('First Page');?>
<br><br><?php echo l10n('Go back to the album');?>
</div>
			</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?>
			<a class="navThumb" id="linkNext" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" rel="next">
				<span class="thumbHover nextThumbHover"></span>
				<img class="<?php if (((isset($_smarty_tpl->tpl_vars['next']->value['path_ext'])) && $_smarty_tpl->tpl_vars['next']->value['path_ext'] == 'svg')) {?>svgImg<?php }?>" src="<?php if (((isset($_smarty_tpl->tpl_vars['next']->value['path_ext'])) && $_smarty_tpl->tpl_vars['next']->value['path_ext'] == 'svg')) {
echo $_smarty_tpl->tpl_vars['next']->value['path'];
} else {
echo $_smarty_tpl->tpl_vars['next']->value['derivatives']['square']->get_url();
}?>" alt="<?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
">
			</a>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['U_UP']->value))) {?>
			<a class="navThumb" id="linkNext"  href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
"  title="<?php echo l10n('Thumbnails');?>
">
				<div class="thumbHover"><?php echo l10n('Last Page');?>
<br><br><?php echo l10n('Go back to the album');?>
</div>
			</a>
<?php }?>
	</div>
<?php }?>

<dl id="standard" class="imageInfoTable">
<?php if ($_smarty_tpl->tpl_vars['display_info']->value['author'] && (isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value))) {?><div id="Author" class="imageInfo"><dt><?php echo l10n('Author');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_AUTHOR']->value;?>
</dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['created_on'] && (isset($_smarty_tpl->tpl_vars['INFO_CREATION_DATE']->value))) {?><div id="datecreate" class="imageInfo"><dt><?php echo l10n('Created on');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_CREATION_DATE']->value;?>
</dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['posted_on']) {?><div id="datepost" class="imageInfo"><dt><?php echo l10n('Posted on');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_POSTED_DATE']->value;?>
</dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['dimensions'] && (isset($_smarty_tpl->tpl_vars['INFO_DIMENSIONS']->value))) {?><div id="Dimensions" class="imageInfo"><dt><?php echo l10n('Dimensions');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_DIMENSIONS']->value;?>
</dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['file']) {?><div id="File" class="imageInfo"><dt><?php echo l10n('File');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;?>
</dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['filesize'] && (isset($_smarty_tpl->tpl_vars['INFO_FILESIZE']->value))) {?><div id="Filesize" class="imageInfo"><dt><?php echo l10n('Filesize');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_FILESIZE']->value;?>
</dd></div><?php }
if (($_smarty_tpl->tpl_vars['display_info']->value['tags'] && (isset($_smarty_tpl->tpl_vars['related_tags']->value)))) {?><div id="Tags" class="imageInfo"><dt><?php echo l10n('Tags');?>
</dt><dd><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_tags']->value, 'tag', false, NULL, 'tag_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] : null)) {?>, <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['categories'] && (isset($_smarty_tpl->tpl_vars['related_categories']->value))) {?><div id="Categories" class="imageInfo"><dt><?php echo l10n('Albums');?>
</dt><dd><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['visits']) {?><div id="Visits" class="imageInfo"><dt><?php echo l10n('Visits');?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['INFO_VISITS']->value;?>
</dd></div><?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['rating_score'] && (isset($_smarty_tpl->tpl_vars['rate_summary']->value))) {?><div id="Average" class="imageInfo"><dt><?php echo l10n('Rating score');?>
</dt><dd><?php if ($_smarty_tpl->tpl_vars['rate_summary']->value['count']) {?><span id="ratingScore"><?php echo $_smarty_tpl->tpl_vars['rate_summary']->value['score'];?>
</span> <span id="ratingCount">(<?php echo l10n_dec('%d rate','%d rates',$_smarty_tpl->tpl_vars['rate_summary']->value['count']);?>
)</span><?php } else { ?><span id="ratingScore"><?php echo l10n('no rate');?>
</span> <span id="ratingCount"></span><?php }?></dd></div><?php }
if ((isset($_smarty_tpl->tpl_vars['rating']->value))) {?><div id="rating" class="imageInfo"><dt><span id="updateRate"><?php if ((isset($_smarty_tpl->tpl_vars['rating']->value['USER_RATE']))) {
echo l10n('Update your rating');
} else {
echo l10n('Rate this photo');
}?></span></dt><dd><form action="<?php echo $_smarty_tpl->tpl_vars['rating']->value['F_ACTION'];?>
" method="post" id="rateForm" style="margin:0;"><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value['marks'], 'mark', false, NULL, 'rate_loop', array (
));
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['rating']->value['USER_RATE'])) && $_smarty_tpl->tpl_vars['mark']->value == $_smarty_tpl->tpl_vars['rating']->value['USER_RATE']) {?><input type="button" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
" class="rateButtonSelected" title="<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
"><?php } else { ?><input type="submit" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
" class="rateButton" title="<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
"><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'rating','load'=>'async','require'=>'core.scripts','path'=>'themes/default/js/rating.js'),$_smarty_tpl ) );
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin7->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>var _pwgRatingAutoQueue = _pwgRatingAutoQueue||[];_pwgRatingAutoQueue.push( {rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
', image_id: <?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
,onSuccess : function(rating) {var e = document.getElementById("updateRate");if (e) e.innerHTML = "<?php echo strtr((string)l10n('Update your rating'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";e = document.getElementById("ratingScore");if (e) e.innerHTML = rating.score;e = document.getElementById("ratingCount");if (e) {if (rating.count == 1) {e.innerHTML = "(<?php echo strtr((string)l10n('%d rate'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
)".replace( "%d", rating.count);} else {e.innerHTML = "(<?php echo strtr((string)l10n('%d rates'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
)".replace( "%d", rating.count);}}}} );<?php $_block_repeat=false;
echo $_block_plugin7->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
			</form>
		</dd>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_info']->value['privacy_level'] && (isset($_smarty_tpl->tpl_vars['available_permission_levels']->value))) {?>
	<div id="Privacy" class="imageInfo">
		<dt><?php echo l10n('Who can see this photo?');?>
</dt>
		<dd>
			<div>
				<a id="privacyLevelLink" href><?php echo $_smarty_tpl->tpl_vars['available_permission_levels']->value[$_smarty_tpl->tpl_vars['current']->value['level']];?>
</a>
			</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );?>

<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin8->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>function setPrivacyLevel(id, level){(new PwgWS('<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
')).callService("pwg.images.setPrivacyLevel", { image_id:id, level:level},{method: "POST",onFailure: function(num, text) { alert(num + " " + text); },onSuccess: function(result) {jQuery('#privacyLevelBox .switchCheck').css('visibility','hidden');jQuery('#switchLevel'+level).prev('.switchCheck').css('visibility','visible');jQuery('#privacyLevelLink').text(jQuery('#switchLevel'+level).text());}});}(window.SwitchBox=window.SwitchBox||[]).push("#privacyLevelLink", "#privacyLevelBox");<?php $_block_repeat=false;
echo $_block_plugin8->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<div id="privacyLevelBox" class="switchBox" style="display:none">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_permission_levels']->value, 'label', false, 'level');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
					<span class="switchCheck"<?php if ($_smarty_tpl->tpl_vars['level']->value != $_smarty_tpl->tpl_vars['current']->value['level']) {?> style="visibility:hidden"<?php }?>>&#x2714; </span>
					<a id="switchLevel<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" href="javascript:setPrivacyLevel(<?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a><br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</dd>
	</div>
<?php }?>

</dl>

<?php if ((isset($_smarty_tpl->tpl_vars['metadata']->value))) {?>
<dl id="Metadata" class="imageInfoTable">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metadata']->value, 'meta');
$_smarty_tpl->tpl_vars['meta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meta']->value) {
$_smarty_tpl->tpl_vars['meta']->do_else = false;
?>
	<h3><?php echo $_smarty_tpl->tpl_vars['meta']->value['TITLE'];?>
</h3>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meta']->value['lines'], 'value', false, 'label');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
		<div class="imageInfo">
			<dt><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</dd>
		</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</dl>
<?php }?>
</div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_COUNT']->value))) {?>
<div id="comments" <?php if ((!(isset($_smarty_tpl->tpl_vars['comment_add']->value)) && ($_smarty_tpl->tpl_vars['COMMENT_COUNT']->value == 0))) {?>class="noCommentContent"<?php } else { ?>class="commentContent"<?php }?>><div id="commentsSwitcher"></div>
	<h3><?php echo l10n_dec('%d comment','%d comments',$_smarty_tpl->tpl_vars['COMMENT_COUNT']->value);?>
</h3>

	<div id="pictureComments">
<?php if ((isset($_smarty_tpl->tpl_vars['comment_add']->value))) {?>
		<div id="commentAdd">
			<h4><?php echo l10n('Add a comment');?>
</h4>
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['comment_add']->value['F_ACTION'];?>
" id="addComment">
<?php if ($_smarty_tpl->tpl_vars['comment_add']->value['SHOW_AUTHOR']) {?>
					<p><label for="author"><?php echo l10n('Author');
if ($_smarty_tpl->tpl_vars['comment_add']->value['AUTHOR_MANDATORY']) {?> (<?php echo l10n('mandatory');?>
)<?php }?> :</label></p>
					<p><input type="text" name="author" id="author" value="<?php echo $_smarty_tpl->tpl_vars['comment_add']->value['AUTHOR'];?>
"></p>
<?php }
if ($_smarty_tpl->tpl_vars['comment_add']->value['SHOW_EMAIL']) {?>
					<p><label for="email"><?php echo l10n('Email address');
if ($_smarty_tpl->tpl_vars['comment_add']->value['EMAIL_MANDATORY']) {?> (<?php echo l10n('mandatory');?>
)<?php }?> :</label></p>
					<p><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['comment_add']->value['EMAIL'];?>
"></p>
<?php }
if ($_smarty_tpl->tpl_vars['comment_add']->value['SHOW_WEBSITE']) {?>
          <p><label for="website_url"><?php echo l10n('Website');?>
 :</label></p>
          <p><input type="text" name="website_url" id="website_url" value="<?php echo $_smarty_tpl->tpl_vars['comment_add']->value['WEBSITE_URL'];?>
"></p>
<?php }?>
				<p><label for="contentid"><?php echo l10n('Comment');?>
 (<?php echo l10n('mandatory');?>
) :</label></p>
				<p><textarea name="content" id="contentid" rows="5" cols="50"><?php echo $_smarty_tpl->tpl_vars['comment_add']->value['CONTENT'];?>
</textarea></p>
				<p><input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['comment_add']->value['KEY'];?>
">
					<input type="submit" value="<?php echo l10n('Submit');?>
"></p>
			</form>
		</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['comments']->value))) {?>
		<div id="pictureCommentList">
<?php if ((($_smarty_tpl->tpl_vars['COMMENT_COUNT']->value > 2) || !empty($_smarty_tpl->tpl_vars['navbar']->value))) {?>
				<div id="pictureCommentNavBar">
<?php if ($_smarty_tpl->tpl_vars['COMMENT_COUNT']->value > 2) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['COMMENTS_ORDER_URL']->value;?>
#comments" rel="nofollow" class="commentsOrder"><?php echo $_smarty_tpl->tpl_vars['COMMENTS_ORDER_TITLE']->value;?>
</a>
<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'navigation_bar.tpl','navbar' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
				</div>
<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['COMMENT_LIST']->value;?>

		</div>
<?php }?>
		<div style="clear:both"></div>
	</div>

</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_AFTER']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_AFTER']->value;
}?>

</div>
<?php }
}
