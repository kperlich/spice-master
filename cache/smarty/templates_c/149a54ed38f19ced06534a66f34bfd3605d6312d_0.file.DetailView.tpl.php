<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:43
         compiled from "./include/DetailView/DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9979284655aa8f127b01a76_89655248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149a54ed38f19ced06534a66f34bfd3605d6312d' => 
    array (
      0 => './include/DetailView/DetailView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9979284655aa8f127b01a76_89655248',
  'variables' => 
  array (
    'headerTpl' => 0,
    'module' => 0,
    'useTabs' => 0,
    'headerPanel' => 0,
    'sectionPanels' => 0,
    'label' => 0,
    'label_upper' => 0,
    'tabDefs' => 0,
    'tabCount' => 0,
    'panelCount' => 0,
    'panelState' => 0,
    'panel' => 0,
    'rowData' => 0,
    'colData' => 0,
    'def' => 0,
    'fields' => 0,
    'subField' => 0,
    'tabIndex' => 0,
    'footerTpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f127c55836_89639732',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f127c55836_89639732')) {
function content_5aa8f127c55836_89639732 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_sugar_evalcolumn')) require_once 'include/Smarty/plugins/function.sugar_evalcolumn.php';
if (!is_callable('smarty_function_sugar_field')) require_once 'include/Smarty/plugins/function.sugar_field.php';

$_smarty_tpl->properties['nocache_hash'] = '9979284655aa8f127b01a76_89655248';
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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['headerTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

{sugar_include include=$includes}
<div id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs"
<?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
class="yui-navset detailview_tabs"
<?php }?>
>
    {* begin SpiceBeanGuide *}
    <?php if ($_smarty_tpl->tpl_vars['headerPanel']->value != '') {?>{sugar_include type='php' file='<?php echo $_smarty_tpl->tpl_vars['headerPanel']->value;?>
'}<?php }?>
    {* end SpiceBeanGuide *}
    <?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
    {* Generate the Tab headers *}
    <?php echo smarty_function_counter(array('name'=>"tabCount",'start'=>-1,'print'=>false,'assign'=>"tabCount"),$_smarty_tpl);?>

    <ul class="yui-nav">
    <?php
$_from = $_smarty_tpl->tpl_vars['sectionPanels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['panel']->_loop = false;
$_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_section'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']++;
$foreach_panel_Sav = $_smarty_tpl->tpl_vars['panel'];
?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('label_upper', 'label_upper', null); ob_start();
echo mb_strtoupper($_smarty_tpl->tpl_vars['label']->value, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        {* override from tab definitions *}
        <?php if ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == true)) {?>
            <?php echo smarty_function_counter(array('name'=>"tabCount",'print'=>false),$_smarty_tpl);?>

            <li><a id="tab<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
" href="javascript:void(0)"><em>{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}</em></a></li>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['panel'] = $foreach_panel_Sav;
}
?>
    </ul>
    <?php }?>
    <div <?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>class="yui-content"<?php }?>>

<?php echo smarty_function_counter(array('name'=>"panelCount",'print'=>false,'start'=>0,'assign'=>"panelCount"),$_smarty_tpl);?>

<?php echo smarty_function_counter(array('name'=>"tabCount",'start'=>-1,'print'=>false,'assign'=>"tabCount"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->tpl_vars['sectionPanels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['panel']->_loop = false;
$_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_section'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']++;
$foreach_panel_Sav = $_smarty_tpl->tpl_vars['panel'];
?>
<?php if (isset($_smarty_tpl->tpl_vars['panel_id'])) {$_smarty_tpl->tpl_vars['panel_id'] = clone $_smarty_tpl->tpl_vars['panel_id'];
$_smarty_tpl->tpl_vars['panel_id']->value = $_smarty_tpl->tpl_vars['panelCount']->value; $_smarty_tpl->tpl_vars['panel_id']->nocache = null; $_smarty_tpl->tpl_vars['panel_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['panel_id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['panelCount']->value, null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('label_upper', 'label_upper', null); ob_start();
echo mb_strtoupper($_smarty_tpl->tpl_vars['label']->value, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
  <?php if ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == true)) {?>
    <?php echo smarty_function_counter(array('name'=>"tabCount",'print'=>false),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['tabCount']->value != 0) {?></div><?php }?>
    <div id='tabcontent<?php echo $_smarty_tpl->tpl_vars['tabCount']->value;?>
'>
  <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault']) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault'] == "collapsed" && isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['panelState'])) {$_smarty_tpl->tpl_vars['panelState'] = clone $_smarty_tpl->tpl_vars['panelState'];
$_smarty_tpl->tpl_vars['panelState']->value = $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault']; $_smarty_tpl->tpl_vars['panelState']->nocache = null; $_smarty_tpl->tpl_vars['panelState']->scope = 0;
} else $_smarty_tpl->tpl_vars['panelState'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['panelDefault'], null, 0);?>
    <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars['panelState'])) {$_smarty_tpl->tpl_vars['panelState'] = clone $_smarty_tpl->tpl_vars['panelState'];
$_smarty_tpl->tpl_vars['panelState']->value = "expanded"; $_smarty_tpl->tpl_vars['panelState']->nocache = null; $_smarty_tpl->tpl_vars['panelState']->scope = 0;
} else $_smarty_tpl->tpl_vars['panelState'] = new Smarty_Variable("expanded", null, 0);?>
    <?php }?>
