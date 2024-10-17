<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:27:17
  from 'C:\xampp\htdocs\piwigo\admin\themes\default\template\include\colorbox.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67109225bd15f0_98900196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a57d9384410c7e86e6a0fbe557e4da2391ea7407' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piwigo\\admin\\themes\\default\\template\\include\\colorbox.inc.tpl',
      1 => 1729120906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67109225bd15f0_98900196 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl ) );?>

<?php }
}
