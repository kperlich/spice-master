<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./include/SugarFields/Fields/Phone/ListView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9538525465aa8f12198af89_35409150%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '505f712f256ee2009eea085c35fc82d72ced3bb4' => 
    array (
      0 => './include/SugarFields/Fields/Phone/ListView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9538525465aa8f12198af89_35409150',
  'variables' => 
  array (
    'parentFieldArray' => 0,
    'col' => 0,
    'phone' => 0,
    'usa_format' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f121990987_38258689',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f121990987_38258689')) {
function content_5aa8f121990987_38258689 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_fetch')) require_once 'include/Smarty/plugins/function.sugar_fetch.php';
if (!is_callable('smarty_function_sugar_phone')) require_once 'include/Smarty/plugins/function.sugar_phone.php';

$_smarty_tpl->properties['nocache_hash'] = '9538525465aa8f12198af89_35409150';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('getPhone', 'phone', null); ob_start();
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);

}
}
?>