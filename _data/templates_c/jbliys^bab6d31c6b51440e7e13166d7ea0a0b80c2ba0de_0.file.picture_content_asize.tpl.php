<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:36:39
  from 'C:\xampp\htdocs\piwigo\themes\modus\template\picture_content_asize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671094574b4ff7_40208239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab6d31c6b51440e7e13166d7ea0a0b80c2ba0de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piwigo\\themes\\modus\\template\\picture_content_asize.tpl',
      1 => 1729120857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671094574b4ff7_40208239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\piwigo\\include\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'photo.autosize','path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/js/photo.autosize.min.js",'load'=>'footer','require'=>'jquery'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>RVAS = {
derivatives: [
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'], 'derivative', false, NULL, 'derivative_loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['total'];
if ('svg' === $_smarty_tpl->tpl_vars['current']->value['path_ext']) {
$_smarty_tpl->_assignInScope('size', array($_smarty_tpl->tpl_vars['current']->value['width'],$_smarty_tpl->tpl_vars['current']->value['height']));
} else {
$_smarty_tpl->_assignInScope('size', $_smarty_tpl->tpl_vars['derivative']->value->get_size());
}?>
{w:<?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
,h:<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
,url:'<?php echo strtr((string)$_smarty_tpl->tpl_vars['derivative']->value->get_url(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
',type:'<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
'}<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
cp: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['COOKIE_PATH']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
}<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['RVAS_PENDING']->value) {?>
<noscript><img src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
" <?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_size_htm();?>
 alt="<?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;?>
" id="theMainImage" usemap="#map<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type();?>
" title="<?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {
echo smarty_modifier_replace(strip_tags((string) $_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
} else {
echo $_smarty_tpl->tpl_vars['current']->value['TITLE_ESC'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;
}?>" itemprop=contentURL></noscript>
<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>rvas_choose();<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin3->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>rvas_choose(1);<?php $_block_repeat=false;
echo $_block_plugin3->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['path_ext'])) && $_smarty_tpl->tpl_vars['current']->value['path_ext'] == 'pdf' && (isset($_smarty_tpl->tpl_vars['PDF_VIEWER_FILESIZE_THRESHOLD']->value)) && $_smarty_tpl->tpl_vars['current']->value['filesize'] < $_smarty_tpl->tpl_vars['PDF_VIEWER_FILESIZE_THRESHOLD']->value) {?>
  <div>
      <embed src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['current']->value['path'];?>
" type="application/pdf" style='width: 95%; height:calc(100vh - 200px); min-height:600px;'/>
  </div>
<?php } else { ?>
  <img class="file-ext-<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['file_ext']))) {
echo $_smarty_tpl->tpl_vars['current']->value['file_ext'];
}?> path-ext-<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['path_ext']))) {
echo $_smarty_tpl->tpl_vars['current']->value['path_ext'];
}?>" <?php if (((isset($_smarty_tpl->tpl_vars['current']->value['path_ext'])) && $_smarty_tpl->tpl_vars['current']->value['path_ext'] == 'svg')) {?> src="<?php echo $_smarty_tpl->tpl_vars['current']->value['path'];?>
" <?php } elseif ($_smarty_tpl->tpl_vars['current']->value['selected_derivative']->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
"<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_size_htm();
} else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['img_dir'];?>
/ajax_loader.gif" data-src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;?>
" id="theMainImage" usemap="#map<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type();?>
" title="<?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {
echo smarty_modifier_replace(strip_tags((string) $_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
} else {
echo $_smarty_tpl->tpl_vars['current']->value['TITLE_ESC'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;
}?>">
  
<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['path_ext'])) && $_smarty_tpl->tpl_vars['current']->value['path_ext'] == 'pdf' && (isset($_smarty_tpl->tpl_vars['PDF_VIEWER_FILESIZE_THRESHOLD']->value)) && $_smarty_tpl->tpl_vars['current']->value['filesize'] > $_smarty_tpl->tpl_vars['PDF_VIEWER_FILESIZE_THRESHOLD']->value) {?>
      <div class="pdf-too-heavy">
          <?php echo l10n('The PDF you requested is too large to display on this page.');?>
</br>
          <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['current']->value['path'];?>
" target="_blank"><?php echo l10n('Click here to display it');?>
</a>
      </div>
<?php }
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'], 'derivative', false, 'derivative_type');
$_smarty_tpl->tpl_vars['derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['derivative_type']->value => $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->do_else = false;
?><map name="map<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
"><?php $_smarty_tpl->_assignInScope('size', $_smarty_tpl->tpl_vars['derivative']->value->get_size());
if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?><area shape=rect coords="0,0,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/4) ));?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
"><?php }?><area shape=rect coords="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/4) ));?>
,0,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/1.34) ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[1]/4) ));?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
" alt="<?php echo l10n('Thumbnails');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?><area shape=rect coords="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/1.33) ));?>
,0,<?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
"><?php }?></map><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
