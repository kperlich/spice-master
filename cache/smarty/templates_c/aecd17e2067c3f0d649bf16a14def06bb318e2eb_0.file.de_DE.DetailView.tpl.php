<?php /* Smarty version 3.1.24, created on 2018-03-14 10:55:40
         compiled from "./include/SugarFields/Fields/Address/de_DE.DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1550705025aa8f19c983dd7_00138930%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aecd17e2067c3f0d649bf16a14def06bb318e2eb' => 
    array (
      0 => './include/SugarFields/Fields/Address/de_DE.DetailView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1550705025aa8f19c983dd7_00138930',
  'variables' => 
  array (
    'displayParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f19c98d322_60785604',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f19c98d322_60785604')) {
function content_5aa8f19c98d322_60785604 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar_connector')) require_once 'include/Smarty/plugins/function.sugarvar_connector.php';

$_smarty_tpl->properties['nocache_hash'] = '1550705025aa8f19c983dd7_00138930';
?>
{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
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
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_street" value="{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_city" value="{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_state" value="{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_country" value="{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_postalcode" value="{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
<td class="dataField">
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>
 
</td>
<?php }?>
<td class='dataField' width='1%'>

{$custom_code_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['key'];?>
}
</td>
</tr>
</table><?php }
}
?>