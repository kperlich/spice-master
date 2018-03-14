<?php /* Smarty version 3.1.24, created on 2018-03-14 10:54:10
         compiled from "./include/SugarFields/Fields/Text/EditView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17289205055aa8f142382794_16337540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2769cdabe3c871212e82987fe6473845aa70d455' => 
    array (
      0 => './include/SugarFields/Fields/Text/EditView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17289205055aa8f142382794_16337540',
  'variables' => 
  array (
    'displayParams' => 0,
    'idname' => 0,
    'vardef' => 0,
    'tabindex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1423a27f7_53021064',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1423a27f7_53021064')) {
function content_5aa8f1423a27f7_53021064 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar')) require_once 'include/Smarty/plugins/function.sugarvar.php';

$_smarty_tpl->properties['nocache_hash'] = '17289205055aa8f142382794_16337540';
?>
{*
/*********************************************************************************
* SugarCRM Community Edition is a customer relationship management program developed by
* SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
* 
* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU Affero General Public License version 3 as published by the
* Free Software Foundation with the addition of the following permission added
* to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
* IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
* OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
* 
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
* details.
* 
* You should have received a copy of the GNU Affero General Public License along with
* this program; if not, see http://www.gnu.org/licenses or write to the Free
* Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
* 02110-1301 USA.
* 
* You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
* SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
* 
* The interactive user interfaces in modified source and object code versions
* of this program must display Appropriate Legal Notices, as required under
* Section 5 of the GNU Affero General Public License version 3.
* 
* In accordance with Section 7(b) of the GNU Affero General Public License version 3,
* these Appropriate Legal Notices must retain the display of the "Powered by
* SugarCRM" logo. If the display of the logo is not reasonably feasible for
* technical reasons, the Appropriate Legal Notices must display the words
* "Powered by SugarCRM".
********************************************************************************/

*}
{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}  


<?php $_smarty_tpl->_capture_stack[0][] = array('idname', 'idname', null); ob_start();
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['idname'])) {$_smarty_tpl->tpl_vars['idname'] = clone $_smarty_tpl->tpl_vars['idname'];
$_smarty_tpl->tpl_vars['idname']->value = $_smarty_tpl->tpl_vars['displayParams']->value['idName']; $_smarty_tpl->tpl_vars['idname']->nocache = null; $_smarty_tpl->tpl_vars['idname']->scope = 0;
} else $_smarty_tpl->tpl_vars['idname'] = new Smarty_Variable($_smarty_tpl->tpl_vars['displayParams']->value['idName'], null, 0);?>
<?php }?>


<textarea  id='<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
' name='<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'
rows="<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['rows'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['rows'];
} elseif (!empty($_smarty_tpl->tpl_vars['vardef']->value['rows'])) {
echo $_smarty_tpl->tpl_vars['vardef']->value['rows'];
} else {
echo 4;
}?>" 
cols="<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['cols'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['cols'];
} elseif (!empty($_smarty_tpl->tpl_vars['vardef']->value['cols'])) {
echo $_smarty_tpl->tpl_vars['vardef']->value['cols'];
} else {
echo 60;
}?>" 
title='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
' tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> >{$value}</textarea>



<?php }
}
?>