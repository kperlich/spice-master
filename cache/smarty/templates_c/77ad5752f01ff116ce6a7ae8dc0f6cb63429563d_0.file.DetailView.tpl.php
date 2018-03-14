<?php /* Smarty version 3.1.24, created on 2018-03-14 10:55:40
         compiled from "./include/SugarFields/Fields/Multienum/DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1910597875aa8f19c9b97c9_18827077%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ad5752f01ff116ce6a7ae8dc0f6cb63429563d' => 
    array (
      0 => './include/SugarFields/Fields/Multienum/DetailView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1910597875aa8f19c9b97c9_18827077',
  'variables' => 
  array (
    'displayParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f19c9c1507_45964109',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f19c9c1507_45964109')) {
function content_5aa8f19c9c1507_45964109 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar')) require_once 'include/Smarty/plugins/function.sugarvar.php';
if (!is_callable('smarty_function_sugarvar_connector')) require_once 'include/Smarty/plugins/function.sugarvar_connector.php';

$_smarty_tpl->properties['nocache_hash'] = '1910597875aa8f19c9b97c9_18827077';
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
{if !empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) && (<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 != '^^')}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
">
{multienum_to_array string=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 assign="vals"}
{foreach from=$vals item=item}
{assign var="field_options" value=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>"true"),$_smarty_tpl);?>
 }
{capture name="field_val"}{$item}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}

<li style="margin-left:10px;">{$field_val|lookup:$field_options}</li>
{/foreach}
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

<?php }?>
{/if}<?php }
}
?>