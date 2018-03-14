<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./include/SearchForm/tpls/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4247699625aa8f1215d3fc0_28259793%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d359eb24d6d772f018adf8d4cd9cdf5e3d1bd3c' => 
    array (
      0 => './include/SearchForm/tpls/footer.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4247699625aa8f1215d3fc0_28259793',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1215ef024_18313324',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1215ef024_18313324')) {
function content_5aa8f1215ef024_18313324 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4247699625aa8f1215d3fc0_28259793';
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
</form>
{literal}
<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
{/literal}
        document.getElementById('up_down_img').src='{sugar_getimagepath file="basic_search.gif"}';
        document.getElementById('up_down_img').setAttribute('alt',"{sugar_translate label='LBL_ALT_HIDE_OPTIONS'}");
{literal}
    }else{
{/literal}
        document.getElementById('up_down_img').src='{sugar_getimagepath file="advanced_search.gif"}';
        document.getElementById('up_down_img').setAttribute('alt',"{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}");
{literal}			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>
{/literal}
<?php }
}
?>