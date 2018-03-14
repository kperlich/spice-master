<?php /* Smarty version 3.1.24, created on 2018-03-14 10:54:10
         compiled from "./include/SugarFields/Fields/Bool/EditView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20411438995aa8f142216eb1_50901993%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44004a8c801cb50ea6d6db3815b7367149491930' => 
    array (
      0 => './include/SugarFields/Fields/Bool/EditView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20411438995aa8f142216eb1_50901993',
  'variables' => 
  array (
    'displayParams' => 0,
    'vardef' => 0,
    'tabindex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f14226f2b4_86212630',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f14226f2b4_86212630')) {
function content_5aa8f14226f2b4_86212630 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar')) require_once 'include/Smarty/plugins/function.sugarvar.php';

$_smarty_tpl->properties['nocache_hash'] = '20411438995aa8f142216eb1_50901993';
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
{if strval(<?php echo smarty_function_sugarvar(array('key'=>'value','stringFormat'=>'false'),$_smarty_tpl);?>
) == "1" || strval(<?php echo smarty_function_sugarvar(array('key'=>'value','stringFormat'=>'false'),$_smarty_tpl);?>
) == "yes" || strval(<?php echo smarty_function_sugarvar(array('key'=>'value','stringFormat'=>'false'),$_smarty_tpl);?>
) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" value="0"> 
<input type="checkbox" id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
value="1" title='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
' tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?>
{$checked} <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
<?php }
}
?>