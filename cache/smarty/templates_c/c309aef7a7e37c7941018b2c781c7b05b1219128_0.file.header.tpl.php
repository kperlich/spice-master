<?php /* Smarty version 3.1.24, created on 2018-03-14 10:55:40
         compiled from "./include/DetailView/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12778770765aa8f19c70af02_71195524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c309aef7a7e37c7941018b2c781c7b05b1219128' => 
    array (
      0 => './include/DetailView/header.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12778770765aa8f19c70af02_71195524',
  'variables' => 
  array (
    'preForm' => 0,
    'form' => 0,
    'button' => 0,
    'built_in_buttons' => 0,
    'num_buttons' => 0,
    'field' => 0,
    'detail_header_buttons' => 0,
    'panelCount' => 0,
    'SHOW_VCR_CONTROL' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f19c82efd2_47626104',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f19c82efd2_47626104')) {
function content_5aa8f19c82efd2_47626104 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_button')) require_once 'include/Smarty/plugins/function.sugar_button.php';
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_sugar_action_menu')) require_once 'include/Smarty/plugins/function.sugar_action_menu.php';

$_smarty_tpl->properties['nocache_hash'] = '12778770765aa8f19c70af02_71195524';
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

<?php if ($_smarty_tpl->tpl_vars['preForm']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['preForm']->value;?>

<?php }?>
 <?php echo '<script'; ?>
 language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
<?php echo '</script'; ?>
>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<?php if (!isset($_smarty_tpl->tpl_vars['form']->value['buttons'])) {?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"EDIT",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DUPLICATE",'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DELETE",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_counter(array('assign'=>"num_buttons",'start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->tpl_vars['form']->value['buttons'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['button'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['button']->_loop = false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
$foreach_button_Sav = $_smarty_tpl->tpl_vars['button'];
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['button']->value) && in_array($_smarty_tpl->tpl_vars['button']->value,$_smarty_tpl->tpl_vars['built_in_buttons']->value)) {?>
        <?php echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>

        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['button'] = $foreach_button_Sav;
}
?>
    <?php if (count($_smarty_tpl->tpl_vars['form']->value['buttons']) > $_smarty_tpl->tpl_vars['num_buttons']->value) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['form']->value['buttons'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['button'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['button']->_loop = false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
$foreach_button_Sav = $_smarty_tpl->tpl_vars['button'];
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['button']->value) && $_smarty_tpl->tpl_vars['button']->value['customCode']) {?>
                <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['button'] = $foreach_button_Sav;
}
?>
    <?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['form']->value['hideAudit']) || !$_smarty_tpl->tpl_vars['form']->value['hideAudit']) {?>
        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"Audit",'view'=>"EditView",'form_id'=>"formDetailView",'appendTo'=>"detail_header_buttons"),$_smarty_tpl);?>

    <?php }?>
<?php }?>

<form action="index.php" method="post" name="DetailView" id="formDetailView">
    <input type="hidden" name="module" value="{$module}">
    <input type="hidden" name="record" value="{$fields.id.value}">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_id">
    <input type="hidden" name="module_tab">
    <input type="hidden" name="isDuplicate" value="false">
    <input type="hidden" name="offset" value="{$offset}">
    <input type="hidden" name="action" value="EditView">
    <input type="hidden" name="sugar_body_only">
<?php if (isset($_smarty_tpl->tpl_vars['form']->value['hidden'])) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['form']->value['hidden'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['field']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$foreach_field_Sav = $_smarty_tpl->tpl_vars['field'];
?>
<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

<?php
$_smarty_tpl->tpl_vars['field'] = $foreach_field_Sav;
}
?>
<?php }?>
</form>
{* SpiceTheme .. added flat=true parameter*}
<?php echo smarty_function_sugar_action_menu(array('id'=>"detail_header_action_menu",'buttons'=>$_smarty_tpl->tpl_vars['detail_header_buttons']->value,'class'=>"fancymenu",'flat'=>true),$_smarty_tpl);?>


</div>

</td>


<td align="right" width="20%">{$ADMIN_EDIT}
	<?php if ($_smarty_tpl->tpl_vars['panelCount']->value == 0) {?>
	    
		<?php if ($_smarty_tpl->tpl_vars['SHOW_VCR_CONTROL']->value) {?>
			{$PAGINATION}
		<?php }?>
		<?php echo smarty_function_counter(array('name'=>"panelCount",'print'=>false),$_smarty_tpl);?>

	<?php }?>
</td>

<?php if (!empty($_smarty_tpl->tpl_vars['form']->value) && isset($_smarty_tpl->tpl_vars['form']->value['links'])) {?>
	<td align="right" width="10%">&nbsp;</td>
	<td align="right" width="100%" NOWRAP class="buttons">
        <div class="actionsContainer">
            <?php
$_from = $_smarty_tpl->tpl_vars['form']->value['links'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$foreach_link_Sav = $_smarty_tpl->tpl_vars['link'];
?>
                <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&nbsp;
            <?php
$_smarty_tpl->tpl_vars['link'] = $foreach_link_Sav;
}
?>
        </div>
	</td>
<?php }?>
</tr>
</table><?php }
}
?>