<div id='detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
' class='detail view  detail508 <?php echo $_smarty_tpl->tpl_vars['panelState']->value;?>
'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}




<?php if (!is_array($_smarty_tpl->tpl_vars['panel']->value)) {?>
    {sugar_include type='php' file='<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
'}
<?php } else { ?>

    <?php if (!empty($_smarty_tpl->tpl_vars['label']->value) && !is_int($_smarty_tpl->tpl_vars['label']->value) && $_smarty_tpl->tpl_vars['label']->value != 'DEFAULT' && (!isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) || (isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false))) {?>
    <h4>
      <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
);">
      <img border="0" id="detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
      <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
);">
      <img border="0" id="detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
      {sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
    <?php if (isset($_smarty_tpl->tpl_vars['panelState']->value) && $_smarty_tpl->tpl_vars['panelState']->value == 'collapsed') {?>
    <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
').className += ' collapsed';
    <?php echo '</script'; ?>
>
    <?php } else { ?>
    <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
').className += ' expanded';
    <?php echo '</script'; ?>
>
    <?php }?>
    </h4>

    <?php }?>
	
  <table id='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' class="panelContainer" cellspacing='{$gridline}'>



	<?php
$_from = $_smarty_tpl->tpl_vars['panel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rowData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rowData']->_loop = false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->_loop = true;
$foreach_rowData_Sav = $_smarty_tpl->tpl_vars['rowData'];
?>
	{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['columnsInRow'])) {$_smarty_tpl->tpl_vars['columnsInRow'] = clone $_smarty_tpl->tpl_vars['columnsInRow'];
$_smarty_tpl->tpl_vars['columnsInRow']->value = count($_smarty_tpl->tpl_vars['rowData']->value); $_smarty_tpl->tpl_vars['columnsInRow']->nocache = null; $_smarty_tpl->tpl_vars['columnsInRow']->scope = 0;
} else $_smarty_tpl->tpl_vars['columnsInRow'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['rowData']->value), null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['columnsUsed'])) {$_smarty_tpl->tpl_vars['columnsUsed'] = clone $_smarty_tpl->tpl_vars['columnsUsed'];
$_smarty_tpl->tpl_vars['columnsUsed']->value = 0; $_smarty_tpl->tpl_vars['columnsUsed']->nocache = null; $_smarty_tpl->tpl_vars['columnsUsed']->scope = 0;
} else $_smarty_tpl->tpl_vars['columnsUsed'] = new Smarty_Variable(0, null, 0);?>
		<?php
$_from = $_smarty_tpl->tpl_vars['rowData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['colData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['colData']->_loop = false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_colIteration'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_colIteration']->value['index']++;
$foreach_colData_Sav = $_smarty_tpl->tpl_vars['colData'];
?>
	    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
	    	{if !(<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'];?>
) }
	    <?php }?>
			{counter name="fieldsUsed"}
			<?php if (empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel'])) {?>
			<td width='<?php echo $_smarty_tpl->tpl_vars['def']->value['templateMeta']['widths'][(isset($_smarty_tpl->tpl_vars['__foreach_colIteration']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_colIteration']->value['index'] : null)]['label'];?>
