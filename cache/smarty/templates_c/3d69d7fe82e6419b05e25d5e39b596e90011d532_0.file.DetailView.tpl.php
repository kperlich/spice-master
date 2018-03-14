<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:43
         compiled from "./include/SugarFields/Fields/Phone/DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21294144665aa8f127d009b9_38616046%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d69d7fe82e6419b05e25d5e39b596e90011d532' => 
    array (
      0 => './include/SugarFields/Fields/Phone/DetailView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21294144665aa8f127d009b9_38616046',
  'variables' => 
  array (
    'vardef' => 0,
    'displayParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f127d39d96_03880539',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f127d39d96_03880539')) {
function content_5aa8f127d39d96_03880539 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar')) require_once 'include/Smarty/plugins/function.sugarvar.php';
if (!is_callable('smarty_function_sugarvar_connector')) require_once 'include/Smarty/plugins/function.sugarvar_connector.php';

$_smarty_tpl->properties['nocache_hash'] = '21294144665aa8f127d009b9_38616046';
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
)}
{assign var="phone_value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }

{sugar_phone value=$phone_value usa_format="<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['validate_usa_format'])) {?>1<?php } else { ?>0<?php }?>"}

<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

<?php }?>
{/if}<?php }
}
?>