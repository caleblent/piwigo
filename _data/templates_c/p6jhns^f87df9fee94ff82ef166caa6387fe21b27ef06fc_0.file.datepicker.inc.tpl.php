<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:36:36
  from 'C:\xampp\htdocs\piwigo\admin\themes\default\template\include\datepicker.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67109454891305_69689990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f87df9fee94ff82ef166caa6387fe21b27ef06fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piwigo\\admin\\themes\\default\\template\\include\\datepicker.inc.tpl',
      1 => 1729120906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67109454891305_69689990 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.timepicker-addon','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.datepicker,jquery.ui.slider','path'=>"themes/default/js/ui/jquery.ui.timepicker-addon.js"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('require', 'jquery.ui.timepicker-addon');
$_smarty_tpl->_assignInScope('datepicker_language', "themes/default/js/ui/i18n/jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']).".js");
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'file_exists' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'constant' ][ 0 ], array( "PHPWG_ROOT_PATH" ))).($_smarty_tpl->tpl_vars['datepicker_language']->value) ))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']),'load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.datepicker','path'=>$_smarty_tpl->tpl_vars['datepicker_language']->value),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('require', ($_smarty_tpl->tpl_vars['require']->value).(",jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code'])));
}?>

<?php $_smarty_tpl->_assignInScope('timepicker_language', "themes/default/js/ui/i18n/jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']).".js");
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'file_exists' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'constant' ][ 0 ], array( "PHPWG_ROOT_PATH" ))).($_smarty_tpl->tpl_vars['datepicker_language']->value) ))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']),'load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.timepicker-addon','path'=>$_smarty_tpl->tpl_vars['timepicker_language']->value),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('require', ($_smarty_tpl->tpl_vars['require']->value).(",jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code'])));
}?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'datepicker','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>$_smarty_tpl->tpl_vars['require']->value,'path'=>'admin/themes/default/js/datepicker.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.theme.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.datepicker.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.timepicker-addon.css"),$_smarty_tpl ) );
}
}