%' scope="col">
				<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
				    {if !$fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.hidden}
                <?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['colData']->value['field']['customLabel'])) {?>
			       <?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['customLabel'];?>

				<?php } elseif (isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']) && strpos($_smarty_tpl->tpl_vars['colData']->value['field']['label'],'$')) {?>
				   {capture name="label" assign="label"}<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
{/capture}
			       {$label|strip_semicolon}:
				<?php } elseif (isset($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) {?>
				   {capture name="label" assign="label"}{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
			       {$label|strip_semicolon}:
				<?php } elseif (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']])) {?>
				   {capture name="label" assign="label"}{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
			       {$label|strip_semicolon}:
				<?php } else { ?>
				   &nbsp;
				<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp']) || isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) && isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp'])) {?>
                   <?php if (isset($_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp'])) {?>
                     {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp'];?>
" module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
                   <?php } elseif (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp'])) {?>
                     {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp'];?>
" module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
                   <?php }?>
                   {sugar_help text=$popupText WIDTH=400}
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
                {/if}
                <?php }?>
                <?php }?>
			</td>
			<td width='<?php echo $_smarty_tpl->tpl_vars['def']->value['templateMeta']['widths'][(isset($_smarty_tpl->tpl_vars['__foreach_colIteration']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_colIteration']->value['index'] : null)]['field'];?>
%' <?php if ($_smarty_tpl->tpl_vars['colData']->value['colspan']) {?>colspan='<?php echo $_smarty_tpl->tpl_vars['colData']->value['colspan'];?>
'<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type']) && $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type'] == 'phone') {?>class="phone"<?php }?>>
			    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
			    {if !$fields.<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
.hidden}
			    <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['prefix'];?>

				<?php if (($_smarty_tpl->tpl_vars['colData']->value['field']['customCode'] && !$_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField']) || $_smarty_tpl->tpl_vars['colData']->value['field']['assign']) {?>
					{counter name="panelFieldCount"}
					<span id="<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value),$_smarty_tpl);?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']] && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['fields'])) {?>
				    <?php
$_from = $_smarty_tpl->tpl_vars['colData']->value['field']['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subField'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subField']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subField']->value) {
$_smarty_tpl->tpl_vars['subField']->_loop = true;
$foreach_subField_Sav = $_smarty_tpl->tpl_vars['subField'];
?>
				        <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value]) {?>
				        	{counter name="panelFieldCount"}
				            <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','tabindex'=>$_smarty_tpl->tpl_vars['tabIndex']->value,'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value],'displayType'=>'DetailView'),$_smarty_tpl);?>
&nbsp;
				        <?php } else { ?>
				        	{counter name="panelFieldCount"}
				            <?php echo $_smarty_tpl->tpl_vars['subField']->value;?>

				        <?php }?>
				    <?php
$_smarty_tpl->tpl_vars['subField'] = $foreach_subField_Sav;
}
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
					{counter name="panelFieldCount"}
					<?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'displayType'=>'DetailView','displayParams'=>$_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'],'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type']),$_smarty_tpl);?>

				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode']) && $_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField']) {?>
				    {counter name="panelFieldCount"}
				    <span id="<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['name'];?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value),$_smarty_tpl);?>
</span>
                <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['suffix'];?>

				<?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['name'])) {?>
				{/if}
				<?php }?>
			</td>
	    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
			{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
	    <?php }?>
		<?php
$_smarty_tpl->tpl_vars['colData'] = $foreach_colData_Sav;
}
?>
	</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
	<?php
$_smarty_tpl->tpl_vars['rowData'] = $foreach_rowData_Sav;
}
?>
	</table>
    <?php if (!empty($_smarty_tpl->tpl_vars['label']->value) && !is_int($_smarty_tpl->tpl_vars['label']->value) && $_smarty_tpl->tpl_vars['label']->value != 'DEFAULT' && (!isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) || (isset($_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab']) && $_smarty_tpl->tpl_vars['tabDefs']->value[$_smarty_tpl->tpl_vars['label_upper']->value]['newTab'] == false))) {?>
    <?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_section']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_section']->value['iteration'] : null);?>
, '<?php echo $_smarty_tpl->tpl_vars['panelState']->value;?>
'); {rdelim}); <?php echo '</script'; ?>
>
    <?php }?>
{if $panelFieldCount == 0}

      {*  <?php echo '<script'; ?>
>document.getElementById("<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
").style.display='none';<?php echo '</script'; ?>
> *}
{/if}
<?php }?>
</div>
<?php
$_smarty_tpl->tpl_vars['panel'] = $foreach_panel_Sav;
}
?>
<?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
  </div>
<?php }?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footerTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['useTabs']->value) {?>
<?php echo '<script'; ?>
 type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs = new YAHOO.widget.TabView("<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs");
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_detailview_tabs.selectTab(0);
<?php echo '</script'; ?>
>
<?php }

}
}
?>