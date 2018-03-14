<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./include/SugarFields/Fields/Bool/ListView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13314268985aa8f121948197_05433324%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be484433d67c8e6e0a4183340574b07efae659a' => 
    array (
      0 => './include/SugarFields/Fields/Bool/ListView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13314268985aa8f121948197_05433324',
  'variables' => 
  array (
    'col' => 0,
    'parentFieldArray' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f12194de95_87845728',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f12194de95_87845728')) {
function content_5aa8f12194de95_87845728 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13314268985aa8f121948197_05433324';
?>


<?php if (strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "1" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "yes" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "on") {?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "CHECKED"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("CHECKED", null, 0);?>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = ''; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable('', null, 0);?>
<?php }?>
<img src="themes/SpiceTheme/images/checkbox_<?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>un<?php }?>checked.png">
<?php }
}
?>