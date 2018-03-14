<?php /* Smarty version 3.1.24, created on 2018-03-14 10:55:40
         compiled from "./include/SubPanel/tpls/singletabmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15022345975aa8f19cc5e8c1_93427048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a721212be21de529f35cca4d46bc905d5662a39' => 
    array (
      0 => './include/SubPanel/tpls/singletabmenu.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15022345975aa8f19cc5e8c1_93427048',
  'variables' => 
  array (
    'startSubPanel' => 0,
    'moreTab' => 0,
    'maxSubtabs' => 0,
    'othertabs' => 0,
    'tab' => 0,
    'notFirst' => 0,
    'subtab' => 0,
    'otherMoreSubMenu' => 0,
    'subpanelTitlesJSON' => 0,
    'showLinks' => 0,
    'sugartabs' => 0,
    'moreMenu' => 0,
    'app_strings' => 0,
    'subtabs' => 0,
    'moreSubMenuName' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f19cc89814_61232665',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f19cc89814_61232665')) {
function content_5aa8f19cc89814_61232665 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimage')) require_once 'include/Smarty/plugins/function.sugar_getimage.php';

$_smarty_tpl->properties['nocache_hash'] = '15022345975aa8f19cc5e8c1_93427048';
?>



<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen("typeof get_module_name != 'undefined'", function()
{
	SUGAR.subpanelUtils.currentSubpanelGroup = '<?php echo $_smarty_tpl->tpl_vars['startSubPanel']->value;?>
';

	SUGAR.subpanelUtils.subpanelMoreTab = '<?php echo $_smarty_tpl->tpl_vars['moreTab']->value;?>
';

	SUGAR.subpanelUtils.subpanelMaxSubtabs = '<?php echo $_smarty_tpl->tpl_vars['maxSubtabs']->value;?>
';

	SUGAR.subpanelUtils.subpanelHtml = new Array();

	SUGAR.subpanelUtils.loadedGroups = Array();
	SUGAR.subpanelUtils.loadedGroups.push('<?php echo $_smarty_tpl->tpl_vars['startSubPanel']->value;?>
');

	SUGAR.subpanelUtils.subpanelSubTabs = new Array();
	SUGAR.subpanelUtils.subpanelGroups = new Array();
<?php
$_from = $_smarty_tpl->tpl_vars['othertabs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$foreach_tab_Sav = $_smarty_tpl->tpl_vars['tab'];
?>
<?php if (isset($_smarty_tpl->tpl_vars['notFirst'])) {$_smarty_tpl->tpl_vars['notFirst'] = clone $_smarty_tpl->tpl_vars['notFirst'];
$_smarty_tpl->tpl_vars['notFirst']->value = '0'; $_smarty_tpl->tpl_vars['notFirst']->nocache = null; $_smarty_tpl->tpl_vars['notFirst']->scope = 0;
} else $_smarty_tpl->tpl_vars['notFirst'] = new Smarty_Variable('0', null, 0);?>
	SUGAR.subpanelUtils.subpanelGroups['<?php echo $_smarty_tpl->tpl_vars['tab']->value['key'];?>
'] = [<?php
$_from = $_smarty_tpl->tpl_vars['tab']->value['tabs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subtab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subtab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subtab']->value) {
$_smarty_tpl->tpl_vars['subtab']->_loop = true;
$foreach_subtab_Sav = $_smarty_tpl->tpl_vars['subtab'];
if ($_smarty_tpl->tpl_vars['notFirst']->value != 0) {?>, <?php } else {
if (isset($_smarty_tpl->tpl_vars['notFirst'])) {$_smarty_tpl->tpl_vars['notFirst'] = clone $_smarty_tpl->tpl_vars['notFirst'];
$_smarty_tpl->tpl_vars['notFirst']->value = '1'; $_smarty_tpl->tpl_vars['notFirst']->nocache = null; $_smarty_tpl->tpl_vars['notFirst']->scope = 0;
} else $_smarty_tpl->tpl_vars['notFirst'] = new Smarty_Variable('1', null, 0);
}?>'<?php echo $_smarty_tpl->tpl_vars['subtab']->value['key'];?>
'<?php
$_smarty_tpl->tpl_vars['subtab'] = $foreach_subtab_Sav;
}
$_from = $_smarty_tpl->tpl_vars['otherMoreSubMenu']->value[$_smarty_tpl->tpl_vars['tab']->value['key']]['tabs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subtab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subtab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subtab']->value) {
$_smarty_tpl->tpl_vars['subtab']->_loop = true;
$foreach_subtab_Sav = $_smarty_tpl->tpl_vars['subtab'];
?>, '<?php echo $_smarty_tpl->tpl_vars['subtab']->value['key'];?>
'<?php
$_smarty_tpl->tpl_vars['subtab'] = $foreach_subtab_Sav;
}
?>];
<?php
$_smarty_tpl->tpl_vars['tab'] = $foreach_tab_Sav;
}
?>

<?php if (isset($_smarty_tpl->tpl_vars['notFirst'])) {$_smarty_tpl->tpl_vars['notFirst'] = clone $_smarty_tpl->tpl_vars['notFirst'];
$_smarty_tpl->tpl_vars['notFirst']->value = '0'; $_smarty_tpl->tpl_vars['notFirst']->nocache = null; $_smarty_tpl->tpl_vars['notFirst']->scope = 0;
} else $_smarty_tpl->tpl_vars['notFirst'] = new Smarty_Variable('0', null, 0);?>
	SUGAR.subpanelUtils.subpanelTitles = <?php echo $_smarty_tpl->tpl_vars['subpanelTitlesJSON']->value;?>
;

	SUGAR.subpanelUtils.tabCookieName = get_module_name() + '_sp_tab';

	SUGAR.subpanelUtils.showLinks = <?php echo $_smarty_tpl->tpl_vars['showLinks']->value;?>
;

	SUGAR.subpanelUtils.requestUrl = 'index.php?to_pdf=1&module=MySettings&action=LoadTabSubpanels&loadModule=<?php echo $_REQUEST['module'];?>
&record=<?php echo $_REQUEST['record'];?>
&subpanels=';
});
<?php echo '</script'; ?>
>


<?php if (!empty($_smarty_tpl->tpl_vars['sugartabs']->value)) {?>
<ul id="groupTabs" class="subpanelTablist">
<?php
$_from = $_smarty_tpl->tpl_vars['sugartabs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$foreach_tab_Sav = $_smarty_tpl->tpl_vars['tab'];
?>
	<li id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
_sp_tab">
		<a class="<?php echo $_smarty_tpl->tpl_vars['tab']->value['type'];?>
" href="javascript:SUGAR.subpanelUtils.loadSubpanelGroup('<?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
');"><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</a>
	</li>
<?php
$_smarty_tpl->tpl_vars['tab'] = $foreach_tab_Sav;
}
?>
<?php if (!empty($_smarty_tpl->tpl_vars['moreMenu']->value)) {?>
	<li>
		<div id='MorePanelHandle' onmouseover='SUGAR.subpanelUtils.menu.tbspButtonMouseOver(this.id,"","",0);'>
			<?php echo smarty_function_sugar_getimage(array('name'=>"blank",'ext'=>".gif",'width'=>"16",'height'=>"16",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LBL_MORE'],'other_attributes'=>'border="0" '),$_smarty_tpl);?>

		</div>
	</li>
<?php }?>
</ul>

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="subpanelTabForm">
	<tr>
		<td>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['showLinks']->value == 'true') {?>
<table cellpadding="0" cellspacing="0" width='100%'>
	<tr height="20">
		<td class="subpanelSubTabBar" colspan="100" id="subpanelSubTabs">
			<table border="0" cellpadding="0" cellspacing="0" height="20" width="100%" class="subTabs">
				<tbody>
				<tr>
<?php
$_from = $_smarty_tpl->tpl_vars['subtabs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$foreach_tab_Sav = $_smarty_tpl->tpl_vars['tab'];
?>
<?php if (!empty($_smarty_tpl->tpl_vars['notFirst']->value) && ($_smarty_tpl->tpl_vars['notFirst']->value != 0) && ($_smarty_tpl->tpl_vars['notFirst']->value != 1)) {?>
					<td width='1'> | </td>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['notFirst'])) {$_smarty_tpl->tpl_vars['notFirst'] = clone $_smarty_tpl->tpl_vars['notFirst'];
$_smarty_tpl->tpl_vars['notFirst']->value = '2'; $_smarty_tpl->tpl_vars['notFirst']->nocache = null; $_smarty_tpl->tpl_vars['notFirst']->scope = 0;
} else $_smarty_tpl->tpl_vars['notFirst'] = new Smarty_Variable('2', null, 0);?>
<?php }?>
					<td nowrap="nowrap">
						<a href='#<?php echo $_smarty_tpl->tpl_vars['tab']->value['key'];?>
' class='subTabLink'><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</a>
					</td>
<?php
$_smarty_tpl->tpl_vars['tab'] = $foreach_tab_Sav;
}
?>
<?php if (!empty($_smarty_tpl->tpl_vars['otherMoreSubMenu']->value[$_smarty_tpl->tpl_vars['moreSubMenuName']->value]['tabs'])) {?>
					<td nowrap="nowrap"> | &nbsp;<span class="subTabMore" id="MoreSub<?php echo $_smarty_tpl->tpl_vars['moreSubMenuName']->value;?>
PanelHandle" style="margin-left:2px; cursor: pointer; cursor: hand;" align="absmiddle" onmouseover="SUGAR.subpanelUtils.menu.tbspButtonMouseOver(this.id,'','',0);">&gt;&gt;</span></td>
<?php }?>
					<td width='100%'>&nbsp;</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
</table>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['moreMenu']->value)) {?>
<div id="MorePanelMenu" class="menu">
<?php
$_from = $_smarty_tpl->tpl_vars['moreMenu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$foreach_tab_Sav = $_smarty_tpl->tpl_vars['tab'];
?>
	<a href="javascript:SUGAR.subpanelUtils.loadSubpanelGroupFromMore('<?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
');" class="menuItem" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
_sp_mm" parentid="MorePanelMenu" onmouseover="hiliteItem(this,'yes'); closeSubMenus(this);" onmouseout="unhiliteItem(this);"><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</a>
<?php
$_smarty_tpl->tpl_vars['tab'] = $foreach_tab_Sav;
}
?>
</div>
<?php }?>

<?php
$_from = $_smarty_tpl->tpl_vars['otherMoreSubMenu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$foreach_group_Sav = $_smarty_tpl->tpl_vars['group'];
?>
<?php if (!empty($_smarty_tpl->tpl_vars['group']->value['tabs'])) {?>
<div id="MoreSub<?php echo $_smarty_tpl->tpl_vars['group']->value['key'];?>
PanelMenu" class="menu">
<?php
$_from = $_smarty_tpl->tpl_vars['group']->value['tabs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['subtab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['subtab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subtab']->value) {
$_smarty_tpl->tpl_vars['subtab']->_loop = true;
$foreach_subtab_Sav = $_smarty_tpl->tpl_vars['subtab'];
?>
	<a href="#<?php echo $_smarty_tpl->tpl_vars['subtab']->value['key'];?>
" class="menuItem" parentid="MoreSub<?php echo $_smarty_tpl->tpl_vars['group']->value['key'];?>
PanelMenu" onmouseover="hiliteItem(this,'yes'); closeSubMenus(this);" onmouseout="unhiliteItem(this);"><?php echo $_smarty_tpl->tpl_vars['subtab']->value['label'];?>
</a>
<?php
$_smarty_tpl->tpl_vars['subtab'] = $foreach_subtab_Sav;
}
?>
</div>
<?php }?>
<?php
$_smarty_tpl->tpl_vars['group'] = $foreach_group_Sav;
}
?>


<?php }
}
?>