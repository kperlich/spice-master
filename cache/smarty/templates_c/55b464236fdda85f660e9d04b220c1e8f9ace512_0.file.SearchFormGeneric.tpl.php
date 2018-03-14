<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./include/SearchForm/tpls/SearchFormGeneric.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18137984425aa8f1214476b3_08569258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b464236fdda85f660e9d04b220c1e8f9ace512' => 
    array (
      0 => './include/SearchForm/tpls/SearchFormGeneric.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18137984425aa8f1214476b3_08569258',
  'variables' => 
  array (
    'formData' => 0,
    'accesskeycount' => 0,
    'APP' => 0,
    'colData' => 0,
    'module' => 0,
    'fields' => 0,
    'ACCKEY' => 0,
    'form_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1214b9f75_87929070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1214b9f75_87929070')) {
function content_5aa8f1214b9f75_87929070 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'include/Smarty/plugins/function.math.php';
if (!is_callable('smarty_function_sugar_field')) require_once 'include/Smarty/plugins/function.sugar_field.php';
if (!is_callable('smarty_function_sugar_button')) require_once 'include/Smarty/plugins/function.sugar_button.php';

$_smarty_tpl->properties['nocache_hash'] = '18137984425aa8f1214476b3_08569258';
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

<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
{if !isset($templateMeta.maxColumnsBasic)}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<?php echo '<script'; ?>
>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_HELP'),
                    width: 700
                });

        $('#filterHelp').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
<?php echo '</script'; ?>
>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <?php if (isset($_smarty_tpl->tpl_vars['accesskeycount'])) {$_smarty_tpl->tpl_vars['accesskeycount'] = clone $_smarty_tpl->tpl_vars['accesskeycount'];
$_smarty_tpl->tpl_vars['accesskeycount']->value = 0; $_smarty_tpl->tpl_vars['accesskeycount']->nocache = null; $_smarty_tpl->tpl_vars['accesskeycount']->scope = 0;
} else $_smarty_tpl->tpl_vars['accesskeycount'] = new Smarty_Variable(0, null, 0);?>  <?php if (isset($_smarty_tpl->tpl_vars['ACCKEY'])) {$_smarty_tpl->tpl_vars['ACCKEY'] = clone $_smarty_tpl->tpl_vars['ACCKEY'];
$_smarty_tpl->tpl_vars['ACCKEY']->value = ''; $_smarty_tpl->tpl_vars['ACCKEY']->nocache = null; $_smarty_tpl->tpl_vars['ACCKEY']->scope = 0;
} else $_smarty_tpl->tpl_vars['ACCKEY'] = new Smarty_Variable('', null, 0);?>
        <?php
$_from = $_smarty_tpl->tpl_vars['formData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['colData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['colData']->_loop = false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->_loop = true;
$foreach_colData_Sav = $_smarty_tpl->tpl_vars['colData'];
?>
        <?php echo smarty_function_math(array('assign'=>"accesskeycount",'equation'=>((string)$_smarty_tpl->tpl_vars['accesskeycount']->value)." + 1"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['accesskeycount']->value == 1) {?> <?php if (isset($_smarty_tpl->tpl_vars['ACCKEY'])) {$_smarty_tpl->tpl_vars['ACCKEY'] = clone $_smarty_tpl->tpl_vars['ACCKEY'];
$_smarty_tpl->tpl_vars['ACCKEY']->value = $_smarty_tpl->tpl_vars['APP']->value['LBL_FIRST_INPUT_SEARCH_KEY']; $_smarty_tpl->tpl_vars['ACCKEY']->nocache = null; $_smarty_tpl->tpl_vars['ACCKEY']->scope = 0;
} else $_smarty_tpl->tpl_vars['ACCKEY'] = new Smarty_Variable($_smarty_tpl->tpl_vars['APP']->value['LBL_FIRST_INPUT_SEARCH_KEY'], null, 0);?> <?php } else { ?> <?php if (isset($_smarty_tpl->tpl_vars['ACCKEY'])) {$_smarty_tpl->tpl_vars['ACCKEY'] = clone $_smarty_tpl->tpl_vars['ACCKEY'];
$_smarty_tpl->tpl_vars['ACCKEY']->value = ''; $_smarty_tpl->tpl_vars['ACCKEY']->nocache = null; $_smarty_tpl->tpl_vars['ACCKEY']->scope = 0;
} else $_smarty_tpl->tpl_vars['ACCKEY'] = new Smarty_Variable('', null, 0);?> <?php }?>

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$basicMaxColumns
        assign=modVal
        }
        {if ($index % $basicMaxColumns == 1 && $index != 1)}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='1%'>
            <?php if (isset($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) {?>
            <label for='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
'>{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</label>
            <?php } elseif (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']])) {?>
            <label for='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
'> {sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
                <?php }?>
        </td>


        <td nowrap="nowrap" width='1%'>
            <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
            <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'displayType'=>'searchView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

            <?php }?>
        </td>
        <?php
$_smarty_tpl->tpl_vars['colData'] = $foreach_colData_Sav;
}
?>
        {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
        <td colspan="{$searchTableColumnCount}">
            {else}
        <td class="sumbitButtons">
            {/if}
            <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"search",'view'=>"searchView"),$_smarty_tpl);?>

            <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                   onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button'
                   name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
            {if $HAS_FULLTEXT_SEARCH}
                &nbsp;&nbsp;<a id="advanced_search_link"
                   onclick="SUGAR.searchForm.searchFormSelect('{$module}|fts_search','{$module}|basic_search')"
                   href="javascript:void(0);" accesskey="{$APP.LBL_FTS_SEARCH_LNK_KEY}">{$APP.LNK_FULLTEXT_SEARCH}</a>
            {/if}
            {if $HAS_ADVANCED_SEARCH}
                <a id="advanced_search_link"
                   onclick="SUGAR.searchForm.searchFormSelect('{$module}|advanced_search','{$module}|basic_search')"
                   href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_ADVANCED_SEARCH}</a>
            {/if}
        </td>
        <td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp"
                                            src='{sugar_getimagepath file="help-dashlet.gif"}'></td>
    </tr>
</table>
<?php }
}
?>