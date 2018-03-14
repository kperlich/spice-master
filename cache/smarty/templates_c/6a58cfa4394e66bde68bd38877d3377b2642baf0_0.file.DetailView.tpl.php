<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:43
         compiled from "./include/SugarFields/Fields/Enum/DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4170115285aa8f127cadd78_05050727%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a58cfa4394e66bde68bd38877d3377b2642baf0' => 
    array (
      0 => './include/SugarFields/Fields/Enum/DetailView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4170115285aa8f127cadd78_05050727',
  'variables' => 
  array (
    'displayParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f127cbe7a3_69830126',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f127cbe7a3_69830126')) {
function content_5aa8f127cbe7a3_69830126 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar')) require_once 'include/Smarty/plugins/function.sugarvar.php';
if (!is_callable('smarty_function_sugarvar_connector')) require_once 'include/Smarty/plugins/function.sugarvar_connector.php';

$_smarty_tpl->properties['nocache_hash'] = '4170115285aa8f127cadd78_05050727';
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
{* This is here so currency fields, who don't really have dropdown
lists can work. *}
{if is_string(<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
)}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
">
<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>

{else}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
">
{assign var="field_options" value=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>"true"),$_smarty_tpl);?>
 }
{capture name="field_val"}<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{$field_val|lookup:$field_options}
{/if}
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

<?php }
}
}
?>