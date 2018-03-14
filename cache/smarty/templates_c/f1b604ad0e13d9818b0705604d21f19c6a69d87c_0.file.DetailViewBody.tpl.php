<?php /* Smarty version 3.1.24, created on 2018-03-14 10:56:29
         compiled from "./modules/ACLRoles/DetailViewBody.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16816814365aa8f1cdb68067_88770299%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b604ad0e13d9818b0705604d21f19c6a69d87c' => 
    array (
      0 => './modules/ACLRoles/DetailViewBody.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16816814365aa8f1cdb68067_88770299',
  'variables' => 
  array (
    'ACTION_NAMES' => 0,
    'ACTION_NAME' => 0,
    'CATEGORIES' => 0,
    'CATEGORY_NAME' => 0,
    'APP_LIST' => 0,
    'MOD' => 0,
    'TYPES' => 0,
    'ACTIONS' => 0,
    'ACTION_NAME_ACTIVE' => 0,
    'TDWIDTH' => 0,
    'ACTION' => 0,
    'ACTION_FIND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1cdbc0df6_96119749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1cdbc0df6_96119749')) {
function content_5aa8f1cdbc0df6_96119749 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'include/Smarty/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '16816814365aa8f1cdb68067_88770299';
?>


<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td><?php
$_from = $_smarty_tpl->tpl_vars['ACTION_NAMES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["ACTION_NAME"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["ACTION_NAME"]->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars["ACTION_NAME"]->value) {
$_smarty_tpl->tpl_vars["ACTION_NAME"]->_loop = true;
$foreach_ACTION_NAME_Sav = $_smarty_tpl->tpl_vars["ACTION_NAME"];
?><td style="text-align: center;" scope="row"><b><?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
</b></td><?php
$_smarty_tpl->tpl_vars["ACTION_NAME"] = $foreach_ACTION_NAME_Sav;
}
if (!$_smarty_tpl->tpl_vars["ACTION_NAME"]->_loop) {
?><td colspan="2">&nbsp;</td><?php
}
?></TR><?php
$_from = $_smarty_tpl->tpl_vars['CATEGORIES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["TYPES"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["TYPES"]->_loop = false;
$_smarty_tpl->tpl_vars["CATEGORY_NAME"] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars["CATEGORY_NAME"]->value => $_smarty_tpl->tpl_vars["TYPES"]->value) {
$_smarty_tpl->tpl_vars["TYPES"]->_loop = true;
$foreach_TYPES_Sav = $_smarty_tpl->tpl_vars["TYPES"];
if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] != 'Users') {?><TR><?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == 'Users') {?><td nowrap width='1%' scope="row"><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_NAME_FOR_ROLE'];?>
</b></td><?php } else { ?><td nowrap width='1%' scope="row"><b><?php echo $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value];?>
</b></td><?php }
$_from = $_smarty_tpl->tpl_vars['ACTION_NAMES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["ACTION_LABEL"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["ACTION_LABEL"]->_loop = false;
$_smarty_tpl->tpl_vars["ACTION_NAME"] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars["ACTION_NAME"]->value => $_smarty_tpl->tpl_vars["ACTION_LABEL"]->value) {
$_smarty_tpl->tpl_vars["ACTION_LABEL"]->_loop = true;
$foreach_ACTION_LABEL_Sav = $_smarty_tpl->tpl_vars["ACTION_LABEL"];
if (isset($_smarty_tpl->tpl_vars['ACTION_FIND'])) {$_smarty_tpl->tpl_vars['ACTION_FIND'] = clone $_smarty_tpl->tpl_vars['ACTION_FIND'];
$_smarty_tpl->tpl_vars['ACTION_FIND']->value = 'false'; $_smarty_tpl->tpl_vars['ACTION_FIND']->nocache = null; $_smarty_tpl->tpl_vars['ACTION_FIND']->scope = 0;
} else $_smarty_tpl->tpl_vars['ACTION_FIND'] = new Smarty_Variable('false', null, 0);
$_from = $_smarty_tpl->tpl_vars['TYPES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["ACTIONS"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["ACTIONS"]->_loop = false;
$_smarty_tpl->tpl_vars["TYPE_NAME"] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars["TYPE_NAME"]->value => $_smarty_tpl->tpl_vars["ACTIONS"]->value) {
$_smarty_tpl->tpl_vars["ACTIONS"]->_loop = true;
$foreach_ACTIONS_Sav = $_smarty_tpl->tpl_vars["ACTIONS"];
$_from = $_smarty_tpl->tpl_vars['ACTIONS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["ACTION"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["ACTION"]->_loop = false;
$_smarty_tpl->tpl_vars["ACTION_NAME_ACTIVE"] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars["ACTION_NAME_ACTIVE"]->value => $_smarty_tpl->tpl_vars["ACTION"]->value) {
$_smarty_tpl->tpl_vars["ACTION"]->_loop = true;
$foreach_ACTION_Sav = $_smarty_tpl->tpl_vars["ACTION"];
if ($_smarty_tpl->tpl_vars['ACTION_NAME']->value == $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value) {
if (isset($_smarty_tpl->tpl_vars['ACTION_FIND'])) {$_smarty_tpl->tpl_vars['ACTION_FIND'] = clone $_smarty_tpl->tpl_vars['ACTION_FIND'];
$_smarty_tpl->tpl_vars['ACTION_FIND']->value = 'true'; $_smarty_tpl->tpl_vars['ACTION_FIND']->nocache = null; $_smarty_tpl->tpl_vars['ACTION_FIND']->scope = 0;
} else $_smarty_tpl->tpl_vars['ACTION_FIND'] = new Smarty_Variable('true', null, 0);?><td  width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' align='center'><div align='center' class="acl<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['ACTION']->value['accessLabel']);?>
"><b><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</b></div></td><?php }
$_smarty_tpl->tpl_vars["ACTION"] = $foreach_ACTION_Sav;
}
$_smarty_tpl->tpl_vars["ACTIONS"] = $foreach_ACTIONS_Sav;
}
if ($_smarty_tpl->tpl_vars['ACTION_FIND']->value == 'false') {?><td nowrap width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' style="text-align: center;"><div><font color='red'>N/A</font></div></td><?php }
$_smarty_tpl->tpl_vars["ACTION_LABEL"] = $foreach_ACTION_LABEL_Sav;
}
?></TR><?php }
$_smarty_tpl->tpl_vars["TYPES"] = $foreach_TYPES_Sav;
}
if (!$_smarty_tpl->tpl_vars["TYPES"]->_loop) {
?><tr> <td colspan="2">No Actions</td></tr><?php
}
?></TABLE><?php }
}
?>